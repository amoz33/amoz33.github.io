(function () {
  'use strict';
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };

  /* Back to top */
  var top = $('.back-top');
  window.addEventListener('scroll', function () {
    top.classList.toggle('show', window.scrollY > 500);
  }, { passive: true });
  top.addEventListener('click', function () { window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });

  /* Close mobile menu after choosing a link */
  $$('.site-nav .nav-link').forEach(function (a) {
    a.addEventListener('click', function () {
      var c = $('#mainNav');
      if (c.classList.contains('show')) bootstrap.Collapse.getOrCreateInstance(c).hide();
    });
  });

  /* Active nav link */
  var links = $$('.site-nav .nav-link');
  var map = {};
  links.forEach(function (a) { map[a.getAttribute('href').slice(1)] = a; });
  if ('IntersectionObserver' in window) {
    var spy = new IntersectionObserver(function (es) {
      es.forEach(function (e) {
        if (e.isIntersecting && map[e.target.id]) {
          links.forEach(function (l) { l.classList.remove('active'); });
          map[e.target.id].classList.add('active');
        }
      });
    }, { rootMargin: '-45% 0px -50% 0px' });
    Object.keys(map).forEach(function (id) { var s = document.getElementById(id); if (s) spy.observe(s); });
  }

  /* Terminal: types once on load */
  var term = $('#term-out');
  if (term && !reduce) {
    var lines = [
      { t: '$ ssh deploy@vps', c: '' },
      { t: '$ nginx -t', c: '' },
      { t: 'syntax is ok', c: '' },
      { t: '$ systemctl reload nginx', c: '' },
      { t: '\u2714 Site is live', c: 'ok' }
    ];
    term.textContent = '';
    var li = 0, ci = 0, cur = null;
    var nextLine = function () {
      if (li >= lines.length) { if (cur) cur.classList.remove('cur'); return; }
      cur = document.createElement('span');
      if (lines[li].c) cur.className = lines[li].c;
      cur.classList.add('cur');
      term.appendChild(cur);
      ci = 0;
      typeChar();
    };
    var typeChar = function () {
      var l = lines[li];
      if (ci < l.t.length) {
        cur.textContent = l.t.slice(0, ++ci);
        setTimeout(typeChar, l.t[0] === '$' ? 55 : 20);
      } else {
        cur.classList.remove('cur');
        li++;
        if (li < lines.length) term.appendChild(document.createTextNode('\n'));
        setTimeout(nextLine, l.t[0] === '$' ? 380 : 220);
      }
    };
    setTimeout(nextLine, 600);
  }

  /* Counters */
  var nums = $$('[data-count]');
  var run = function (el) {
    var end = parseInt(el.getAttribute('data-count'), 10), start = performance.now(), dur = 1400;
    var tick = function (now) {
      var p = Math.min((now - start) / dur, 1), e = 1 - Math.pow(1 - p, 3);
      el.firstChild.nodeValue = Math.round(end * e);
      if (p < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  };
  if ('IntersectionObserver' in window && !reduce) {
    var co = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting) { run(e.target); co.unobserve(e.target); } });
    }, { threshold: .6 });
    nums.forEach(function (n) { co.observe(n); });
  }

  /* Project screenshots: local file first, then live preview, then monogram */
  $$('img[data-local]').forEach(function (img) {
    var remote = img.getAttribute('data-remote');
    var fail = function () { img.remove(); };
    img.addEventListener('error', function onErr() {
      if (remote) { img.removeEventListener('error', onErr); img.addEventListener('error', fail); img.src = remote; remote = null; }
      else fail();
    });
    img.src = img.getAttribute('data-local');
  });

  /* Project filters */
  var grid = $('#work-grid');
  var iso = null;
  var layout = function () {
    if (!window.Isotope || !grid) return;
    iso = new Isotope(grid, { itemSelector: '.work-item', layoutMode: 'fitRows', transitionDuration: reduce ? 0 : '0.3s' });
  };
  window.addEventListener('load', layout);
  $$('#filters button').forEach(function (b) {
    b.addEventListener('click', function () {
      $$('#filters button').forEach(function (x) { x.classList.remove('active'); x.setAttribute('aria-pressed', 'false'); });
      b.classList.add('active'); b.setAttribute('aria-pressed', 'true');
      if (iso) iso.arrange({ filter: b.getAttribute('data-filter') });
    });
  });

  /* Graphic design samples: use real images from assets/img/graphics if present */
  var modalEl = $('#sampleModal'), modal = modalEl ? new bootstrap.Modal(modalEl) : null;
  $$('.design-art[data-sample]').forEach(function (art) {
    var src = art.getAttribute('data-sample'), probe = new Image();
    probe.onload = function () {
      var title = art.closest('.design-tile').querySelector('h3').textContent;
      var btn = document.createElement('button');
      btn.type = 'button';
      btn.setAttribute('aria-label', 'View larger: ' + title);
      btn.innerHTML = '<img alt="' + title + ' design sample" loading="lazy">';
      btn.firstChild.src = src;
      btn.addEventListener('click', function () {
        $('#sampleModalImg').src = src; $('#sampleModalImg').alt = title + ' design sample';
        $('#sampleModalTitle').textContent = title; modal.show();
      });
      art.innerHTML = ''; art.appendChild(btn);
    };
    probe.src = src;
  });

  /* Certificates: hide broken thumbnails */
  $$('.cert-thumb img').forEach(function (img) {
    img.addEventListener('error', function () { img.remove(); });
  });

  /* Contact form opens the visitor's email app */
  var form = $('#contact-form');
  if (form) form.addEventListener('submit', function (e) {
    e.preventDefault();
    var f = new FormData(form);
    var subject = 'Project enquiry: ' + f.get('type');
    var body = 'Hi Tosin,\n\n' + f.get('message') + '\n\nFrom: ' + f.get('name') + ' (' + f.get('email') + ')';
    window.location.href = 'mailto:tosinadegoke30@gmail.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
  });
})();
