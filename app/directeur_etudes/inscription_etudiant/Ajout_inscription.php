<?php
if (!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])) {
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/connexion/index');
}

$title = 'Ajouter une inscription';
include('./app/Commun/dashbord_siedbar_DE.php');

$etudiant="";
$etudiant=listerEtudiant();
$filiere="";
$filiere=listerfiliere();
?>


<?php
if (isset($_SESSION['message_erreur_inscription']) && !empty($_SESSION['message_erreur_inscription'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_erreur_inscription']?>
    </div>
    <style>
        .alert-message {
            position: fixed;
            top: 30px;
            left: 60%;
            z-index: 5;
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

<?php
if (isset($_SESSION['errors_inscription']['inscription']) && !empty($_SESSION['errors_inscription']['inscription'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['errors_inscription']['inscription']?>
    </div>
    <style>
        .alert-message {
            position: fixed;
            top: 30px;
            left: 60%;
            z-index: 5;
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

<?php
if (isset($_SESSION['message_success_inscription']) && !empty($_SESSION['message_success_inscription'])) {
?>
    <div class="alert-message">
        <?=$_SESSION['message_success_inscription']?>
    </div>
    <style>
        .alert-message {
            position: fixed;
            top: 30px;
            left: 60%;
            z-index: 5;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: #007bff;
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
                            <h1 class="h4 text-gray-900 mb-4">Ajouter une inscription</h1>
                        </div>
                        <form action="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/ajout_inscription_traitement" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="matricule" class="font-weight-bold">Matricule</label>
                                    <select name="matricule" id="matricule" class="form-control <?= isset($_SESSION['errors_inscription']['inscription']) ? 'is-invalid' : '' ?>">
                                        <?php
                                         foreach ($etudiant as $key => $value) {
                                            ?>
                                        <option value="<?= $etudiant[$key]['Matricule'] ?>"><?= $etudiant[$key]['Matricule'] ?></option>
                                        
                                        <?php
                                         }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="codefil" class="font-weight-bold">Code de filière</label>
                                    <select name="codefil" id="codefil" class="form-control <?= isset($_SESSION['errors_inscription']['inscription']) ? 'is-invalid' : '' ?> ">
                                    <?php
                                         foreach ($etudiant as $key => $value) {
                                            ?>
                                        <option value="<?= $filiere[$key]['Codefil'] ?>"><?= $filiere[$key]['Codefil'] ?></option>
                                        
                                        <?php
                                         }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="date_Ins" class="font-weight-bold">Date d'inscription</label>
                                    <input type="date" name="date_ins" class="form-control <?= isset($_SESSION['errors_inscription']['date_ins']) ? 'is-invalid' : '' ?>" id="date_Ins" placeholder="Date d'inscription">
                                    <?php
                                        if (isset($_SESSION['errors_inscription']['date_ins'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors_inscription']['date_ins'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                </div>

                                <div class="col-sm-6">
                                    <label for="annee_Ins" class="font-weight-bold">Année d'inscription</label>
                                    <input type="month" name="annee_ins" class="form-control <?= isset($_SESSION['errors_inscription']['annee_ins']) ? 'is-invalid' : '' ?>" id="annee_Ins" placeholder="Année d'inscription">
                                    <?php
                                        if (isset($_SESSION['errors_inscription']['annee_ins'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors_inscription']['annee_ins'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>

                          

                            <div class="form-group row">
                                <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                    <input type="submit" value="Enregistrer" class="mb-1 mb-md-0  btn btn-primary">
                                    </input>

                                    <input type="reset" class=" btn btn-danger ">

                                    </input>
                                </div>
                            </div>

                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/Liste_inscription">Liste des inscriptions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
unset($_SESSION['errors_inscription'],$_SESSION['message_success_inscription'],$_SESSION['message_erreur_inscription']);
include('./app/Commun/dashbord_footer.php');
?>