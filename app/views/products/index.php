<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php include APP_DIR . 'views/partials/head.php'; ?>
<?php
$total_products = count($products);
$total_quantity = 0;
$total_value = 0.0;
foreach ($products as $p) {
    $total_quantity += (int) $p['quantity'];
    $total_value += (float) $p['price'] * (int) $p['quantity'];
}
// View-only helpers for the product avatar tile (same hash is used by the live preview script).
$avatar_hue = function ($name) {
    $name = (string) $name;
    if ($name === '') { return 25; }
    $h = 0;
    foreach (array_values(unpack('C*', $name)) as $i => $byte) { $h += $byte * ($i + 7); }
    return $h % 360;
};
$avatar_initial = function ($name) {
    $name = trim((string) $name);
    if ($name === '' || !preg_match('/^./us', $name, $m)) { return '?'; }
    return function_exists('mb_strtoupper') ? mb_strtoupper($m[0], 'UTF-8') : strtoupper($m[0]);
};
?>
<main>
    <div class="shell">
        <?php if (!empty($flash)): ?><div class="alert alert-success" role="status" aria-live="polite"><svg aria-hidden="true"><use href="#i-circle-check"/></svg><span><?= htmlspecialchars($flash, ENT_QUOTES, 'UTF-8') ?></span></div><?php endif; ?>
        <div class="page-head">
            <div><h1 class="heading">Products</h1><p class="subheading">Keep your catalog clear, current, and ready for your next customer.</p></div>
            <a class="btn btn-primary" href="<?= site_url('products/create') ?>"><svg aria-hidden="true"><use href="#i-plus"/></svg>Add product</a>
        </div>

        <div class="stats-grid">
            <div class="stat-card hero"><span class="stat-icon"><svg aria-hidden="true"><use href="#i-wallet"/></svg></span><div><div class="stat-value"><span class="cur">₱</span><span data-count="<?= $total_value ?>" data-decimals="2"><?= number_format($total_value, 2) ?></span></div><div class="stat-label">Inventory value</div></div></div>
            <div class="stat-card t-blue"><span class="stat-icon"><svg aria-hidden="true"><use href="#i-boxes"/></svg></span><div><div class="stat-value" data-count="<?= $total_products ?>"><?= $total_products ?></div><div class="stat-label">Total products</div></div></div>
            <div class="stat-card t-green"><span class="stat-icon"><svg aria-hidden="true"><use href="#i-layers"/></svg></span><div><div class="stat-value" data-count="<?= $total_quantity ?>"><?= $total_quantity ?></div><div class="stat-label">Units in stock</div></div></div>
        </div>

        <section class="panel table-wrap">
            <?php if (empty($products)): ?>
                <div class="empty-state">
                    <span class="stat-icon" style="--tint:#f2701a"><svg aria-hidden="true"><use href="#i-package-open"/></svg></span>
                    <strong>Your catalog is empty</strong>
                    <p>Add your first product to get started.</p>
                    <a class="btn btn-primary" href="<?= site_url('products/create') ?>"><svg aria-hidden="true"><use href="#i-plus"/></svg>Add product</a>
                </div>
            <?php else: ?>
                <div class="table-scroll">
                <table class="table table-cards">
                    <thead><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Created</th><th><span class="sr-only">Actions</span></th></tr></thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td class="td-product"><div class="product-cell"><span class="p-avatar" style="--h:<?= (int) $avatar_hue($product['product_name']) ?>" aria-hidden="true"><?= htmlspecialchars($avatar_initial($product['product_name']), ENT_QUOTES, 'UTF-8') ?></span><div><div class="product-name"><?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') ?></div><div class="description"><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></div></div></div></td>
                            <td class="td-price price">₱<?= number_format((float) $product['price'], 2) ?></td>
                            <td class="td-stock"><span class="badge<?= (int) $product['quantity'] === 0 ? ' empty' : '' ?>"><?= (int) $product['quantity'] ?> in stock</span></td>
                            <td class="td-date description"><?= date('M j, Y', strtotime($product['created_at'])) ?></td>
                            <td class="td-actions"><div class="actions"><a class="btn btn-secondary btn-sm" href="<?= site_url('products/edit/' . (int) $product['id']) ?>"><svg aria-hidden="true"><use href="#i-pencil"/></svg>Edit</a><form method="post" action="<?= site_url('products/delete/' . (int) $product['id']) ?>" data-confirm data-confirm-title="Delete this product?" data-confirm-body="&quot;<?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') ?>&quot; will be removed from your catalog. This can be recovered from your records later if needed." data-confirm-action="Delete product"><button class="btn btn-danger btn-sm" type="submit"><svg aria-hidden="true"><use href="#i-trash"/></svg>Delete</button></form></div></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            <?php endif; ?>
        </section>
    </div>
</main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>