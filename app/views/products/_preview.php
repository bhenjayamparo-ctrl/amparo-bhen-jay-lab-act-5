<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php
// Live preview card (view-only). Server-renders the current values; the footer script keeps it in sync while typing.
$pv_name  = trim((string) ($product['product_name'] ?? ''));
$pv_desc  = trim((string) ($product['description'] ?? ''));
$pv_price = (float) ($product['price'] ?? 0);
$pv_qty_raw = (string) ($product['quantity'] ?? '');
$pv_hue = 25;
if ($pv_name !== '') {
    $pv_hue = 0;
    foreach (array_values(unpack('C*', $pv_name)) as $i => $byte) { $pv_hue += $byte * ($i + 7); }
    $pv_hue = $pv_hue % 360;
}
$pv_initial = '?';
if ($pv_name !== '' && preg_match('/^./us', $pv_name, $pv_m)) {
    $pv_initial = function_exists('mb_strtoupper') ? mb_strtoupper($pv_m[0], 'UTF-8') : strtoupper($pv_m[0]);
}
?>
<aside class="preview-card" data-preview-root aria-label="Live preview">
    <p class="preview-title">Live preview</p>
    <span class="p-avatar" data-p="avatar" style="--h:<?= (int) $pv_hue ?>" aria-hidden="true"><?= htmlspecialchars($pv_initial, ENT_QUOTES, 'UTF-8') ?></span>
    <h2 class="preview-name<?= $pv_name === '' ? ' is-placeholder' : '' ?>" data-p="name"><?= htmlspecialchars($pv_name === '' ? 'Product name' : $pv_name, ENT_QUOTES, 'UTF-8') ?></h2>
    <p class="preview-desc<?= $pv_desc === '' ? ' is-placeholder' : '' ?>" data-p="desc"><?= htmlspecialchars($pv_desc === '' ? 'Your description will appear here.' : $pv_desc, ENT_QUOTES, 'UTF-8') ?></p>
    <div class="preview-foot">
        <span class="preview-price" data-p="price">₱<?= number_format($pv_price, 2) ?></span>
        <?php if ($pv_qty_raw === ''): ?>
            <span class="badge neutral" data-p="stock">Set quantity</span>
        <?php else: ?>
            <span class="badge<?= (int) $pv_qty_raw === 0 ? ' empty' : '' ?>" data-p="stock"><?= (int) $pv_qty_raw ?> in stock</span>
        <?php endif; ?>
    </div>
</aside>