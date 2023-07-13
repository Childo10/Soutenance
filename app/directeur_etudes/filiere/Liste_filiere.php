<?php
if (!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])) {
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/connexion/index');
}
$title = 'Liste des filières';
include('./app/Commun/dashbord_siedbar_DE.php');

$filiere = "";

$filiere = listerfiliere();


?>




<?php
if (!empty($_SESSION['message_success_global']) or !empty($_SESSION['message_success_global'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_success_global'] ?>
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
if (!empty($_SESSION['message_erreur_desactivation']) or !empty($_SESSION['message_erreur_desactivation'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_erreur_desactivation'] ?>
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
if (!empty($_SESSION['message_suppression_erreur']) or !empty($_SESSION['message_suppression_erreur'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_suppression_erreur'] ?>
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
if (!empty($_SESSION['message_success_activation_global']) or !empty($_SESSION['message_success_activation_global'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_success_activation_global'] ?>
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
if (!empty($_SESSION['message_suppression_success']) or !empty($_SESSION['message_suppression_success'])) {
?>
    <div class="alert-message">
        <?= $_SESSION['message_suppression_success'] ?>
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



<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Liste des filières</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/Ajout_filiere" type="button" class="btn btn-primary">Ajouter une filière</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                if (!empty($filiere)) {
                ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Code filière</th>
                                <th>Libellé de la filière</th>
                                <th>Statuts</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Code filière</th>
                                <th>Libellé de la filière</th>
                                <th>Statuts</th>
                                <th>Actions</th>

                            </tr>
                        </tfoot>
                        <?php
                        foreach ($filiere as $key => $value) {
                            //die(var_dump($_SESSION['filiere']));
                        ?>

                            <tbody>
                                <tr>
                                    <td><?= $filiere[$key]['Codefil'] ?></td>
                                    <td><?= $filiere[$key]['libfil'] ?></td>
                                    <td><span class=" <?= $filiere[$key]['est_actif'] == 1 ? 'btn-primary btn-sm' : 'btn-danger btn-sm' ?>"><?= $filiere[$key]['est_actif'] == 1 ? 'Activée' : 'Désactivée' ?></span></td>
                                    <td>
                                        <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/Modifier_filiere/<?= $filiere[$key]['Codefil'] ?>" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/suppression_filiere/ " data-toggle="modal" data-target="#suppression-<?= $filiere[$key]['Codefil'] ?>" class="btn-sm  btn-circle btn-danger text-decoration-none "><i class="fas fa-times-circle"></i></a>
                                        <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/activation_filiere/<?= $filiere[$key]['Codefil'] ?>/<?= $filiere[$key]['est_actif'] ?>" class="<?= $filiere[$key]['est_actif'] == 1 ? 'btn-outline-danger btn-sm' : 'btn-outline-primary btn-sm' ?> text-decoration-none"><?= $filiere[$key]['est_actif'] == 1 ? 'Désactiver' : 'Activer' ?></a>


                                    </td>
                                    <div class="modal fade" id="suppression-<?= $filiere[$key]['Codefil'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="desactivationLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="desactivationLabel">Suppression de filière</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center">Etes vous sur de supprimer cette filière?
                                                    </p>




                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/suppression_filiere/<?= $filiere[$key]['Codefil'] ?>"  class="btn  btn-sm btn-primary" name="desactiver_compte" value="Valider">Oui</a>
                                                    <a type="button" data-dismiss="modal" class="btn  btn-sm btn-danger" value="Annuler">Non</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </tr>
                            </tbody>
                        <?php
                            $_SESSION['filiere'] = $filiere[$key]['Codefil'];
                        }
                        ?>

                    </table>
                <?php
                } else {
                    echo 'Aucune filière disponible';
                }
                ?>
            </div>
        </div>
    </div>

</div>

<?php
unset($_SESSION['message_success_global']);
unset($_SESSION['message_success_activation_global']);
unset($_SESSION['message_erreur_desactivation'], $_SESSION['message_suppression_success'], $_SESSION['message_suppression_erreur']);
include('./app/Commun/dashbord_footer.php');
?>