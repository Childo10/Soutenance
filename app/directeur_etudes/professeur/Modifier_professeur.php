<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
    $title='modifier un professeur';
    include('./app/Commun/dashbord_siedbar_DE.php');

    $numprof="";
    $professeur="";
    
    if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
        $numprof=$params['3'];
        $_SESSION['numprof']=$numprof;
        //die(var_dump($_SESSION['numprof']));
       $professeur=recup_professeur_par_numprof($numprof);
       
    }

?>



<?php
if (!empty($_SESSION['message_erreur_etudiant']) or !empty($_SESSION['message_erreur_etudiant'])) {
?>
    <div class="alert-message">
        <?=$_SESSION['message_erreur_etudiant']?>
    </div>
    <style>
        .alert-message {
            position: fixed;
            top: 30px;
            left: 60%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: red;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            opacity: 1;
            transition: opacity 0.4s ease-in-out;
        }



        .hide {
            opacity: 0;
        }
    </style>

<?php
}
?>
<div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Modifier un professeur</h1>
                    </div>
                    <form action="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Modifier_professeur_traitement/" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 offset-md-3">
                                <input type="text" class="form-control <?= isset($_SESSION['errors_prof']['nom']) ? 'is-invalid' : '' ?> " name="nom" id="nom"
                                    value="<?= isset($professeur['Nom']) ? $professeur['Nom'] : $_SESSION['data']['nom'] ?>">

                                    <?php
                                        if (isset($_SESSION['errors_prof']['nom'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors_prof']['nom'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control <?= isset($_SESSION['errors_prof']['prenom']) ? 'is-invalid' : '' ?>  " name="prenom" id="prenom"
                                    value="<?= isset($professeur['Prenom']) ? $professeur['Prenom'] :$_SESSION['data']['prenom'] ?>">

                                    <?php
                                        if (isset($_SESSION['errors_prof']['prenom'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors_prof']['prenom'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                            </div>
                            <div class="col-sm-6">
                            <select name="sexe" id="sexe" class="form-control">
                                        <option value="Masculin ">Masculin</option>
                                        <option value="Féminin ">Féminin</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                            <input type="submit" value="Modifier" class="mb-1 mb-md-0  btn btn-primary">
                            </input>

                                <input type="reset" value="Annuler"  class=" btn btn-danger ">
                                    
                                </input>
                            </div>
                        </div>
                        
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Liste_professeur">Liste des professeurs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php 
unset($_SESSION['message_erreur_etudiant'],$_SESSION['errors_prof']);
    include('./app/Commun/dashbord_footer.php');
?>