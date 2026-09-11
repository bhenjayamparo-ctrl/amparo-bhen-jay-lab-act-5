<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php include APP_DIR . 'views/partials/head.php'; ?>
<main class="auth-page">
    <section class="panel auth-card">
        <div class="brand auth-brand"><span class="brand-mark">✦</span>Bhen Jay</div>
        <p class="eyebrow">Product studio</p>
        <h1 class="auth-title">Welcome back.</h1>
        <p class="auth-copy">Sign in to manage your catalog, inventory, and product details.</p>
        <?php if (!empty($error)): ?><div class="alert alert-error" role="alert" aria-live="assertive"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div><?php endif; ?>
        <form class="auth-form" method="post" action="<?= site_url('login') ?>">
            <label class="field"><span class="label">Username</span><input class="input" type="text" name="username" autocomplete="username" required autofocus></label>
            <label class="field"><span class="label">Password</span><input class="input" type="password" name="password" autocomplete="current-password" required></label>
            <button class="btn btn-primary" type="submit">Sign in <svg aria-hidden="true"><use href="#icon-arrow"/></svg></button>
        </form>
    </section>
</main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>