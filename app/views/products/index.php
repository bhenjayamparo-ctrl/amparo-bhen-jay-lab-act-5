<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php include APP_DIR . 'views/partials/head.php'; ?>
<main>
    <div class="shell">
        <?php if (!empty($flash)): ?><div class="alert alert-success"><?= htmlspecialchars($flash, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
        <div class="page-head">
            <div><p class="eyebrow">Catalog overview</p><h1 class="heading">Products</h1><p class="subheading">Keep your catalog clear, current, and ready for your next customer.</p></div>
            <a class="btn btn-primary" href="<?= site_url('products/create') ?>">＋ Add product</a>
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
                            <td><div class="actions"><a class="btn btn-secondary" href="<?= site_url('products/edit/' . (int) $product['id']) ?>">Edit</a><form method="post" action="<?= site_url('products/delete/' . (int) $product['id']) ?>" onsubmit="return confirm('Delete this product?');"><button class="btn btn-danger" type="submit">Delete</button></form></div></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </div>
</main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>
