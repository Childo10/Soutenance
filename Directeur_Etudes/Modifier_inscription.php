<?php 
$title='Modifier une inscription';
    include('dashbord_siedbar_DE.php');
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
                                <input type="number" class="form-control form-control-user" name="matricule" id="matricule"
                                    placeholder="Matricule">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="nom" id="nom"
                                    placeholder="Nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="prenom" id="prenom"
                                    placeholder="Prénom">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleInputPassword" name="sexe" placeholder="Sexe">
                               
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" name="Num_Ins" class="form-control form-control-user"  id="Num_Ins"
                                    placeholder="Numéro d'inscription">
                            </div>
                            <div class="col-sm-6">
                                <input type="date"  name="date_ins" class="form-control form-control-user"
                                    id="date_Ins" placeholder="Date d'inscription">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 offset-3">
                                <input type="number"  name="codefil" class="form-control form-control-user"
                                    id="codefil" placeholder="Code filière">
                            </div>
                        </div>
                        <a href="Liste_inscription.php" class="btn btn-primary btn-user btn-block">
                            Modifier une inscription
                        </a>
                        <a href="Modifier_inscription.php" class="btn btn-danger btn-user btn-block">
                            Annuler
                        </a>
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="Liste_inscription.php">Liste des inscriptions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php 
    include('dashbord_footer_DE.php');
?>
