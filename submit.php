<?php
// Load header
require_once('templates/header.php');
?>

<!-- Site content -->

    <body>
        <section class="d-flex flex-column text-center">

            <h2 id="daily_recette" class="daily_recette">Publiez votre recette !</h2>
            <span id="recetteDesc">Partagez vos recette préférés avec notre communauté !</span>
            <span id="recetteDesc">Bénéficiez de notre programme partenaire et gagnez 0 euros !!</span>
            <hr>
            <div id="recetteSubmit_warning" class="alert alert-warning" role="alert">
                Les recettes publiés par la communauté sont sujet à une validation de notre équipe !
            </div>

            <form id="recetteSubmit">
    
                <div class="form-group">
                    <label for="title">Titre de la recette</label>
                    <input type="text" class="form-control" id="submit_title">
                </div>

                <div class="form-group">
                    <label for="pseudo">Pseudonyme</label>
                    <input type="text" class="form-control" id="submit_user">
                </div>

                <div class="form-group">
                    <label for="timer">Temps de cuisson</label>
                    <input type="text" class="form-control" id="submit_timer" aria-describedby="timerHelp" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')">
                    <small id="timerHelp" class="form-text text-muted">Entrez le temps de cuisson en minutes.</small>
                </div>

                <div class="form-group">
                    <label for="timer">Pour combien de personnes ?</label>
                    <input type="text" class="form-control" id="submit_count" oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')">
                </div>

                <div class="form-group">
                    <label for="pseudo">Catégorie</label>
                    <input type="text" class="form-control" id="submit_cat">
                </div>

               <div class="form-group">
                    <label for="ingredients">Ingrédients</label>
                    <textarea class="form-control" id="submit_content" rows="3" aria-describedby="contentHelp"></textarea>
                    <small id="contentHelp" class="form-text text-muted">2000 Caractères max</small>
               </div>

               <div class="form-group">
                    <label for="etapes">Etapes</label>
                    <textarea class="form-control" id="submit_steps" rows="3" aria-describedby="stepsHelp"></textarea>
                    <small id="stepsHelp" class="form-text text-muted">2000 Caractères max</small>
               </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="checker" aria-describedby="checkInfo">
                    <label class="form-check-label" for="checker">Je suis un humain</label>
                    <small id="checkInfo" class="form-text text-muted"><i class="fas fa-info-circle" role="button"></i>&nbsp; L'upload d'image est actuellement indisponible.</small>

                </div>

            </form>
            <button id="recetteSubmit_btn" class="btn btn-primary" onclick="form_submit_ajax()"><i class="fas fa-scroll"></i>&nbsp; Publier</button>

            <!-- Form error box after submitting -->
            <div id="errorForm" class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Une erreur est survenue !</strong>&nbsp; Veuillez vérifier les champs svp.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="color:black">&times;</span>
                </button>
              </div>

            <!-- Form valid box after submitting -->
            <div id="validForm" class="text-white">
                Votre publication a <strong>bien été prise en compte</strong> ! <br> Elle sera ajoutée à notre liste de recettes si aucune anomalie n'est trouvée pendant la revue !
            </div>

            <hr>
           
        </section>

        <hr>
    </body>

    <!-- Ajax Form handling -->
    <script>
        // Ajax function
        function form_submit_ajax() {
            // Variables
            var recette_title = $('#submit_title').val();
            var recette_user = $('#submit_user').val();
            var recette_timer = $('#submit_timer').val();
            var recette_count = $('#submit_count').val();
            var recette_cat = $('#submit_cat').val();
            var recette_content = $('#submit_content').val();
            var recette_steps = $('#submit_steps').val();
            var recette_checker = $('#checker').prop('checked');

            // Ajax call
            $.ajax({
                url: 'https://kouizine.tova.dev/recette_submit',
                context: this,
                method:'POST',
                data: {
                    title : recette_title,
                    user : recette_user,
                    timer : recette_timer,
                    count : recette_count,
                    cat : recette_cat,
                    content : recette_content,
                    steps : recette_steps,
                    checker : recette_checker
                },
                success:function(response){
                    // remove form
                    $('#errorForm').hide(0);
                    $('#recetteSubmit').empty();
                    $('#recetteSubmit_warning').remove();
                    $('#recetteSubmit_btn').remove();
                    // Change main content on valid response
                    $('#recetteSubmit').html('<i class="fa fa-refresh fa-spin fa-3x fa-fw text-warning"></i>');
                    $('#validForm').fadeIn(250);
                    $('#daily_recette').html("Merci d'avoir publié votre recette !");
                    $('#recetteDesc').remove();
                },
                error:function(){
                    $('#errorForm').fadeIn(250);
                }
            })
        }

        // Ajax response css changes
        $('.close').click(function(){
            $('#errorForm').fadeOut(250);
        });
    </script>

<?php
// Load footer
require_once('templates/footer.html');
?>