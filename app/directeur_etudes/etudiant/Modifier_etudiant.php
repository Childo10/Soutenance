<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
    $title='modifier un étudiant';
    include('./app/Commun/dashbord_siedbar_DE.php');

    $data="";
    $matricule="";
    
    if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
        $matricule=$params['3'];
        $_SESSION['matricule']=$matricule;
        //die(var_dump($_SESSION['matricule']));
       $etudiant=recup_etudiant_par_matricule($matricule);
        //die(var_dump($etudiant['Sexe']));
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
                        <h1 class="h4 text-gray-900 mb-4">Modifier un étudiant</h1>
                    </div>
                    <form action="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/Modifier_etudiant_traitement/" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 offset-md-3">
                                <input type="text" class="form-control <?= isset($_SESSION['errors_etudiant']['nom']) ? 'is-invalid' : '' ?> " name="nom" id="nom"
                                    value="<?= isset($etudiant['Nom']) ? $etudiant['Nom'] : $data ?>">

                                    <?php
                                        if (isset($_SESSION['errors_etudiant']['nom'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors_etudiant']['nom'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control <?= isset($_SESSION['errors_etudiant']['prenom']) ? 'is-invalid' : '' ?>  " name="prenom" id="prenom"
                                    value="<?= isset($etudiant['Prenom']) ? $etudiant['Prenom'] : $data ?>">

                                    <?php
                                        if (isset($_SESSION['errors_etudiant']['prenom'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors_etudiant']['prenom'] ?>
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

                                <input type="reset"  class=" btn btn-danger ">
                                    
                                </input>
                            </div>
                        </div>
                        
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/Liste_etudiant">Liste des étudiants</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php 
unset($_SESSION['message_erreur_etudiant'],$_SESSION['errors_etudiant']);
    include('./app/Commun/dashbord_footer.php');
?>