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
 * @copyright Copyright 2020 (https://techron.info)
 * @since Version 1
 * @link https://lavalust.com
 * @license https://opensource.org/licenses/MIT MIT License
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="color-scheme" content="light dark">
<title>Error Encountered</title>
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
.card{position:relative;width:min(100%,460px);padding:40px 34px 30px;text-align:center;border-radius:28px;background:var(--card);-webkit-backdrop-filter:blur(28px) saturate(170%);backdrop-filter:blur(28px) saturate(170%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 34px 60px -34px var(--shadow)}
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
</head>
<body>
<div class="ambient" aria-hidden="true"><i></i><i></i><i></i></div>
<main class="card" role="main">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="mark" width="64" height="64" aria-hidden="true">
  <defs>
    <linearGradient id="er-bg" x1="140" y1="0" x2="880" y2="1024" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#FFB443"/>
      <stop offset=".48" stop-color="#FF6B1F"/>
      <stop offset="1" stop-color="#F0254F"/>
    </linearGradient>
    <radialGradient id="er-low" cx="60%" cy="112%" r="70%">
      <stop offset="0" stop-color="#FF2D6F" stop-opacity=".55"/>
      <stop offset="1" stop-color="#FF2D6F" stop-opacity="0"/>
    </radialGradient>
    <radialGradient id="er-glow" cx="30%" cy="8%" r="75%">
      <stop offset="0" stop-color="#fff" stop-opacity=".55"/>
      <stop offset=".55" stop-color="#fff" stop-opacity="0"/>
    </radialGradient>
    <linearGradient id="er-rim" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0" stop-color="#fff" stop-opacity=".75"/>
      <stop offset=".35" stop-color="#fff" stop-opacity=".05"/>
      <stop offset="1" stop-color="#fff" stop-opacity=".22"/>
    </linearGradient>
    <linearGradient id="er-glyph" x1="0" y1="256" x2="0" y2="790" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#fff"/>
      <stop offset="1" stop-color="#FFE9DA"/>
    </linearGradient>
    <filter id="er-shadow" x="-20%" y="-20%" width="140%" height="150%">
      <feDropShadow dx="0" dy="14" stdDeviation="16" flood-color="#8A1030" flood-opacity=".38"/>
    </filter>
    <clipPath id="er-clip"><path d="M1024 512 L1023 705 L1021 766 L1017 810 L1011 845 L1004 875 L995 900 L985 922 L972 941 L958 958 L941 972 L922 985 L900 995 L875 1004 L845 1011 L810 1017 L766 1021 L705 1023 L512 1024 L319 1023 L258 1021 L214 1017 L179 1011 L149 1004 L124 995 L102 985 L83 972 L66 958 L52 941 L39 922 L29 900 L20 875 L13 845 L7 810 L3 766 L1 705 L0 512 L1 319 L3 258 L7 214 L13 179 L20 149 L29 124 L39 102 L52 83 L66 66 L83 52 L102 39 L124 29 L149 20 L179 13 L214 7 L258 3 L319 1 L512 0 L705 1 L766 3 L810 7 L845 13 L875 20 L900 29 L922 39 L941 52 L958 66 L972 83 L985 102 L995 124 L1004 149 L1011 179 L1017 214 L1021 258 L1023 319Z"/></clipPath>
  </defs>
  <path d="M1024 512 L1023 705 L1021 766 L1017 810 L1011 845 L1004 875 L995 900 L985 922 L972 941 L958 958 L941 972 L922 985 L900 995 L875 1004 L845 1011 L810 1017 L766 1021 L705 1023 L512 1024 L319 1023 L258 1021 L214 1017 L179 1011 L149 1004 L124 995 L102 985 L83 972 L66 958 L52 941 L39 922 L29 900 L20 875 L13 845 L7 810 L3 766 L1 705 L0 512 L1 319 L3 258 L7 214 L13 179 L20 149 L29 124 L39 102 L52 83 L66 66 L83 52 L102 39 L124 29 L149 20 L179 13 L214 7 L258 3 L319 1 L512 0 L705 1 L766 3 L810 7 L845 13 L875 20 L900 29 L922 39 L941 52 L958 66 L972 83 L985 102 L995 124 L1004 149 L1011 179 L1017 214 L1021 258 L1023 319Z" fill="url(#er-bg)"/>
  <g clip-path="url(#er-clip)">
    <rect width="1024" height="1024" fill="url(#er-glow)"/>
    <rect width="1024" height="1024" fill="url(#er-low)"/>
  </g>
  <path d="M1024 512 L1023 705 L1021 766 L1017 810 L1011 845 L1004 875 L995 900 L985 922 L972 941 L958 958 L941 972 L922 985 L900 995 L875 1004 L845 1011 L810 1017 L766 1021 L705 1023 L512 1024 L319 1023 L258 1021 L214 1017 L179 1011 L149 1004 L124 995 L102 985 L83 972 L66 958 L52 941 L39 922 L29 900 L20 875 L13 845 L7 810 L3 766 L1 705 L0 512 L1 319 L3 258 L7 214 L13 179 L20 149 L29 124 L39 102 L52 83 L66 66 L83 52 L102 39 L124 29 L149 20 L179 13 L214 7 L258 3 L319 1 L512 0 L705 1 L766 3 L810 7 L845 13 L875 20 L900 29 L922 39 L941 52 L958 66 L972 83 L985 102 L995 124 L1004 149 L1011 179 L1017 214 L1021 258 L1023 319Z" fill="none" stroke="url(#er-rim)" stroke-width="6"/>
  <g fill="none" stroke="url(#er-glyph)" stroke-width="92" stroke-linecap="round" stroke-linejoin="round" filter="url(#er-shadow)" transform="translate(18 -11)">
    <path d="M392 256 V622 C392 730 336 790 236 790" /><path d="M392 256 H560 C650 256 706 306 706 384 C706 462 650 512 560 512 H392" /><path d="M392 512 H588 C688 512 752 566 752 650 C752 734 688 790 588 790 H392" />
  </g>
</svg>
  <div class="badge">Something went wrong</div>
  <?php /** @var string $heading @var string $message */ ?>
  <h1><?php echo $heading; ?></h1>
  <div class="message"><?php echo $message; ?></div>
  <div class="actions">
    <a class="btn btn-primary" href="/">Home</a>
    <a class="btn btn-secondary" href="javascript:history.back()">&larr; Go Back</a>
  </div>
</main>
</body>
</html>