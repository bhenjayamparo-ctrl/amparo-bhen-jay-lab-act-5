<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php include APP_DIR . 'views/partials/head.php'; ?>
<main class="auth-page">
    <section class="panel auth-card">
        <div class="auth-logo">
            <svg class="mark" aria-hidden="true"><use href="#logo-mark"/></svg>
            <span class="name">Bhen Jay</span>
            <span class="tag">Product studio</span>
        </div>
        <h1 class="auth-title">Welcome back.</h1>
        <p class="auth-copy">Sign in to manage your catalog, inventory, and product details.</p>
        <?php if (!empty($error)): ?><div class="alert alert-error" role="alert" aria-live="assertive"><svg aria-hidden="true"><use href="#i-circle-alert"/></svg><span><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></span></div><?php endif; ?>
        <form class="auth-form" method="post" action="<?= site_url('login') ?>">
            <label class="field"><span class="label">Username</span><input class="input" type="text" name="username" autocomplete="username" required autofocus></label>
            <label class="field"><span class="label">Password</span><span class="input-wrap"><input class="input" type="password" name="password" autocomplete="current-password" required><button class="reveal" type="button" aria-label="Show password" aria-pressed="false"><svg class="i-eye" aria-hidden="true"><use href="#i-eye"/></svg><svg class="i-eye-off" aria-hidden="true"><use href="#i-eye-off"/></svg></button></span></label>
            <button class="btn btn-primary" type="submit">Sign in <svg aria-hidden="true"><use href="#i-arrow-right"/></svg></button>
        </form>
    </section>
</main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>