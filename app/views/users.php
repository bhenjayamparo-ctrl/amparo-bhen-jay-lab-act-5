<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php $page_title = 'Users'; include APP_DIR . 'views/partials/head.php'; ?>
<main>
    <div class="shell">
        <div class="page-head">
            <div><h1 class="heading">Users</h1><p class="subheading">Everyone with access to this workspace.</p></div>
        </div>
        <section class="panel table-wrap">
            <div class="table-scroll">
            <table class="table">
                <thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Username</th></tr></thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td class="price"><?= $user['id'] ?></td>
                    <td><?= $user['firstname'] ?></td>
                    <td><?= $user['lastname'] ?></td>
                    <td class="description"><?= $user['email'] ?></td>
                    <td><?= $user['username'] ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </section>
    </div>
</main>
<?php include APP_DIR . 'views/partials/foot.php'; ?>