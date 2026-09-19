<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
$__nonce = defined('CSP_NONCE') ? ' nonce="' . CSP_NONCE . '"' : '';
?>
<footer class="site-footer">
    <div class="shell footer-inner">
        <div class="built-with">
            <span class="bw-label">Built with</span>
            <ul class="dock" aria-label="Technologies used">
                <li data-label="LavaLust"><span class="dock-icon"><svg aria-hidden="true"><use href="#logo-lavalust"/></svg></span><span class="sr-only">LavaLust</span></li>
                <li data-label="GitHub"><span class="dock-icon mono"><svg aria-hidden="true"><use href="#logo-github"/></svg></span><span class="sr-only">GitHub</span></li>
                <li data-label="Aiven MySQL"><span class="dock-icon wide"><svg aria-hidden="true"><use href="#logo-aiven"/></svg></span><span class="sr-only">Aiven MySQL</span></li>
                <li data-label="Render"><span class="dock-icon mono"><svg aria-hidden="true"><use href="#logo-render"/></svg></span><span class="sr-only">Render</span></li>
                <li data-label="Navicat"><span class="dock-icon"><svg aria-hidden="true"><use href="#logo-navicat"/></svg></span><span class="sr-only">Navicat</span></li>
                <li data-label="VS Code"><span class="dock-icon"><svg aria-hidden="true"><use href="#logo-vscode"/></svg></span><span class="sr-only">VS Code</span></li>
            </ul>
        </div>
        <p class="footer-note">CRUD Application with Authentication &middot; Web Systems and Technologies 2</p>
    </div>
</footer>

<div class="modal-overlay" id="confirmModal" role="dialog" aria-modal="true" aria-labelledby="confirmModalTitle" aria-describedby="confirmModalBody">
    <div class="modal-card">
        <span class="modal-icon"><svg aria-hidden="true"><use href="#i-trash"/></svg></span>
        <h2 class="modal-title" id="confirmModalTitle">Are you sure?</h2>
        <p class="modal-body" id="confirmModalBody">This action cannot be undone.</p>
        <div class="modal-actions">
            <button type="button" class="btn btn-secondary" id="confirmModalCancel">Cancel</button>
            <button type="button" class="btn btn-destructive" id="confirmModalConfirm">Delete product</button>
        </div>
    </div>
</div>
<script<?= $__nonce ?>>
(function () {
    var overlay = document.getElementById('confirmModal');
    var titleEl = document.getElementById('confirmModalTitle');
    var bodyEl = document.getElementById('confirmModalBody');
    var cancelBtn = document.getElementById('confirmModalCancel');
    var confirmBtn = document.getElementById('confirmModalConfirm');
    var pendingForm = null;
    var lastFocused = null;

    function openModal(form) {
        pendingForm = form;
        lastFocused = document.activeElement;
        titleEl.textContent = form.getAttribute('data-confirm-title') || 'Are you sure?';
        bodyEl.textContent = form.getAttribute('data-confirm-body') || 'This action cannot be undone.';
        confirmBtn.disabled = false;
        confirmBtn.textContent = form.getAttribute('data-confirm-action') || 'Confirm';
        overlay.classList.add('open');
        confirmBtn.focus();
        document.addEventListener('keydown', onKeydown);
    }

    function closeModal() {
        overlay.classList.remove('open');
        pendingForm = null;
        document.removeEventListener('keydown', onKeydown);
        if (lastFocused) { lastFocused.focus(); }
    }

    function onKeydown(e) {
        if (e.key === 'Escape') { closeModal(); return; }
        if (e.key === 'Tab') {
            var focusables = [cancelBtn, confirmBtn];
            var idx = focusables.indexOf(document.activeElement);
            e.preventDefault();
            var next = e.shiftKey
                ? focusables[idx <= 0 ? focusables.length - 1 : idx - 1]
                : focusables[idx === focusables.length - 1 ? 0 : idx + 1];
            next.focus();
        }
    }

    document.querySelectorAll('form[data-confirm]').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            openModal(form);
        });
    });

    cancelBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) { closeModal(); }
    });
    confirmBtn.addEventListener('click', function () {
        if (!pendingForm) return;
        confirmBtn.disabled = true;
        confirmBtn.textContent = 'Working…';
        pendingForm.submit();
    });
})();
</script>
<script<?= $__nonce ?>>
/* Presentation-only enhancements: theme toggle, glass spotlight, count-up, password reveal, live preview. */
(function () {
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Theme toggle (the initial theme is set in <head> to avoid a flash)
    var toggle = document.getElementById('themeToggle');
    if (toggle) {
        toggle.addEventListener('click', function () {
            var root = document.documentElement;
            var next = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            root.setAttribute('data-theme', next);
            try { localStorage.setItem('bj-theme', next); } catch (e) {}
        });
    }

    // Glass spotlight follows the pointer
    if (!reduce) {
        var raf = null;
        document.addEventListener('pointermove', function (e) {
            var el = e.target.closest && e.target.closest('.panel, .stat-card, .preview-card');
            if (!el || raf) return;
            raf = requestAnimationFrame(function () {
                var r = el.getBoundingClientRect();
                el.style.setProperty('--mx', (e.clientX - r.left) + 'px');
                el.style.setProperty('--my', (e.clientY - r.top) + 'px');
                raf = null;
            });
        }, { passive: true });
    }

    // Count-up for the dashboard numbers (final text is always the server-rendered value)
    if (!reduce) {
        document.querySelectorAll('[data-count]').forEach(function (el) {
            var target = parseFloat(el.getAttribute('data-count')) || 0;
            var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
            var finalText = el.textContent;
            var start = null, dur = 1100;
            function fmt(n) { return n.toLocaleString('en-US', { minimumFractionDigits: decimals, maximumFractionDigits: decimals }); }
            function tick(ts) {
                if (start === null) start = ts;
                var p = Math.min((ts - start) / dur, 1);
                var eased = 1 - Math.pow(1 - p, 4);
                el.textContent = p < 1 ? fmt(target * eased) : finalText;
                if (p < 1) requestAnimationFrame(tick);
            }
            el.textContent = fmt(0);
            requestAnimationFrame(tick);
        });
    }

    // Password reveal
    document.querySelectorAll('.reveal').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var input = btn.parentNode.querySelector('input');
            var show = input.type === 'password';
            input.type = show ? 'text' : 'password';
            btn.setAttribute('aria-pressed', show ? 'true' : 'false');
            btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
        });
    });

    // Live product preview (create / edit pages)
    var preview = document.querySelector('[data-preview-root]');
    if (preview) {
        var form = document.querySelector('form[data-product-form]');
        var q = function (n) { return form.querySelector('[name="' + n + '"]'); };
        var nameEl = preview.querySelector('[data-p="name"]');
        var descEl = preview.querySelector('[data-p="desc"]');
        var priceEl = preview.querySelector('[data-p="price"]');
        var stockEl = preview.querySelector('[data-p="stock"]');
        var avEl = preview.querySelector('[data-p="avatar"]');
        var hue = function (s) {
            if (!s) return 25;
            var b = new TextEncoder().encode(s), h = 0;
            for (var i = 0; i < b.length; i++) h += b[i] * (i + 7);
            return h % 360;
        };
        var update = function () {
            var name = q('product_name').value.trim();
            var desc = q('description').value.trim();
            var price = parseFloat(q('price').value);
            var qtyRaw = q('quantity').value.trim();
            nameEl.textContent = name || 'Product name';
            nameEl.classList.toggle('is-placeholder', !name);
            descEl.textContent = desc || 'Your description will appear here.';
            descEl.classList.toggle('is-placeholder', !desc);
            priceEl.textContent = '\u20B1' + (isNaN(price) ? 0 : price).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            avEl.textContent = name ? Array.from(name)[0].toUpperCase() : '?';
            avEl.style.setProperty('--h', hue(name));
            if (qtyRaw === '') {
                stockEl.className = 'badge neutral';
                stockEl.textContent = 'Set quantity';
            } else {
                var qty = parseInt(qtyRaw, 10) || 0;
                stockEl.className = 'badge' + (qty === 0 ? ' empty' : '');
                stockEl.textContent = qty + ' in stock';
            }
        };
        form.addEventListener('input', update);
        update();
    }
})();
</script>
</body>
</html>