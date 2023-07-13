<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
$title='Liste des inscriptions';
    include('./app/Commun/dashbord_siedbar_DE.php');
    $professeur="";
    $professeur=listerProfesseur();
?>



<?php
if (isset( $_SESSION['message_success_professeur']) && !empty( $_SESSION['message_success_professeur'])) {
?>
    <div class="alert-message">
        <?=  $_SESSION['message_success_professeur']?>
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

<?php
if (!empty($_SESSION['message_success_activation_global']) or !empty($_SESSION['message_success_activation_global'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_success_activation_global']?>
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

<?php
if (isset( $_SESSION['message_erreur_activation']) or !empty( $_SESSION['message_erreur_activation'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_erreur_activation']?>
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

<?php
if (!empty($_SESSION['message_suppression_success']) or !empty($_SESSION['message_suppression_success'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_suppression_success']?>
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


<?php
if (!empty($_SESSION['message_suppression_erreur']) or !empty($_SESSION['message_suppression_erreur'])) {
?>
    <div class="alert-message">
        <?=$_SESSION['message_suppression_erreur']?>
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

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Liste des professeurs</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Ajout_professeur" type="button" class="btn btn-primary">Ajouter un professeur</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <?php
                        if (!empty($professeur)) {
                        ?>
                            <tr>
                                <th>Numéro du professeur</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sexe</th>
                                <th>Statuts</th>
                                <th>Actions</th>
                            </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Numéro du professeur</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Sexe</th>
                            <th>Statuts</th>
                            <th>Actions</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            foreach ($professeur as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $professeur [$key]['numprof'] ?></td>
                                <td><?= $professeur [$key]['Nom'] ?></td>
                                <td><?= $professeur [$key]['Prenom'] ?></td>
                                <td><?= $professeur [$key]['Sexe'] ?></td>
                                <td><span class=" <?= $professeur [$key]['est_actif'] == 1 ? 'btn-primary btn-sm' : 'btn-danger btn-sm' ?>"><?= $professeur [$key]['est_actif'] == 1 ? 'Activé' : 'Désactivé' ?></span></td>
                                <td>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Modifier_professeur/<?=$professeur[$key]['numprof'] ?>" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/suppression_professeur/" data-toggle="modal" data-target="#suppression-<?= $professeur[$key]['numprof'] ?>" class="btn-sm  btn-circle btn-danger text-decoration-none "><i class="fas fa-times-circle"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/activation_professeur/<?=$professeur[$key]['numprof'] ?>/<?= $professeur[$key]['est_actif'] ?>" class="<?= $professeur[$key]['est_actif'] == 1 ? 'btn-outline-danger btn-sm' : 'btn-outline-primary btn-sm' ?> text-decoration-none">
                                        <?= $professeur[$key]['est_actif'] == 1 ? 'Désactiver' : 'Activer' ?>
                                    </a>
                                </td>

                                <div class="modal fade" id="suppression-<?= $professeur[$key]['numprof']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="desactivationLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="desactivationLabel">Suppression de professeur</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center">Etes vous sur de supprimer ce professeur?
                                                    </p>




                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/suppression_professeur/<?=$professeur[$key]['numprof']?>"  class="btn  btn-sm btn-primary" name="desactiver_compte" value="Valider">Oui</a>
                                                    <a type="button" data-dismiss="modal" class="btn  btn-sm btn-danger" value="Annuler">Non</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </tr>

                    </tbody>
                <?php
                            }
                ?>
                </table>
            <?php
                        } else {
                            echo 'Aucune donnée disponible';
                        }
            ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
unset($_SESSION['message_success_professeur'],$_SESSION['message_erreur_activation'],
$_SESSION['message_success_activation_global'],$_SESSION['message_suppression_success'],  $_SESSION['message_suppression_erreur']);
include('./app/Commun/dashbord_footer.php');
?>