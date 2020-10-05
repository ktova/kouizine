<?php
// Load header
require_once('templates/header.html');
?>

<!-- Site content -->

    <header>
        <a class="d-flex justify-content-center" href="/home.html">
            <img src="/Assets/logo_kz.png" alt="Logo Kouizine">
        </a>
        
        <nav>
            <div class="d-flex justify-content-around">
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-utensils"></i>&nbsp; Nos recettes
                    </button>
                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenu">
                        <a class="dropdown-item text-white" href="/recettes.html">Team Kouizine</a>
                        <a class="dropdown-item text-white" href="/recettes-public.html">Communauté</a>
                    </div>
                </div>
                <a href="/submit.html"><button type="button" class="btn btn-warning"><i class="fas fa-scroll"></i>&nbsp; Publier une recette</button></a>
            </div>
        </nav>
        <hr>
    </header>

    <body>
        <section class="d-flex flex-column text-center mleg">

            <h2 class="daily_recette">Mention légales</h2>

            <strong>Edition du site</strong>
            Editeur du site kouizine.tova.dev : Moi 
            <hr>
            <strong>Propriété Intellectuelle</strong>
            L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris les représentations iconographiques et photographiques. La reproduction, adaptation et/ou traduction de tout ou partie de ce site sur un support quel qu'il soit, est formellement interdite sauf autorisation expresse du Directeur de la publication.
            <hr>
            <strong>Modification du site</strong>
            L'équipe éditoriale se réserve le droit de modifier ou de corriger le contenu de ce site et de ces mentions légales à tout moment et ceci sans préavis.
            <hr>
            <strong>Hébergeur</strong>
            Le site kouizine.tova.dev est hébergé par la société Infomaniak.
            <hr>
            
        </section>
        <hr>
    </body>
</main>

    <footer>
        <div class="d-flex justify-content-center flex-column text-center">
            <p class="copyrightText">
                <span class="copyright_symbol">&#169;</span> Kouizine
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f fa-0.5x"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>    
            </p><br>
            <p class="footerInfo"><a href="/mentions_legales.html" class="text-decoration-none">Mentions légales</a> | <a href="/protection-donnees.html">Protection des données</a> </p><br>
        </div>

        <!-- Menu toggle -->
        <script>
        $('#dropdownMenu').on('click', function () {
            $('.dropdown-menu').toggle();
        });
        </script>
    </footer>

</html>