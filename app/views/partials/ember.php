<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<?php
/**
 * One Ember chameleon.
 * Set $ember before including:
 *   role     login | cta | empty | form | modal | lost | plain
 *   class    'flow' (in the page flow)  or  'perch c' / 'perch r' (sits on top of its parent's edge)
 *   style    e.g. '--w:170px;--sink:.1;--pr:30px'
 *   say      greeting shown in the speech bubble ('' = no bubble)
 *   sayclass 'l' puts the bubble on the left
 *   defs     true on pages that have no shared sprite (error pages)
 */
$__e = array_merge(['role' => 'plain', 'class' => 'flow', 'style' => '', 'say' => '', 'sayclass' => '', 'defs' => false], isset($ember) ? $ember : []);
$__h = function ($v) { return htmlspecialchars((string) $v, ENT_QUOTES, 'UTF-8'); };
?>
<div class="cham-stage <?= $__h($__e['class']) ?>" data-cham data-role="<?= $__h($__e['role']) ?>" data-say="<?= $__h($__e['say']) ?>" style="<?= $__h($__e['style']) ?>" aria-hidden="true">
<?php if ($__e['say'] !== ''): ?>  <div class="cham-say <?= $__h($__e['sayclass']) ?>"><span><?= $__h($__e['say']) ?></span></div>
<?php endif; ?>  <div class="cham-tilt">
<?php if (!empty($__e['defs'])): ?>  <svg width="0" height="0" style="position:absolute" focusable="false"><defs><?php include __DIR__ . '/ember_defs.php'; ?></defs></svg>
<?php endif; ?>  <svg class="cham" viewBox="0 0 300 230" focusable="false">
      
  
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
<?php unset($ember, $__e, $__h); ?>