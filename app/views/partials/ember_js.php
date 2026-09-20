<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php $__n = defined('CSP_NONCE') ? ' nonce="' . CSP_NONCE . '"' : ''; ?>
<script<?= $__n ?>>
/* Ember — presentation-only behaviour. Every [data-cham] on the page gets eyes that follow the cursor,
   idle wandering, a tongue flick on click, and a small "role" that reacts to what the page is doing. */
(function () {
    var stages = [].slice.call(document.querySelectorAll('[data-cham]'));
    if (!stages.length) return;

    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var measure = document.createElement('canvas').getContext('2d');
    var ORDER = ['error', 'lost', 'joy', 'worried', 'excited', 'glad', 'curious', 'peek', 'hiding', 'user'];
    var lastMove = Date.now();
    var insts = [];
    var roles = {};

    function make(stage) {
        var eyes = [].slice.call(stage.querySelectorAll('.ch-eye'));
        var tilt = stage.querySelector('.cham-tilt');
        var sayBox = stage.querySelector('.cham-say');
        var sayText = sayBox ? sayBox.querySelector('span') : null;
        var R = 7.2, lock = null, sayKey = '', busy = false;
        var e = { stage: stage, role: stage.getAttribute('data-role') || 'plain', lines: { idle: stage.getAttribute('data-say') || '' }, wanderMs: 1700 };

        e.defaults = function (o) { Object.keys(o).forEach(function (k) { if (!e.lines[k]) e.lines[k] = o[k]; }); };

        function say(key) {
            if (!sayText || key === sayKey) return;
            sayKey = key; sayText.textContent = e.lines[key] || e.lines.idle;
            sayBox.classList.remove('bump'); void sayBox.offsetWidth; sayBox.classList.add('bump');
        }
        function refreshSay() {
            var key = 'idle';
            for (var i = 0; i < ORDER.length; i++) {
                if (stage.classList.contains('is-' + ORDER[i]) && e.lines[ORDER[i]]) { key = ORDER[i]; break; }
            }
            say(key);
        }
        e.set = function (cls, on) { stage.classList.toggle(cls, !!on); refreshSay(); };

        // Each pupil looks at the target on its own
        e.aim = function (cx, cy) {
            eyes.forEach(function (eye) {
                var r = eye.querySelector('.ch-sclera').getBoundingClientRect();
                var dx = cx - (r.left + r.width / 2), dy = cy - (r.top + r.height / 2);
                var d = Math.hypot(dx, dy) || 1, k = Math.min(1, d / 150);
                eye.querySelector('.ch-pupil').style.transform = 'translate(' + (dx / d * R * k).toFixed(2) + 'px,' + (dy / d * R * k).toFixed(2) + 'px)';
            });
            var s = stage.getBoundingClientRect();
            var t = Math.max(-5, Math.min(5, (cx - (s.left + s.width / 2)) / window.innerWidth * 16));
            tilt.style.setProperty('--tilt', t.toFixed(2) + 'deg');
        };
        e.aimAt = function (el, xr) {
            var r = el.getBoundingClientRect();
            e.aim(r.left + r.width * (xr === undefined ? .5 : xr), r.top + r.height / 2);
        };
        e.aimCaret = function (input) {
            var r = input.getBoundingClientRect(), cs = getComputedStyle(input);
            measure.font = cs.fontWeight + ' ' + cs.fontSize + ' ' + cs.fontFamily;
            var pos = input.selectionStart == null ? input.value.length : input.selectionStart;
            var before = input.value.slice(0, pos), y = r.top + r.height / 2;
            if (input.tagName === 'TEXTAREA') {
                var lines = before.split('\n'); before = lines[lines.length - 1];
                y = Math.min(r.bottom - 14, r.top + 24 + (lines.length - 1) * 22);
            }
            e.aim(Math.min(r.right - 16, r.left + 16 + measure.measureText(before).width), y);
        };

        // Locks keep the eyes on something (a field, a button) instead of the mouse
        e.lockTo = function (el, xr, ms) { lock = { until: ms ? Date.now() + ms : 0 }; e.aimAt(el, xr); };
        e.lockCaret = function (input) { lock = { until: Date.now() + 2500 }; e.aimCaret(input); };
        e.unlock = function () { lock = null; };
        e.locked = function () { return !!lock && (!lock.until || Date.now() < lock.until); };
        e.follow = function (x, y) { if (!e.locked()) e.aim(x, y); };

        e.flick = function () {
            if (busy) return; busy = true;
            stage.classList.remove('is-flick', 'is-joy', 'is-rainbow'); void stage.offsetWidth;
            stage.classList.add('is-flick', 'is-joy', 'is-rainbow'); refreshSay();
            setTimeout(function () { stage.classList.remove('is-flick'); }, 800);
            setTimeout(function () { stage.classList.remove('is-joy', 'is-rainbow'); refreshSay(); busy = false; }, 1100);
        };
        e.celebrate = function (ms) {
            stage.classList.add('is-joy', 'is-rainbow'); refreshSay();
            setTimeout(function () { stage.classList.remove('is-joy', 'is-rainbow'); refreshSay(); }, ms || 1700);
        };

        stage.addEventListener('click', e.flick);
        return e;
    }

    /* ---------------- roles ---------------- */

    // Login: reacts to the username, password and sign-in controls
    roles.login = function (e) {
        var form = document.querySelector('.auth-form'); if (!form) return;
        var user = form.querySelector('[name="username"]'), pass = form.querySelector('[name="password"]');
        var wrap = pass.parentNode, submit = form.querySelector('[type="submit"]');
        e.defaults({ idle: 'Hi there! Ready to sign in?', user: 'Ooh, who might you be?', hiding: "I'm not looking. Promise!", peek: 'Hehe... just a tiny peek.', excited: "Let's gooo!", joy: 'Woohoo! Hold tight...', error: "Hmm, that didn't match." });

        function retarget() {
            var a = document.activeElement;
            if (a === user) { e.unlock(); e.aimCaret(user); }
            else if (wrap.contains(a)) { e.lockTo(pass, .2); }
            else if (a === submit) { e.lockTo(submit); }
            else { e.unlock(); }
        }
        if (document.activeElement === user) e.aimCaret(user);   // autofocus ran before this script

        user.addEventListener('focus', function () { e.unlock(); e.aimCaret(user); });
        user.addEventListener('blur', function () { e.set('is-user', false); setTimeout(retarget, 0); });
        user.addEventListener('input', function () { e.lockCaret(user); e.set('is-user', true); });
        user.addEventListener('keyup', function () { if (document.activeElement === user) e.lockCaret(user); });
        user.addEventListener('click', function () { if (document.activeElement === user) e.aimCaret(user); });

        function syncPass() {
            var inside = wrap.contains(document.activeElement), revealed = pass.type === 'text';
            e.stage.classList.toggle('is-hiding', inside && !revealed);
            e.stage.classList.toggle('is-peek', inside && revealed);
            if (inside) e.lockTo(pass, .2); else retarget();
            e.set('is-user', e.stage.classList.contains('is-user'));
        }
        wrap.addEventListener('focusin', syncPass);
        wrap.addEventListener('focusout', function () { setTimeout(syncPass, 0); });
        wrap.addEventListener('click', function () { setTimeout(syncPass, 0); });

        function excite(on) { if (on) e.lockTo(submit); else setTimeout(retarget, 0); e.set('is-excited', on); }
        submit.addEventListener('pointerenter', function () { excite(true); });
        submit.addEventListener('pointerleave', function () { excite(false); });
        submit.addEventListener('focus', function () { excite(true); });
        submit.addEventListener('blur', function () { excite(false); });
        form.addEventListener('submit', e.flick);

        var tt = document.getElementById('themeToggle');
        if (tt) {
            e.defaults({ curious: 'Lights on, or lights off?' });
            tt.addEventListener('pointerenter', function () { e.set('is-curious', true); e.lockTo(tt, .5); });
            tt.addEventListener('pointerleave', function () { e.set('is-curious', false); setTimeout(retarget, 0); });
            tt.addEventListener('click', function () {
                e.stage.classList.remove('is-rainbow'); void e.stage.offsetWidth; e.stage.classList.add('is-rainbow');
                setTimeout(function () { e.stage.classList.remove('is-rainbow'); }, 1000);
            });
        }

        if (document.querySelector('.auth-card .alert-error')) {
            setTimeout(function () {
                e.set('is-error', true);
                setTimeout(function () { e.set('is-error', false); }, 3400);
            }, 1000);
        }
    };

    // Products page: sits on the "Add product" button and reacts to what you hover
    roles.cta = function (e) {
        e.defaults({ idle: 'Got new stock to add?', excited: 'Add something shiny!', worried: 'Wait... really?!', curious: 'Ooh, some tweaking?', joy: 'Nice work!' });
        var states = ['is-excited', 'is-worried', 'is-curious'];
        document.addEventListener('pointerover', function (ev) {
            var b = ev.target.closest && ev.target.closest('.btn'); if (!b) return;
            if (e.stage.parentNode.contains(b)) { e.set('is-excited', true); e.lockTo(b, .5); }
            else if (b.closest('form[data-confirm]')) { e.set('is-worried', true); e.lockTo(b, .5); }
            else if (b.closest('.actions')) { e.set('is-curious', true); e.lockTo(b, .5); }
        });
        document.addEventListener('pointerout', function (ev) {
            var b = ev.target.closest && ev.target.closest('.btn'); if (!b) return;
            if (ev.relatedTarget && b.contains(ev.relatedTarget)) return;
            states.forEach(function (s) { e.stage.classList.remove(s); });
            e.unlock(); e.set('is-curious', false);
        });
        if (document.querySelector('.alert-success')) setTimeout(function () { e.celebrate(1900); }, 900);
    };

    // Empty catalog: a big, hungry Ember who snacks on fireflies
    roles.empty = function (e) {
        e.defaults({ idle: "It's quiet in here...", excited: "Let's fill this shelf!" });
        var btn = document.querySelector('.empty-state .btn-primary');
        if (btn) {
            btn.addEventListener('pointerenter', function () { e.set('is-excited', true); e.lockTo(btn, .5); });
            btn.addEventListener('pointerleave', function () { e.set('is-excited', false); e.unlock(); });
        }
        if (!reduce) setInterval(function () { if (e.stage.getClientRects().length) e.flick(); }, 7000);
    };

    // Add / edit product: watches you fill in the form
    roles.form = function (e) {
        var form = document.querySelector('form[data-product-form]'); if (!form) return;
        var f = { name: form.querySelector('[name="product_name"]'), desc: form.querySelector('[name="description"]'), price: form.querySelector('[name="price"]'), qty: form.querySelector('[name="quantity"]') };
        e.defaults({ idle: 'What are we selling today?', user: 'Ooh, tell me more...', glad: 'Looking good!', worried: 'No stock? Oh no...', joy: 'Saving it!' });

        function stock() {
            var q = f.qty.value.trim(), p = parseFloat(f.price.value), n = parseInt(q, 10);
            var zero = q !== '' && n === 0;
            e.stage.classList.toggle('is-worried', zero);
            e.stage.classList.toggle('is-glad', !zero && q !== '' && n > 0 && p > 0);
            e.set('is-user', e.stage.classList.contains('is-user'));
        }
        [f.name, f.desc].forEach(function (el) {
            el.addEventListener('focus', function () { e.unlock(); e.aimCaret(el); });
            el.addEventListener('input', function () { e.lockCaret(el); e.set('is-user', true); });
            el.addEventListener('keyup', function () { if (document.activeElement === el) e.lockCaret(el); });
            el.addEventListener('click', function () { e.aimCaret(el); });
            el.addEventListener('blur', function () { e.set('is-user', false); });
        });
        [f.price, f.qty].forEach(function (el) {
            el.addEventListener('focus', function () { e.lockTo(el, .3); });
            el.addEventListener('blur', function () { e.unlock(); });
            el.addEventListener('input', stock);
        });
        form.addEventListener('submit', e.flick);
        stock();
    };

    // Delete dialog: nervous, and begs when you hover the red button
    roles.modal = function (e) {
        var ov = document.getElementById('confirmModal'); if (!ov) return;
        var ok = document.getElementById('confirmModalConfirm'), no = document.getElementById('confirmModalCancel');
        e.defaults({ idle: 'Wait, are you sure?', worried: 'Wait, are you sure?', glad: 'Phew, thank you!', error: 'Noooo!' });
        new MutationObserver(function () {
            if (ov.classList.contains('open')) { e.set('is-worried', true); e.lockTo(ok, .5); }
            else { ['is-worried', 'is-glad', 'is-error'].forEach(function (c) { e.stage.classList.remove(c); }); e.unlock(); e.set('is-user', false); }
        }).observe(ov, { attributes: true, attributeFilter: ['class'] });
        ok.addEventListener('pointerenter', function () { e.set('is-error', true); e.lockTo(ok, .5); });
        function isOpen() { return ov.classList.contains('open'); }
        ok.addEventListener('pointerleave', function () { e.set('is-error', false); });
        no.addEventListener('pointerenter', function () { e.stage.classList.remove('is-worried'); e.set('is-glad', true); e.lockTo(no, .5); });
        no.addEventListener('pointerleave', function () { if (!isOpen()) return; e.stage.classList.remove('is-glad'); e.set('is-worried', true); e.lockTo(ok, .5); });
    };

    // Error pages: lost and camouflaged
    roles.lost = function (e) {
        e.stage.classList.add('is-lost');
        e.wanderMs = 1000;
    };

    /* ---------------- boot ---------------- */
    stages.forEach(function (stage) {
        var e = make(stage); insts.push(e);
        if (roles[e.role]) roles[e.role](e);
        if (!reduce) {
            setInterval(function () {
                if (e.locked() || Date.now() - lastMove < 3000 || e.stage.classList.contains('is-hiding') || !e.stage.getClientRects().length) return;
                [].slice.call(e.stage.querySelectorAll('.ch-pupil')).forEach(function (p) {
                    p.style.transform = 'translate(' + ((Math.random() * 2 - 1) * 7.2).toFixed(2) + 'px,' + ((Math.random() * 2 - 1) * 5).toFixed(2) + 'px)';
                });
                e.stage.querySelector('.cham-tilt').style.setProperty('--tilt', ((Math.random() * 2 - 1) * 2.5).toFixed(2) + 'deg');
            }, e.wanderMs);
        }
    });

    document.addEventListener('pointermove', function (ev) {
        lastMove = Date.now();
        insts.forEach(function (e) { e.follow(ev.clientX, ev.clientY); });
    }, { passive: true });
})();
</script>