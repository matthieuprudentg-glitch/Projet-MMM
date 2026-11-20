<?php
// Titre de section numerote avec filet et reference
// Variables attendues : $num, $titre, $ref (optionnel)
?>
<div class="border-b-2 border-primary mb-8 pb-3">
    <div class="flex items-baseline justify-between gap-4">
        <div class="flex items-baseline gap-4">
            <span class="font-condensed text-5xl font-bold text-primary leading-none"><?= htmlspecialchars($num) ?></span>
            <h2 class="font-condensed text-5xl font-bold text-ink uppercase leading-none"><?= htmlspecialchars($titre) ?></h2>
        </div>
        <?php if (!empty($ref)) { ?>
        <span class="font-mono text-xs text-muted uppercase tracking-widest flex-shrink-0"><?= htmlspecialchars($ref) ?></span>
        <?php } ?>
    </div>
</div>
