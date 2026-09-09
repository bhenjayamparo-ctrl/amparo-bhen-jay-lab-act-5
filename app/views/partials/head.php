<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
$page_title = $page_title ?? 'LavaLust';
$username = $username ?? null;
$flash = $flash ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?> · Bhen Jay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root{--ink:#f8fafc;--muted:#94a3b8;--bg:#0b1120;--panel:#111a2e;--panel-2:#16223a;--line:#263653;--brand:#f97316;--brand-dark:#ea580c;--danger:#ef4444;--success:#22c55e;--shadow:0 20px 55px rgba(0,0,0,.28)}
        *{box-sizing:border-box}body{margin:0;min-height:100vh;background:radial-gradient(circle at 10% 0%,rgba(249,115,22,.14),transparent 32rem),var(--bg);color:var(--ink);font-family:'DM Sans',sans-serif}a{color:inherit;text-decoration:none}button,input,textarea{font:inherit}
        .shell{max-width:1180px;margin:0 auto;padding:0 24px}.topbar{border-bottom:1px solid var(--line);background:rgba(11,17,32,.82);backdrop-filter:blur(16px);position:sticky;top:0;z-index:5}.topbar-inner{height:76px;display:flex;align-items:center;justify-content:space-between;gap:24px}.brand{display:flex;align-items:center;gap:11px;font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:1.15rem}.brand-mark{display:grid;place-items:center;width:34px;height:34px;border-radius:10px;background:var(--brand);box-shadow:0 8px 24px rgba(249,115,22,.3)}.nav{display:flex;align-items:center;gap:20px}.nav-link{color:var(--muted);font-size:.92rem}.nav-link:hover{color:var(--ink)}.user-chip{display:flex;align-items:center;gap:10px;color:var(--muted);font-size:.88rem}.avatar{display:grid;place-items:center;width:31px;height:31px;border-radius:50%;background:#243552;color:#fed7aa;font-weight:700}.logout{border:0;background:none;color:var(--muted);cursor:pointer;padding:0}.logout:hover{color:var(--danger)}
        main{padding:48px 0 72px}.eyebrow{color:#fb923c;text-transform:uppercase;letter-spacing:.14em;font-size:.72rem;font-weight:700}.heading{font-family:'Space Grotesk',sans-serif;font-size:clamp(2rem,4vw,3.3rem);line-height:1.05;margin:10px 0 12px}.subheading{color:var(--muted);max-width:620px;line-height:1.6;margin:0}.page-head{display:flex;align-items:flex-end;justify-content:space-between;gap:24px;margin-bottom:32px}.panel{background:linear-gradient(145deg,rgba(22,34,58,.95),rgba(17,26,46,.95));border:1px solid var(--line);border-radius:18px;box-shadow:var(--shadow)}.table-wrap{overflow:auto}.table{width:100%;border-collapse:collapse;min-width:700px}.table th{text-align:left;color:var(--muted);font-size:.73rem;text-transform:uppercase;letter-spacing:.08em;font-weight:600;padding:17px 20px;border-bottom:1px solid var(--line)}.table td{padding:19px 20px;border-bottom:1px solid rgba(38,54,83,.7);vertical-align:middle}.table tr:last-child td{border-bottom:0}.product-name{font-weight:700}.description{color:var(--muted);font-size:.88rem;margin-top:4px;max-width:340px}.price{font-family:'Space Grotesk',sans-serif;font-weight:700}.stock{display:inline-flex;align-items:center;padding:6px 10px;border-radius:99px;background:rgba(34,197,94,.12);color:#86efac;font-size:.78rem;font-weight:600}.stock.empty{background:rgba(239,68,68,.12);color:#fca5a5}.actions{display:flex;gap:8px;justify-content:flex-end}.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;border:1px solid transparent;border-radius:10px;cursor:pointer;font-weight:700;font-size:.88rem;padding:11px 16px;transition:transform .15s,background .15s,border-color .15s}.btn:hover{transform:translateY(-1px)}.btn-primary{background:var(--brand);color:#fff}.btn-primary:hover{background:var(--brand-dark)}.btn-secondary{background:transparent;border-color:var(--line);color:var(--ink)}.btn-secondary:hover{background:var(--panel-2)}.btn-danger{background:transparent;border-color:rgba(239,68,68,.45);color:#fca5a5}.btn-danger:hover{background:rgba(239,68,68,.12)}.empty{padding:70px 24px;text-align:center;color:var(--muted)}.empty strong{display:block;color:var(--ink);font-family:'Space Grotesk',sans-serif;font-size:1.25rem;margin-bottom:8px}.alert{padding:13px 16px;border-radius:10px;margin-bottom:22px;font-size:.9rem}.alert-success{background:rgba(34,197,94,.12);border:1px solid rgba(34,197,94,.3);color:#bbf7d0}.alert-error{background:rgba(239,68,68,.12);border:1px solid rgba(239,68,68,.35);color:#fecaca}
        .form-card{max-width:720px;padding:32px}.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:22px}.field{display:flex;flex-direction:column;gap:8px}.field-wide{grid-column:1/-1}.label{font-size:.86rem;font-weight:700}.hint{color:var(--muted);font-size:.78rem}.input,.textarea{width:100%;border:1px solid var(--line);background:#0d172a;color:var(--ink);border-radius:10px;padding:12px 14px;outline:none}.input:focus,.textarea:focus{border-color:var(--brand);box-shadow:0 0 0 3px rgba(249,115,22,.12)}.textarea{min-height:130px;resize:vertical}.error-text{color:#fca5a5;font-size:.78rem}.form-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:28px}
        .auth-page{min-height:100vh;display:grid;place-items:center;padding:24px}.auth-card{width:min(100%,430px);padding:36px}.auth-brand{margin-bottom:34px}.auth-title{font-family:'Space Grotesk',sans-serif;font-size:2rem;margin:0 0 8px}.auth-copy{color:var(--muted);line-height:1.55;margin:0 0 28px}.auth-form{display:grid;gap:18px}.auth-form .btn{width:100%;margin-top:4px}.demo-note{border-top:1px solid var(--line);margin-top:28px;padding-top:20px;color:var(--muted);font-size:.8rem;line-height:1.5}
        @media(max-width:700px){.shell{padding:0 16px}.topbar-inner{height:auto;padding:16px 0;align-items:flex-start}.nav{gap:12px;flex-wrap:wrap;justify-content:flex-end}.user-chip{display:none}.page-head{align-items:flex-start;flex-direction:column}.form-grid{grid-template-columns:1fr}.field-wide{grid-column:auto}.form-card{padding:22px}.actions{justify-content:flex-start}}
    </style>
</head>
<body>
<?php if ($username !== null): ?>
<header class="topbar">
    <div class="shell topbar-inner">
        <a class="brand" href="<?= site_url('products') ?>"><span class="brand-mark">✦</span>Bhen Jay</a>
        <nav class="nav">
            <a class="nav-link" href="<?= site_url('products') ?>">Products</a>
            <a class="nav-link" href="<?= site_url('products/create') ?>">Add product</a>
            <span class="user-chip"><span class="avatar"><?= htmlspecialchars(strtoupper(substr((string) $username, 0, 1)), ENT_QUOTES, 'UTF-8') ?></span><?= htmlspecialchars((string) $username, ENT_QUOTES, 'UTF-8') ?></span>
            <form method="post" action="<?= site_url('logout') ?>"><button class="logout" type="submit">Sign out</button></form>
        </nav>
    </div>
</header>
<?php endif; ?>
