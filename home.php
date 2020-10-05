<?php
// Load header
require_once('templates/header.php');
?>

<!-- Site content -->

    <body>
        <section id="main_section" class="d-flex flex-column text-center">

            <!-- Easter egg button -->
            <i id="easter_open" class="fas fa-info-circle easter_icon" role="button"></i>
            <!-- -->

            <h2 class="daily_recette">La recette du jour</h2>
            <div>
                <img src="/Assets/lucapic.png" alt="Image Tacos Nico" class="rounded shadow">
            </div>
            <h3 class="recette_title"> Les Lucapic </h3>
            <p>Une honte de la kouizine</p>
            <a href="recette/lucapic.html" class="text-decoration-none">Découvrir cette recette de <b>coolkid</b></a>
        
        </section>

        <!-- Hidden easter egg section -->
        <section id="hidden_section" class="d-flex flex-column text-center isHidden">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.redd.it%2Fzle8iz78qw041.jpg&f=1&nofb=1">
            <h3>Salut les kids</h3>
            <i id="easter_close" class="fas fa-times-circle"></i>
        </section>
        <!-- -->

        <hr>
    </body>

    <script src="/Assets/easter.js"></script>

<?php
// Load footer
require_once('templates/footer.html');
?>