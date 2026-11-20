</main>

<footer class="bg-offwhite border-t-2 border-primary mt-16">
    <div class="max-w-container mx-auto px-8 py-12 text-center">
        <div class="font-condensed text-5xl font-bold text-primary uppercase mb-6 tracking-tight">MMM</div>
        <div class="font-mono text-xs uppercase tracking-widest text-muted space-x-3">
            <a href="#" class="hover:text-primary">Mentions legales</a>
            <span>·</span>
            <a href="#" class="hover:text-primary">Contact</a>
            <span>·</span>
            <a href="index.php?page=partenaires" class="hover:text-primary">Partenaires</a>
            <span>·</span>
            <span>© 2026 Projet PPE</span>
        </div>
    </div>
</footer>

<script>
// Menu mobile : affiche ou cache la navigation quand on clique sur MENU
var boutonMenu = document.getElementById('menu-toggle');
var menuMobile = document.getElementById('menu-mobile');

if (boutonMenu && menuMobile) {
    boutonMenu.addEventListener('click', function () {
        menuMobile.classList.toggle('hidden');
    });
}

// Onglets partenaires : met en bleu l'onglet sur lequel on clique
var boutonsOnglets = document.querySelectorAll('.tab-btn');

boutonsOnglets.forEach(function (bouton) {
    bouton.addEventListener('click', function () {
        boutonsOnglets.forEach(function (autreBouton) {
            autreBouton.classList.remove('bg-primary', 'text-white');
            autreBouton.classList.add('text-ink');
        });
        bouton.classList.add('bg-primary', 'text-white');
        bouton.classList.remove('text-ink');
    });
});
</script>

</body>
</html>
