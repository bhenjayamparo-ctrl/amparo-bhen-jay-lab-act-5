<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php include APP_DIR . 'views/partials/head.php'; ?>
<main><div class="shell">
    <nav class="crumbs" aria-label="Breadcrumb"><a href="<?= site_url('products') ?>">Products</a><svg aria-hidden="true"><use href="#i-chevron-right"/></svg><span aria-current="page">Edit product</span></nav>
    <h1 class="heading">Edit product</h1><p class="subheading">Update the details below, then save your changes.</p>
    <div class="form-layout">
        <section class="panel form-card">
            <div class="card-head"><h2 class="card-title">Product details</h2><p class="card-desc">Changes appear in your catalog as soon as you save.</p></div>
            <?php include APP_DIR . 'views/products/_form.php'; ?>
        </section>
        <?php include APP_DIR . 'views/products/_preview.php'; ?>
    </div>
</div></main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>