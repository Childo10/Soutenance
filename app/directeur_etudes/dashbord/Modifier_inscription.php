<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
$title='Modifier une inscription';
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
                        <h1 class="h4 text-gray-900 mb-4">Modifier une inscription</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control" name="matricule" id="matricule"
                                    placeholder="0000115">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nom" id="nom"
                                    placeholder="Jackson">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control " name="prenom" id="prenom"
                                    placeholder="Bradshaw">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control "
                                    id="exampleInputPassword" name="sexe" placeholder="Masculin">
                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" name="Num_Ins" class="form-control "  id="Num_Ins"
                                    placeholder="0015450">
                            </div>
                            <div class="col-sm-6">
                                <input type="date"  name="date_ins" class="form-control "
                                    id="date_Ins" placeholder="10/05">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 offset-md-3">
                                <input type="number"  name="codefil" class="form-control "
                                    id="codefil" placeholder="0011504">
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
                        <a class="small" href="Liste_inscription">Liste des inscriptions</a>
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
