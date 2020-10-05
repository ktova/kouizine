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
        <section class="d-flex flex-column text-center mleg">

            <h2 class="daily_recette">Protection des données</h2>

            <hr>
            
        </section>
        <hr>
    </body>

<?php
// Load footer
require_once('templates/footer.html');
?>