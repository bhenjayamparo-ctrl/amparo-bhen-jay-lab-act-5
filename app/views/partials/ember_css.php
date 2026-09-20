<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php $__n = defined('CSP_NONCE') ? ' nonce="' . CSP_NONCE . '"' : ''; ?>
<style<?= $__n ?>>
/* ============================================================
   Ember — the fire chameleon (shared by every page)
   ============================================================ */
.cham-stage{--w:200px;--sink:.1;position:relative;width:var(--w);z-index:6;transform-origin:50% 100%;animation:cham-pop 1s .3s cubic-bezier(.34,1.56,.64,1) both;cursor:pointer;-webkit-tap-highlight-color:transparent;user-select:none}
.cham-stage.flow{margin:0 auto 10px}
.cham-stage.perch{position:absolute;bottom:calc(100% - var(--w) * var(--sink))}
.cham-stage.perch.c{left:50%;margin-left:calc(var(--w) / -2)}
.cham-stage.perch.r{right:var(--pr,28px)}
.perch-host{position:relative}
.cta-host{position:relative;display:inline-block}
@keyframes cham-pop{from{opacity:0;transform:translateY(54px) scale(.7)}}
.cham-stage::before{content:"";position:absolute;left:50%;top:38%;width:130%;aspect-ratio:1;transform:translate(-50%,-50%);border-radius:50%;background:radial-gradient(closest-side,rgba(255,150,60,.30),transparent);z-index:-1;pointer-events:none}
.cham-tilt{transform:rotate(var(--tilt,0deg));transform-origin:50% 92%;transition:transform .5s cubic-bezier(.2,.9,.3,1.2)}
.cham{display:block;width:100%;height:auto;overflow:visible;animation:ch-chroma 9s ease-in-out infinite}
@keyframes ch-chroma{0%,100%{filter:hue-rotate(0deg) saturate(1)}30%{filter:hue-rotate(-20deg) saturate(1.08)}65%{filter:hue-rotate(11deg) saturate(1.05)}}
@keyframes ch-rainbow{from{filter:hue-rotate(0deg) saturate(1.2)}to{filter:hue-rotate(360deg) saturate(1.2)}}

/* idle life: breathing, tail sway, flame flicker, blinking, hovering fly */
.ch-bob{transform-box:fill-box;transform-origin:50% 100%;animation:ch-breathe 3.6s ease-in-out infinite}
@keyframes ch-breathe{50%{transform:scale(1.012,1.028)}}
.ch-tail{transform-box:view-box;transform-origin:216px 186px;animation:ch-sway 4.2s ease-in-out infinite}
@keyframes ch-sway{0%,100%{transform:rotate(-2.5deg)}50%{transform:rotate(3deg)}}
.ch-flame{transform-box:fill-box;transform-origin:50% 100%;animation:ch-flick .8s ease-in-out infinite alternate}
.ch-flame.b{animation-duration:1.1s;animation-delay:-.4s}
@keyframes ch-flick{from{transform:scale(calc(var(--fs,1) * .96),calc(var(--fs,1) * 1)) rotate(-2.5deg)}to{transform:scale(calc(var(--fs,1) * .9),calc(var(--fs,1) * 1.14)) rotate(3deg)}}
.ch-glow{animation:ch-glow 1.6s ease-in-out infinite alternate}
@keyframes ch-glow{from{opacity:.55}to{opacity:1}}
.lid{transform-box:fill-box;transform-origin:50% 0;transform:scaleY(0)}
.lid-blink{animation:ch-blink 5.3s infinite}
.ch-eye.r .lid-blink{animation-duration:6.4s;animation-delay:-1.7s}
@keyframes ch-blink{0%,92%,100%{transform:scaleY(0)}95.5%{transform:scaleY(1)}}
.lid-state{transition:transform .3s cubic-bezier(.3,1.4,.5,1)}
.ch-pupil{transition:transform .14s ease-out}
.ch-fly{animation:ch-fly 2.6s ease-in-out infinite;transition:opacity .2s}
@keyframes ch-fly{0%,100%{transform:translate(0,0)}25%{transform:translate(3px,-6px)}50%{transform:translate(-2px,-2px)}75%{transform:translate(2px,4px)}}
.ch-wing{transform-box:fill-box;transform-origin:50% 100%;animation:ch-wing .16s linear infinite alternate}
@keyframes ch-wing{to{transform:scaleY(.35)}}
.ch-ember{opacity:0;animation:ch-rise 2.6s ease-in infinite}
@keyframes ch-rise{0%{opacity:0;transform:translate(0,0) scale(.7)}15%{opacity:.95}100%{opacity:0;transform:translate(var(--ex,4px),-40px) scale(.3)}}

/* face states */
.ch-cheek{opacity:.5;transition:opacity .3s}
.m-grin,.m-frown{opacity:0}
.m-smile,.m-grin,.m-frown{transition:opacity .16s}
.ch-sweat{opacity:0}
.ch-lash{fill:none;stroke:#8F2A12;stroke-width:3;stroke-linecap:round;opacity:0;transition:opacity .25s .12s}
.is-hiding .ch-lash{opacity:.85}
.ch-tongue{opacity:0}
.ch-tongue .line{stroke-dasharray:96;stroke-dashoffset:96}

/* input-driven states (classes are toggled by the script below) */
.is-hiding .lid-state{transform:scaleY(1)}
.is-peek .lid-state{transform:scaleY(.42)}
.is-user .ch-cheek,.is-excited .ch-cheek,.is-joy .ch-cheek{opacity:.9}
.is-excited .m-smile,.is-joy .m-smile{opacity:0}
.is-excited .m-grin,.is-joy .m-grin{opacity:1}
.is-excited{--fs:1.28}
.is-excited .ch-bob{animation:ch-bounce .55s ease-in-out infinite}
@keyframes ch-bounce{50%{transform:translateY(-5px) scale(1.01,.99)}}
.is-joy .ch-bob{animation:ch-hop .6s cubic-bezier(.3,1.5,.5,1)}
@keyframes ch-hop{0%{transform:scale(1.06,.9)}45%{transform:translateY(-16px) scale(.96,1.06)}100%{transform:none}}
.is-rainbow .cham{animation:ch-rainbow 1s linear}
.is-flick .ch-tongue{animation:tg-vis .75s ease-out}
.is-flick .ch-tongue .line{animation:tg-line .75s ease-out}
.is-flick .ch-tongue .tip{animation:tg-tip .75s ease-out}
@keyframes tg-vis{0%{opacity:0}6%,88%{opacity:1}100%{opacity:0}}
@keyframes tg-line{0%{stroke-dashoffset:96}32%,62%{stroke-dashoffset:0}100%{stroke-dashoffset:96}}
@keyframes tg-tip{0%{transform:translate(0,0)}32%,62%{transform:translate(-92px,-4px)}100%{transform:translate(0,0)}}
.is-flick .ch-fly{opacity:0}
.is-error .cham{animation:none;filter:hue-rotate(158deg) saturate(.6) brightness(1.06);transition:filter .5s}
.is-error .m-smile,.is-error .m-grin{opacity:0}
.is-error .m-frown{opacity:1}
.is-error .ch-bob{animation:ch-shake .5s ease-in-out 3}
@keyframes ch-shake{0%,100%{transform:translateX(0) rotate(0)}25%{transform:translateX(-5px) rotate(-2deg)}75%{transform:translateX(5px) rotate(2deg)}}
.is-error .ch-sweat{animation:ch-sweat 1.4s ease-in 2}
@keyframes ch-sweat{0%{opacity:0;transform:translateY(-4px)}20%{opacity:1}100%{opacity:0;transform:translateY(16px)}}

/* speech bubble */
.cham-say{position:absolute;left:74%;top:1%;z-index:2;white-space:nowrap;padding:7px 13px;border-radius:14px;font-size:.8rem;font-weight:600;letter-spacing:-.005em;color:var(--foreground);background:var(--popover);-webkit-backdrop-filter:blur(18px) saturate(170%);backdrop-filter:blur(18px) saturate(170%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 14px 26px -12px var(--shadow);pointer-events:none;transform-origin:0 100%}
.cham-say::before{content:"";position:absolute;left:-4px;bottom:9px;width:10px;height:10px;background:inherit;transform:rotate(45deg);border-radius:2px;box-shadow:-1px 1px 0 var(--border)}
.cham-say.bump{animation:say-pop .45s var(--spring)}
@keyframes say-pop{from{opacity:0;transform:scale(.7) translateY(6px)}}
@media(max-width:760px){.cham-say{display:none}}

/* extra moods used around the app */
.is-glad .ch-cheek,.is-curious .ch-cheek{opacity:.9}
.is-glad .m-smile,.is-worried .m-smile,.is-lost .m-smile{opacity:0}
.is-glad .m-grin{opacity:1}
.is-worried .m-frown,.is-lost .m-frown{opacity:1}
.is-worried .ch-sweat,.is-lost .ch-sweat{animation:ch-sweat 1.7s ease-in infinite}
.is-lost .cham{animation:none;filter:hue-rotate(158deg) saturate(.6) brightness(1.06)}
.cham-say.l{left:auto;right:74%;transform-origin:100% 100%}
.cham-say.l::before{left:auto;right:-4px;box-shadow:1px -1px 0 var(--border)}
@media(max-width:720px){.cham-stage.hide-sm{display:none}}
@media(prefers-reduced-motion:reduce){
  .cham,.ch-bob,.ch-tail,.ch-flame,.ch-glow,.lid-blink,.ch-fly,.ch-wing,.ch-ember,.cham-stage{animation:none!important}
  .ch-ember{display:none}
}
</style>