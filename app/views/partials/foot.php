<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<footer class="site-footer">
    <div class="shell">
        <p class="footer-note">CRUD Application with Authentication &middot; Web Systems and Technologies 2</p>
    </div>
</footer>

<div class="modal-overlay" id="confirmModal" role="dialog" aria-modal="true" aria-labelledby="confirmModalTitle" aria-describedby="confirmModalBody">
    <div class="modal-card">
        <span class="modal-icon"><svg><use href="#icon-trash"/></svg></span>
        <h2 class="modal-title" id="confirmModalTitle">Are you sure?</h2>
        <p class="modal-body" id="confirmModalBody">This action cannot be undone.</p>
        <div class="modal-actions">
            <button type="button" class="btn btn-secondary" id="confirmModalCancel">Cancel</button>
            <button type="button" class="btn" id="confirmModalConfirm" style="background:var(--danger);color:#fff">Delete product</button>
        </div>
    </div>
</div>
<script>
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
</body>
</html>