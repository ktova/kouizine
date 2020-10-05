<?php
// Load header
require_once('templates/header.php');
?>

<!-- Site content -->

    <body>
        <section class="d-flex flex-column text-center">

            <h2 class="daily_recette">Les recettes de la commu</h2>

            <!-- Filters -->
            <div id="filter_buttons" class="d-flex justify-content-around">
                <button onclick="get_recette('views')" type="button" class="btn btn-outline-warning btn-sm filter-btn"><i class="far fa-eye"></i>&nbsp;Les plus vues</button>
                <button onclick="get_recette('likes')" type="button" class="btn btn-outline-primary btn-sm filter-btn"><i class="fas fa-fire-alt"></i>&nbsp;Les plus appréciées</button>
            </div>

            <div id="filter_sliders" class="category_slider">
                <img class="slider_img" src="Assets/slick/slick_imgs/asian_food.jpg"/>
                <img class="slider_img" src="Assets/slick/slick_imgs/fast_food.jpg"/>
                <img class="slider_img" src="Assets/slick/slick_imgs/sushis.jpg"/>
                <img class="slider_img" src="Assets/slick/slick_imgs/asian_food.jpg"/>
                <img class="slider_img" src="Assets/slick/slick_imgs/fast_food.jpg"/>
                <img class="slider_img" src="Assets/slick/slick_imgs/sushis.jpg"/>
            </div>

            <!-- Load Content -->
            <section id="filter_results" class="d-flex justify-content-center flex-column">
                <span>Sélectionnez une <b style="color:#ffc107">catégorie</b> ci-dessus pour afficher les recettes !</span>
            </section>
            
        </section>

        <hr>
    </body>

    <!-- Load slickJS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="Assets/slick/slicker.js"></script>
    <script>

        // Load community content AJAX
        function get_recette(category){
            // Variables
            var call_ping = true;
            var cat_select = category;
            // Before ajax call
            $('.filter-btn').addClass('disabled');
            $('#filter_results').empty();
            $('#filter_results').html('<h4 style="text-align:center;margin-top:15px;"><i class="fa fa-refresh fa-spin fa-3x fa-fw text-warning"></i><h4>');
            // Ajax call
            $.ajax({
                url: 'https://kouizine.tova.dev/get_recettes',
                context: this,
                method:'POST',
                data: {
                    req_cat : cat_select
                },
                success:function(response){
                    setTimeout(function(){
                        $('#filter_results').html(response);
                        $('.filter-btn').removeClass('disabled');
                    },500);
                },
                error:function(response){
                    alert('An error occured');
                }
            })
        };   

        // Menu Toggle
        $('#dropdownMenu').on('click', function () {
            $('.dropdown-menu').toggle();
        });

    </script>

<?php
// Load footer
require_once('templates/footer.html');
?>