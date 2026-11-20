<?php
// Grille 2x2 de cases d'information
// Variable : $cases - tableau de 4 elements ['label'=>'', 'valeur'=>'', 'detail'=>'']
?>
<div class="grid grid-cols-2 border border-primary bg-offwhite bg-opacity-95">
    <?php foreach ($cases as $i => $case) { ?>
    <div class="p-4 <?= ($i % 2 === 0) ? 'border-r border-primary' : '' ?> <?= ($i < 2) ? 'border-b border-primary' : '' ?>">
        <div class="font-mono text-xs text-muted uppercase tracking-widest mb-1">
            <?= htmlspecialchars($case['label']) ?>
        </div>
        <div class="font-condensed text-2xl font-bold text-ink uppercase leading-tight">
            <?= htmlspecialchars($case['valeur']) ?>
        </div>
        <?php if (!empty($case['detail'])) { ?>
        <div class="font-mono text-xs text-muted mt-1 uppercase">
            <?= htmlspecialchars($case['detail']) ?>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
