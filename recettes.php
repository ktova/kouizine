<?php
// Load header
require_once('templates/header.php');
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
        <section class="d-flex flex-column text-center">

            <h2 class="daily_recette">Nos recettes</h2>
            <hr>
            <div>
                <img src="/Assets/lucapic.png" alt="Image Tacos Nico" class="shadow rounded">
            </div>
            <h3 class="recette_title"> Les Lucapic </h3>
            <p>Une honte de la kouizine.</p>
            <a href="recette/lucapic.html" class="text-decoration-none">Découvrir cette recette de <b>coolkid</b></a>
            <hr>

             <div>
                <img src="/Assets/tacos_nico.png" alt="Image Tacos Nico" class="shadow rounded">
            </div>
            <h3 class="recette_title"> Les Taco-nico </h3>
            <p>Très salée, à consommer avec modération.</p>
            <a href="recette/tacos_nico.html" class="text-decoration-none">Découvrir cette recette de <b>zoomer</b></a>
            <hr>

             <div>
                <img src="/Assets/crepetova.png" alt="Image Tacos Nico" class="shadow rounded">
            </div>
            <h3 class="recette_title"> La crêpe tova </h3>
            <p>Si elle commence à parler, jetez la sur le champ.</p>
            <a href="recette/crepetova.html" class="text-decoration-none">Découvrir cette recette de <b>banger</b></a>
            <hr>

             <div>
                <img src="/Assets/soupegoire.png" alt="Image Tacos Nico" class="shadow rounded">
            </div>
            <h3 class="recette_title"> La Soupegoire </h3>
            <p>Idéale pour soigner le rhume de cheveux !</p>
            <a href="recette/soupegoire.html" class="text-decoration-none">Découvrir cette recette de <b>thinker</b></a>
            <hr>

             <div>
                <img src="/Assets/patatocha.png" alt="Image Tacos Nico" class="shadow rounded">
            </div>
            <h3 class="recette_title"> La patatocha </h3>
            <p>Un plaisir pour chicher dans le binks !</p>
            <a href="recette/patatocha.html" class="text-decoration-none">Découvrir cette recette de <b>galère</b></a>
        
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