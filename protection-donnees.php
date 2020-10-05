<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site de kouizine</title>
    <link rel="icon" href="/Assets/favicon.png"  type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/Assets/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0d2059c859.js" crossorigin="anonymous"></script>
</head>

<main class="container">

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