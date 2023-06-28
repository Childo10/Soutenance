<?php 

if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
    $title='Ajouter un chapitre';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>


<div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Ajouter un chapitre</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-md-6 col-12">
                                <input type="number" class="form-control " name="Num_chapitre" id="Num_chapitre"
                                    placeholder="Numéro du chapitre">
                            </div>

                            <div class="col-md-6 mt-1">
                                <input type="text"  name="Lib_chapitre" class="form-control "
                                    id="Lib_chapitre" placeholder="Libellé du chapitre">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                            <input type="submit" value="Enregistrer" class="mb-1 mb-md-0  btn btn-primary">
                            </input>

                                <input type="reset"  class=" btn btn-danger ">
                                    
                                </input>
                            </div>
                        </div>
                        
                        
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/Liste_chapitre">Liste des chapitres</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php 
    include('./app/Commun/dashbord_footer.php');
?>