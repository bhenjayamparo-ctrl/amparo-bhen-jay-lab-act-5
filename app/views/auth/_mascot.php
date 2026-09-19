<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php $__n = $__nonce ?? ''; ?>
<style<?= $__n ?>>
/* ============================================================
   Ember — the fire chameleon who guards the login card
   ============================================================ */
.auth-page{position:relative}
.auth-card{margin-top:150px;z-index:1;animation:card-in .8s cubic-bezier(.2,.9,.3,1.08) both}
@keyframes card-in{from{opacity:0;transform:translateY(26px) scale(.97)}}

/* rising embers across the page */
.auth-embers{position:fixed;inset:0;overflow:hidden;pointer-events:none;z-index:0}
.auth-embers i{position:absolute;left:var(--x);bottom:-14px;width:var(--s);height:var(--s);border-radius:50%;background:radial-gradient(circle,#ffe27a 0,#ff8a2b 55%,rgba(255,80,40,0) 72%);opacity:0;animation:ember-up var(--d) linear var(--dl) infinite}
@keyframes ember-up{0%{transform:translate3d(0,0,0) scale(.6);opacity:0}8%{opacity:.85}70%{opacity:.55}100%{transform:translate3d(var(--dx),-108vh,0) scale(1.15);opacity:0}}

/* stage: the chameleon perches on the card's top edge */
.cham-stage{--w:min(250px,66vw);position:absolute;left:50%;width:var(--w);margin-left:calc(var(--w) / -2);bottom:calc(100% - var(--w) * .1);z-index:6;transform-origin:50% 100%;animation:cham-pop 1s .3s cubic-bezier(.34,1.56,.64,1) both;cursor:pointer;-webkit-tap-highlight-color:transparent;user-select:none}
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

/* card content that replaces the old logo block */
.auth-brand{display:flex;align-items:center;justify-content:center;gap:8px;margin:0 0 14px;color:var(--muted-foreground);font-size:.85rem;font-weight:500}
.auth-brand svg{width:22px;height:22px;filter:drop-shadow(0 3px 6px rgba(240,60,40,.3))}
.auth-brand b{color:var(--foreground);font-weight:650;letter-spacing:-.01em}
.auth-form .btn-primary{overflow:hidden}
.auth-form .btn-primary::after{content:"";position:absolute;top:0;bottom:0;left:-60%;width:40%;background:linear-gradient(105deg,transparent,rgba(255,255,255,.4),transparent);transform:skewX(-18deg);transition:none}
.auth-form .btn-primary:hover::after{left:130%;transition:left .7s ease}

@media(prefers-reduced-motion:reduce){
  .cham,.ch-bob,.ch-tail,.ch-flame,.ch-glow,.lid-blink,.ch-fly,.ch-wing,.ch-ember,.auth-embers i,.cham-stage,.auth-card{animation:none!important}
  .ch-ember{display:none}
}
</style>

<div class="cham-stage" data-cham aria-hidden="true">
  <div class="cham-say"><span>Hi there! Ready to sign in?</span></div>
  <div class="cham-tilt">
  <svg class="cham" viewBox="0 0 300 230" focusable="false">
    <defs>
      <linearGradient id="ch-skin" x1="70" y1="60" x2="240" y2="205" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#FFB443"/><stop offset=".5" stop-color="#FF6B1F"/><stop offset="1" stop-color="#F0254F"/>
      </linearGradient>
      <radialGradient id="ch-ring" cx=".35" cy=".3" r=".9">
        <stop offset="0" stop-color="#FFA544"/><stop offset="1" stop-color="#F0552A"/>
      </radialGradient>
      <linearGradient id="ch-belly" x1="0" y1="0" x2="0" y2="1">
        <stop offset="0" stop-color="#FFEBCE"/><stop offset="1" stop-color="#FFC58C"/>
      </linearGradient>
      <linearGradient id="ch-flame" x1="0" y1="1" x2="0" y2="0">
        <stop offset="0" stop-color="#FF4B2B"/><stop offset=".55" stop-color="#FF9A1F"/><stop offset="1" stop-color="#FFE45C"/>
      </linearGradient>
      <radialGradient id="ch-glow">
        <stop offset="0" stop-color="#FFB443" stop-opacity=".75"/><stop offset="1" stop-color="#FFB443" stop-opacity="0"/>
      </radialGradient>
      <radialGradient id="ch-iris" cx=".5" cy=".4" r=".7">
        <stop offset="0" stop-color="#FFE27A"/><stop offset="1" stop-color="#FF9E2A"/>
      </radialGradient>
      <clipPath id="ch-clip"><circle r="21"/></clipPath>
    </defs>

    <!-- tail with a flame at the tip -->
    <g class="ch-tail">
      <path d="M216 186 C246 198 272 178 265 152 C260 132 235 131 233 148 C232 160 247 163 250 152" fill="none" stroke="url(#ch-skin)" stroke-width="16" stroke-linecap="round"/>
      <path d="M216 186 C246 198 272 178 265 152 C260 132 235 131 233 148 C232 160 247 163 250 152" fill="none" stroke="#fff" stroke-opacity=".16" stroke-width="4" stroke-linecap="round" transform="translate(0 -3)"/>
      <g transform="translate(250 146)">
        <circle class="ch-glow" cy="-15" r="28" fill="url(#ch-glow)"/>
        <path class="ch-flame" d="M0 0 C-10 -9 -9 -22 0 -36 C9 -22 10 -9 0 0Z" fill="url(#ch-flame)"/>
        <path class="ch-flame b" d="M0 -3 C-4.5 -8 -3.5 -15 0 -22 C3.5 -15 4.5 -8 0 -3Z" fill="#FFF3A8" opacity=".92"/>
        <circle class="ch-ember" cx="-3" cy="-30" r="2" fill="#FFD25C" style="--ex:-8px"/>
        <circle class="ch-ember" cx="4" cy="-32" r="1.6" fill="#FFB443" style="--ex:9px;animation-delay:-1.1s"/>
        <circle class="ch-ember" cx="0" cy="-34" r="1.8" fill="#FFE27A" style="--ex:2px;animation-delay:-1.9s"/>
      </g>
    </g>

    <!-- feet (toes grip the card edge) -->
    <g class="ch-feet">
      <g transform="translate(106 203)"><ellipse rx="21" ry="9" fill="#E8452A"/><circle cx="-13" cy="6" r="6" fill="#FF6B1F"/><circle cy="8" r="6" fill="#FF6B1F"/><circle cx="13" cy="6" r="6" fill="#FF6B1F"/></g>
      <g transform="translate(194 203)"><ellipse rx="21" ry="9" fill="#E8452A"/><circle cx="-13" cy="6" r="6" fill="#FF6B1F"/><circle cy="8" r="6" fill="#FF6B1F"/><circle cx="13" cy="6" r="6" fill="#FF6B1F"/></g>
    </g>

    <g class="ch-bob">
      <!-- body -->
      <path d="M72 150 C72 100 104 80 150 80 C196 80 228 100 228 150 C228 182 210 200 150 200 C90 200 72 182 72 150 Z" fill="url(#ch-skin)"/>
      <ellipse cx="150" cy="178" rx="41" ry="24" fill="url(#ch-belly)"/>
      <path d="M124 170 Q150 178 176 170 M128 181 Q150 188 172 181" fill="none" stroke="#E9A56A" stroke-opacity=".55" stroke-width="2.6" stroke-linecap="round"/>
      <path d="M85 128 Q94 150 89 174 M215 128 Q206 150 211 174" fill="none" stroke="#C8261C" stroke-opacity=".22" stroke-width="6" stroke-linecap="round"/>
      <g fill="#fff" opacity=".13"><circle cx="100" cy="118" r="3.2"/><circle cx="112" cy="132" r="2.4"/><circle cx="196" cy="120" r="3"/><circle cx="188" cy="136" r="2.3"/><circle cx="86" cy="150" r="2.4"/><circle cx="214" cy="152" r="2.6"/></g>
      <ellipse cx="118" cy="106" rx="30" ry="13" transform="rotate(-24 118 106)" fill="#fff" opacity=".2"/>

      <!-- flame crest -->
      <g>
        <path class="ch-flame" d="M150 86 C137 70 141 55 150 36 C159 55 163 70 150 86Z" fill="url(#ch-flame)"/>
        <path class="ch-flame b" d="M139 88 C129 78 131 66 137 56 C141 67 148 74 147 88Z" fill="url(#ch-flame)" opacity=".95"/>
        <path class="ch-flame b" d="M161 88 C171 78 169 66 163 56 C159 67 152 74 153 88Z" fill="url(#ch-flame)" opacity=".95"/>
        <path class="ch-flame" d="M150 84 C145 76 146 68 150 58 C154 68 155 76 150 84Z" fill="#FFF3A8" opacity=".9"/>
        <circle class="ch-ember" cx="146" cy="36" r="1.8" fill="#FFD25C" style="--ex:-7px;animation-delay:-.6s"/>
        <circle class="ch-ember" cx="155" cy="34" r="1.5" fill="#FFB443" style="--ex:8px;animation-delay:-1.6s"/>
      </g>

      <!-- face -->
      <g class="ch-cheek" fill="#FF6F91"><circle cx="97" cy="147" r="11"/><circle cx="203" cy="147" r="11"/></g>
      <g fill="#7A2410"><circle cx="143" cy="130" r="2.2"/><circle cx="157" cy="130" r="2.2"/></g>
      <path class="m-smile" d="M129 147 Q150 163 171 147" fill="none" stroke="#7A2410" stroke-width="4.5" stroke-linecap="round"/>
      <g class="m-grin"><path d="M126 143 Q150 151 174 143 Q170 172 150 172 Q130 172 126 143Z" fill="#7A2410"/><path d="M138 168 Q150 158 162 168 Q158 174 150 174 Q142 174 138 168Z" fill="#FF7A96"/></g>
      <path class="m-frown" d="M133 159 Q150 146 167 159" fill="none" stroke="#7A2410" stroke-width="4.5" stroke-linecap="round"/>
      <path class="ch-sweat" d="M234 64 Q226 76 234 82 Q242 76 234 64Z" fill="#7CC7FF"/>

      <!-- tongue (flicks left to catch the fly) -->
      <g class="ch-tongue">
        <path class="line" d="M141 154 Q95 157 48 150" fill="none" stroke="#FF6F91" stroke-width="8" stroke-linecap="round"/>
        <circle class="tip" cx="141" cy="154" r="7" fill="#FF5C85"/>
      </g>

      <!-- eyes: independent turrets, like a real chameleon -->
      <g class="ch-eye l" transform="translate(104 86)">
        <circle r="29" fill="url(#ch-ring)"/>
        <circle r="29" fill="none" stroke="#fff" stroke-opacity=".3" stroke-width="1.6"/>
        <circle class="ch-sclera" r="21" fill="#fff"/>
        <g clip-path="url(#ch-clip)">
          <g class="ch-pupil"><circle r="13" fill="url(#ch-iris)"/><circle r="7.6" fill="#2B0F06"/><circle cx="-3.4" cy="-3.6" r="3.2" fill="#fff"/><circle cx="3.6" cy="3.4" r="1.6" fill="#fff" opacity=".85"/></g>
          <g class="lid lid-blink"><rect x="-22" y="-22" width="44" height="44" fill="url(#ch-ring)"/><rect x="-22" y="19" width="44" height="3" fill="#C8321A" opacity=".5"/></g>
          <g class="lid lid-state"><rect x="-22" y="-22" width="44" height="44" fill="url(#ch-ring)"/><rect x="-22" y="19" width="44" height="3" fill="#C8321A" opacity=".5"/></g>
        </g>
        <path class="ch-lash" d="M-13 5 Q0 14 13 5"/>
      </g>
      <g class="ch-eye r" transform="translate(196 86)">
        <circle r="29" fill="url(#ch-ring)"/>
        <circle r="29" fill="none" stroke="#fff" stroke-opacity=".3" stroke-width="1.6"/>
        <circle class="ch-sclera" r="21" fill="#fff"/>
        <g clip-path="url(#ch-clip)">
          <g class="ch-pupil"><circle r="13" fill="url(#ch-iris)"/><circle r="7.6" fill="#2B0F06"/><circle cx="-3.4" cy="-3.6" r="3.2" fill="#fff"/><circle cx="3.6" cy="3.4" r="1.6" fill="#fff" opacity=".85"/></g>
          <g class="lid lid-blink"><rect x="-22" y="-22" width="44" height="44" fill="url(#ch-ring)"/><rect x="-22" y="19" width="44" height="3" fill="#C8321A" opacity=".5"/></g>
          <g class="lid lid-state"><rect x="-22" y="-22" width="44" height="44" fill="url(#ch-ring)"/><rect x="-22" y="19" width="44" height="3" fill="#C8321A" opacity=".5"/></g>
        </g>
        <path class="ch-lash" d="M-13 5 Q0 14 13 5"/>
      </g>
    </g>

    <!-- a tasty firefly -->
    <g transform="translate(36 146)">
      <g class="ch-fly">
        <circle r="10" fill="url(#ch-glow)"/>
        <ellipse class="ch-wing" cx="-3" cy="-4" rx="3.2" ry="5.5" fill="#fff" opacity=".7"/>
        <ellipse class="ch-wing" cx="3" cy="-4" rx="3.2" ry="5.5" fill="#fff" opacity=".7" style="animation-delay:-.08s"/>
        <circle r="3.4" fill="#FFD25C"/>
      </g>
    </g>
  </svg>
  </div>
</div>

<script<?= $__n ?>>
(function () {
    function ready(fn){ if (document.readyState !== 'loading') fn(); else document.addEventListener('DOMContentLoaded', fn); }
    ready(function () {
        var stage = document.querySelector('[data-cham]');
        var form = document.querySelector('.auth-form');
        if (!stage || !form) return;
        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var eyes = [].slice.call(stage.querySelectorAll('.ch-eye'));
        var tilt = stage.querySelector('.cham-tilt');
        var sayBox = stage.querySelector('.cham-say');
        var sayText = sayBox.querySelector('span');
        var user = form.querySelector('[name="username"]');
        var pass = form.querySelector('[name="password"]');
        var wrap = pass.parentNode;               // .input-wrap (password + reveal button)
        var submit = form.querySelector('[type="submit"]');
        var hasError = !!document.querySelector('.auth-card .alert-error');
        var R = 7.2, lastMove = Date.now(), lastKey = 0, focusTarget = null, sayKey = '', busy = false;

        var LINES = {
            idle:    'Hi there! Ready to sign in?',
            user:    'Ooh, who might you be?',
            hiding:  "I'm not looking. Promise!",
            peek:    'Hehe... just a tiny peek.',
            excited: "Let's gooo!",
            joy:     'Woohoo! Hold tight...',
            error:   "Hmm, that didn't match."
        };

        function say(key) {
            if (key === sayKey) return;
            sayKey = key; sayText.textContent = LINES[key];
            sayBox.classList.remove('bump'); void sayBox.offsetWidth; sayBox.classList.add('bump');
        }
        function refreshSay() {
            var c = stage.classList;
            say(c.contains('is-error') ? 'error' : c.contains('is-joy') ? 'joy' : c.contains('is-excited') ? 'excited'
              : c.contains('is-peek') ? 'peek' : c.contains('is-hiding') ? 'hiding' : c.contains('is-user') ? 'user' : 'idle');
        }
        function toggle(cls, on) { stage.classList.toggle(cls, on); refreshSay(); }

        // Pupils: each eye looks at the target on its own
        function aim(cx, cy) {
            eyes.forEach(function (eye) {
                var r = eye.querySelector('.ch-sclera').getBoundingClientRect();
                var dx = cx - (r.left + r.width / 2), dy = cy - (r.top + r.height / 2);
                var d = Math.hypot(dx, dy) || 1, k = Math.min(1, d / 150);
                eye.querySelector('.ch-pupil').style.transform = 'translate(' + (dx / d * R * k).toFixed(2) + 'px,' + (dy / d * R * k).toFixed(2) + 'px)';
            });
            var s = stage.getBoundingClientRect();
            var t = Math.max(-5, Math.min(5, (cx - (s.left + s.width / 2)) / window.innerWidth * 16));
            tilt.style.setProperty('--tilt', t.toFixed(2) + 'deg');
        }
        function aimAt(el, xr) {
            var r = el.getBoundingClientRect();
            aim(r.left + r.width * (xr === undefined ? .5 : xr), r.top + r.height / 2);
        }

        // Follow the caret while typing the username
        var canvas = document.createElement('canvas').getContext('2d');
        function aimCaret() {
            var r = user.getBoundingClientRect(), cs = getComputedStyle(user);
            canvas.font = cs.fontWeight + ' ' + cs.fontSize + ' ' + cs.fontFamily;
            var w = canvas.measureText(user.value.slice(0, user.selectionStart == null ? user.value.length : user.selectionStart)).width;
            aim(Math.min(r.right - 16, r.left + 16 + w), r.top + r.height / 2);
        }

        // The username field is autofocused before this script runs, so catch up
        if (document.activeElement === user) { focusTarget = 'user'; aimCaret(); }

        // Pointer: eyes follow the cursor unless the user is busy with a field
        function locked() { return focusTarget === 'btn' || focusTarget === 'pass' || (focusTarget === 'user' && Date.now() - lastKey < 2500); }
        document.addEventListener('pointermove', function (e) {
            lastMove = Date.now();
            if (locked()) return;
            aim(e.clientX, e.clientY);
        }, { passive: true });

        // Idle: chameleon eyes wander independently
        if (!reduce) {
            setInterval(function () {
                if (locked() || Date.now() - lastMove < 3000 || stage.classList.contains('is-hiding')) return;
                eyes.forEach(function (eye) {
                    var x = (Math.random() * 2 - 1) * R, y = (Math.random() * 2 - 1) * R * .7;
                    eye.querySelector('.ch-pupil').style.transform = 'translate(' + x.toFixed(2) + 'px,' + y.toFixed(2) + 'px)';
                });
                tilt.style.setProperty('--tilt', ((Math.random() * 2 - 1) * 2.5).toFixed(2) + 'deg');
            }, 1700);
        }

        // Work out what the eyes should follow based on which control currently has focus
        function retarget() {
            var a = document.activeElement;
            focusTarget = a === user ? 'user' : (wrap.contains(a) ? 'pass' : (a === submit ? 'btn' : null));
            if (focusTarget === 'user') aimCaret();
        }

        // Username field
        user.addEventListener('focus', function () { focusTarget = 'user'; aimCaret(); });
        user.addEventListener('blur', function () { toggle('is-user', false); setTimeout(retarget, 0); });
        user.addEventListener('input', function () { lastKey = Date.now(); toggle('is-user', true); aimCaret(); });
        user.addEventListener('keyup', function () { lastKey = Date.now(); if (focusTarget === 'user') aimCaret(); });
        user.addEventListener('click', function () { if (focusTarget === 'user') aimCaret(); });

        // Password field + reveal button: eyes close, or peek when revealed
        function syncPass() {
            var inside = wrap.contains(document.activeElement);
            var revealed = pass.type === 'text';
            stage.classList.toggle('is-hiding', inside && !revealed);
            stage.classList.toggle('is-peek', inside && revealed);
            if (inside) { focusTarget = 'pass'; aimAt(pass, .2); } else { retarget(); }
            refreshSay();
        }
        wrap.addEventListener('focusin', syncPass);
        wrap.addEventListener('focusout', function () { setTimeout(syncPass, 0); });
        wrap.addEventListener('click', function () { setTimeout(syncPass, 0); });

        // Sign-in button: excitement
        function excite(on) { if (on) { focusTarget = 'btn'; aimAt(submit); } else { setTimeout(retarget, 0); } toggle('is-excited', on); }
        submit.addEventListener('pointerenter', function () { excite(true); });
        submit.addEventListener('pointerleave', function () { excite(false); });
        submit.addEventListener('focus', function () { excite(true); });
        submit.addEventListener('blur', function () { excite(false); });

        // Tongue flick + rainbow colour change (click the chameleon, or submit the form)
        function flick() {
            if (busy) return; busy = true;
            stage.classList.remove('is-flick', 'is-joy', 'is-rainbow'); void stage.offsetWidth;
            stage.classList.add('is-flick', 'is-joy', 'is-rainbow'); refreshSay();
            setTimeout(function () { stage.classList.remove('is-flick'); }, 800);
            setTimeout(function () { stage.classList.remove('is-joy', 'is-rainbow'); refreshSay(); busy = false; }, 1100);
        }
        stage.addEventListener('click', flick);
        form.addEventListener('submit', flick);

        // Wrong credentials: turn camouflage-teal, shake, sweat
        if (hasError) {
            setTimeout(function () {
                stage.classList.add('is-error'); refreshSay();
                setTimeout(function () { stage.classList.remove('is-error'); refreshSay(); }, 3400);
            }, 1000);
        }
    });
})();
</script>