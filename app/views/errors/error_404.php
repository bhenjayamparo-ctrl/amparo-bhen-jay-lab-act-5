<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 *
 * Copyright (c) 2020 Ronald M. Marasigan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @since Version 1
 * @link https://github.com/ronmarasigan/LavaLust
 * @license https://opensource.org/licenses/MIT MIT License
 */

/**
 * @var \Exception|\Throwable $exception
 * @var string $heading
 * @var string $message
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="color-scheme" content="light dark">
<title>404 · Page not found</title>
<style nonce="<?= defined('CSP_NONCE') ? CSP_NONCE : '' ?>">
*{box-sizing:border-box}
:root{color-scheme:light dark;--bg:light-dark(#f5f5f7,#050508);--fg:light-dark(#1d1d1f,#f5f5f7);--muted:light-dark(#66666c,#a4a4b0);--card:light-dark(rgba(255,255,255,.62),rgba(30,30,38,.52));--border:light-dark(rgba(20,20,50,.09),rgba(255,255,255,.10));--edge:light-dark(rgba(255,255,255,.95),rgba(255,255,255,.2));--shadow:light-dark(rgba(40,40,90,.18),rgba(0,0,0,.65));--hover:light-dark(rgba(20,20,50,.06),rgba(255,255,255,.08));--b1:light-dark(rgba(255,158,64,.5),rgba(255,106,31,.30));--b2:light-dark(rgba(255,96,150,.34),rgba(240,37,79,.24));--b3:light-dark(rgba(110,140,255,.38),rgba(80,90,255,.26))}
html,body{height:100%}
body{margin:0;display:grid;place-items:center;padding:24px;background:var(--bg);color:var(--fg);font-family:-apple-system,BlinkMacSystemFont,"SF Pro Display","SF Pro Text",Inter,"Segoe UI",system-ui,sans-serif;-webkit-font-smoothing:antialiased;line-height:1.5;overflow-x:hidden}
.ambient{position:fixed;inset:0;z-index:-1;overflow:hidden}
.ambient i{position:absolute;width:62vmax;height:62vmax;border-radius:50%}
.ambient i:nth-child(1){top:-24vmax;left:-14vmax;background:radial-gradient(closest-side,var(--b1),transparent)}
.ambient i:nth-child(2){top:8vmax;right:-22vmax;background:radial-gradient(closest-side,var(--b2),transparent)}
.ambient i:nth-child(3){bottom:-30vmax;left:14vmax;background:radial-gradient(closest-side,var(--b3),transparent)}
.card{position:relative;margin-top:120px;width:min(100%,460px);padding:40px 34px 30px;text-align:center;border-radius:28px;background:var(--card);-webkit-backdrop-filter:blur(28px) saturate(170%);backdrop-filter:blur(28px) saturate(170%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 34px 60px -34px var(--shadow)}
.mark{width:64px;height:64px;margin:0 auto 18px;display:block;filter:drop-shadow(0 12px 22px rgba(240,50,60,.35))}
.badge{display:inline-block;margin-bottom:12px;padding:4px 12px;border-radius:99px;font-size:.8rem;font-weight:600;color:light-dark(#b8480a,#ff9a5c);background:light-dark(rgba(238,106,18,.12),rgba(255,140,70,.14))}
h1{margin:0 0 8px;font-size:1.9rem;font-weight:700;letter-spacing:-.04em;line-height:1.1}
.message{margin:0 0 26px;color:var(--muted);font-size:1rem}
.actions{display:flex;gap:10px;justify-content:center;flex-wrap:wrap}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;height:42px;padding:0 20px;border-radius:12px;font-weight:600;font-size:.9rem;text-decoration:none;transition:transform .18s cubic-bezier(.34,1.56,.64,1),filter .2s}
.btn:active{transform:scale(.96)}
.btn-primary{color:#fff;background:linear-gradient(180deg,#f67a20,#d94a08);box-shadow:inset 0 1px 0 rgba(255,255,255,.38),0 0 0 1px rgba(170,50,0,.5),0 10px 22px -8px rgba(226,84,10,.65)}
.btn-primary:hover{filter:brightness(1.07)}
.btn-secondary{color:var(--fg);background:var(--hover);box-shadow:0 0 0 1px var(--border)}
.btn-secondary:hover{filter:brightness(.97)}
:focus-visible{outline:2px solid #ee6a12;outline-offset:2px}
.hint{margin-top:26px;padding-top:18px;border-top:1px solid var(--border);color:var(--muted);font-size:.8rem;display:flex;gap:6px;align-items:center;justify-content:center;flex-wrap:wrap}
.kbd{font-family:ui-monospace,SFMono-Regular,Menlo,monospace;font-size:.72rem;padding:2px 7px;border-radius:6px;color:var(--fg);background:var(--hover);box-shadow:0 0 0 1px var(--border)}
@media(max-width:480px){.card{padding:32px 22px 24px}.actions .btn{flex:1 1 100%}}
</style>
<?php include __DIR__ . '/../partials/ember_css.php'; ?>
</head>
<body>
<div class="ambient" aria-hidden="true"><i></i><i></i><i></i></div>
<main class="card" role="main">
  <?php $ember = ['role' => 'lost', 'class' => 'perch c', 'style' => '--w:190px', 'defs' => true]; include __DIR__ . '/../partials/ember.php'; ?>
  <div class="badge">404 · Not Found</div>
  <h1><?= html_escape($heading) ?></h1>
  <div class="message"><?= html_escape($message) ?></div>
  <div class="actions">
    <a class="btn btn-primary" href="/">Home</a>
    <a class="btn btn-secondary" href="javascript:history.back()">&larr; Go Back</a>
  </div>
  <div class="hint">
    <span>Tip:</span>
    <span class="kbd">Ctrl</span> + <span class="kbd">L</span>
    <span>to focus the address bar and retype the URL.</span>
  </div>
</main>
<?php include __DIR__ . '/../partials/ember_js.php'; ?>
</body>
</html>