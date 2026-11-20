<?php
// Etiquette (badge) - variables attendues : $texte et $type ('encre', 'contour', 'jaune' ou 'bleu')
if (!isset($type)) {
    $type = 'encre';
}

switch ($type) {
    case 'jaune':
        $classes = 'bg-accent text-ink border border-accent';
        break;
    case 'bleu':
        $classes = 'bg-primary text-white border border-primary';
        break;
    case 'contour':
        $classes = 'border border-primary text-primary bg-offwhite';
        break;
    default:
        $classes = 'bg-ink text-white border border-ink';
        break;
}
?>
<span class="font-mono text-xs uppercase tracking-widest px-2 py-0.5 <?= $classes ?>">
    <?= htmlspecialchars($texte) ?>
</span>
