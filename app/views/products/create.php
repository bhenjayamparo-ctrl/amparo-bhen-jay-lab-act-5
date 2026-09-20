<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php include APP_DIR . 'views/partials/head.php'; ?>
<main><div class="shell">
    <nav class="crumbs" aria-label="Breadcrumb"><a href="<?= site_url('products') ?>">Products</a><svg aria-hidden="true"><use href="#i-chevron-right"/></svg><span aria-current="page">Add product</span></nav>
    <h1 class="heading">Add product</h1><p class="subheading">Add the details customers need and keep your stock accurate.</p>
    <div class="form-layout">
        <section class="panel form-card">
            <?php $ember = ['role' => 'form', 'class' => 'perch r hide-sm', 'style' => '--w:168px;--pr:34px', 'say' => 'What are we selling today?', 'sayclass' => 'l']; include APP_DIR . 'views/partials/ember.php'; ?>
            <div class="card-head"><h2 class="card-title">Product details</h2><p class="card-desc">Everything here shows up in your catalog.</p></div>
            <?php include APP_DIR . 'views/products/_form.php'; ?>
        </section>
        <?php include APP_DIR . 'views/products/_preview.php'; ?>
    </div>
</div></main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>