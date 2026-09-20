<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php $__n = defined('CSP_NONCE') ? ' nonce="' . CSP_NONCE . '"' : ''; ?>
<style<?= $__n ?>>
/* Login-only extras around Ember: rising embers, card entrance, brand line, button shine */
.auth-page{position:relative}
.auth-card{margin-top:150px;z-index:1;animation:card-in .8s cubic-bezier(.2,.9,.3,1.08) both}
@keyframes card-in{from{opacity:0;transform:translateY(26px) scale(.97)}}
.auth-embers{position:fixed;inset:0;overflow:hidden;pointer-events:none;z-index:0}
.auth-embers i{position:absolute;left:var(--x);bottom:-14px;width:var(--s);height:var(--s);border-radius:50%;background:radial-gradient(circle,#ffe27a 0,#ff8a2b 55%,rgba(255,80,40,0) 72%);opacity:0;animation:ember-up var(--d) linear var(--dl) infinite}
@keyframes ember-up{0%{transform:translate3d(0,0,0) scale(.6);opacity:0}8%{opacity:.85}70%{opacity:.55}100%{transform:translate3d(var(--dx),-108vh,0) scale(1.15);opacity:0}}
.auth-brand{display:flex;align-items:center;justify-content:center;gap:8px;margin:0 0 14px;color:var(--muted-foreground);font-size:.85rem;font-weight:500}
.auth-brand svg{width:22px;height:22px;filter:drop-shadow(0 3px 6px rgba(240,60,40,.3))}
.auth-brand b{color:var(--foreground);font-weight:650;letter-spacing:-.01em}
.theme-fab{position:fixed;top:16px;right:16px;z-index:60;width:44px;height:44px;padding:0;border-radius:15px;color:var(--foreground);background:var(--popover);-webkit-backdrop-filter:blur(24px) saturate(180%);backdrop-filter:blur(24px) saturate(180%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 14px 28px -12px var(--shadow)}
.theme-fab:hover{background:var(--card-solid)}
.theme-fab svg{transition:transform .5s var(--spring)}
.theme-fab:hover svg{transform:rotate(25deg) scale(1.1)}
.auth-form .btn-primary{overflow:hidden}
.auth-form .btn-primary::after{content:"";position:absolute;top:0;bottom:0;left:-60%;width:40%;background:linear-gradient(105deg,transparent,rgba(255,255,255,.4),transparent);transform:skewX(-18deg);transition:none}
.auth-form .btn-primary:hover::after{left:130%;transition:left .7s ease}
@media(prefers-reduced-motion:reduce){.auth-embers i,.auth-card{animation:none!important}}
</style>
<?php $ember = ['role' => 'login', 'class' => 'perch c', 'style' => '--w:min(250px,66vw)', 'say' => 'Hi there! Ready to sign in?']; include __DIR__ . '/../partials/ember.php'; ?>