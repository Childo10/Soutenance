<?php 
    $title='Ajouter une inscription';
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
                        <h1 class="h4 text-gray-900 mb-4">Ajouter une inscription</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control " name="NumIns" id="NumIns"
                                    placeholder="Numéro d'inscription">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control " name="matricule" id="matricule"
                                    placeholder="Numéro matricule">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control" name="codefil" id="codefil"
                                    placeholder="Code filière">
                            </div>
                            <div class="col-sm-6">
                                <input type="date"  name="date_ins" class="form-control"
                                    id="date_Ins" placeholder="Date d'inscription">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 text-center offset-md-3">
                                <input type="text"  name="annee_ins" class="form-control"
                                    id="annee_Ins" placeholder="Année d'inscription">
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
                        <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/Liste_inscription">Liste des inscriptions</a>
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