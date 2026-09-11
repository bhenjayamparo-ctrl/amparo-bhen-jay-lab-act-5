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
?>
<main>
    <div class="shell">
        <?php if (!empty($flash)): ?><div class="alert alert-success" role="status" aria-live="polite"><?= htmlspecialchars($flash, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
        <div class="page-head">
            <div><p class="eyebrow">Catalog overview</p><h1 class="heading">Products</h1><p class="subheading">Keep your catalog clear, current, and ready for your next customer.</p></div>
            <a class="btn btn-primary" href="<?= site_url('products/create') ?>"><svg><use href="#icon-plus"/></svg>Add product</a>
        </div>

        <div class="stats-grid">
            <div class="stat-card"><span class="stat-icon"><svg><use href="#icon-boxes"/></svg></span><div><div class="stat-value"><?= $total_products ?></div><div class="stat-label">Total products</div></div></div>
            <div class="stat-card"><span class="stat-icon"><svg><use href="#icon-layers"/></svg></span><div><div class="stat-value"><?= $total_quantity ?></div><div class="stat-label">Units in stock</div></div></div>
            <div class="stat-card"><span class="stat-icon"><svg><use href="#icon-coins"/></svg></span><div><div class="stat-value">₱<?= number_format($total_value, 2) ?></div><div class="stat-label">Inventory value</div></div></div>
        </div>

        <section class="panel table-wrap">
            <?php if (empty($products)): ?>
                <div class="empty"><strong>Your catalog is empty</strong>Add your first product to get started.</div>
            <?php else: ?>
                <table class="table">
                    <thead><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Created</th><th><span class="sr-only">Actions</span></th></tr></thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><div class="product-name"><?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') ?></div><div class="description"><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></div></td>
                            <td class="price">₱<?= number_format((float) $product['price'], 2) ?></td>
                            <td><span class="stock<?= (int) $product['quantity'] === 0 ? ' empty' : '' ?>"><?= (int) $product['quantity'] ?> in stock</span></td>
                            <td class="description"><?= date('M j, Y', strtotime($product['created_at'])) ?></td>
                            <td><div class="actions"><a class="btn btn-secondary" href="<?= site_url('products/edit/' . (int) $product['id']) ?>"><svg><use href="#icon-edit"/></svg>Edit</a><form method="post" action="<?= site_url('products/delete/' . (int) $product['id']) ?>" data-confirm data-confirm-title="Delete this product?" data-confirm-body="&quot;<?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8') ?>&quot; will be removed from your catalog. This can be recovered from your records later if needed." data-confirm-action="Delete product"><button class="btn btn-danger" type="submit"><svg><use href="#icon-trash"/></svg>Delete</button></form></div></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </div>
</main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>