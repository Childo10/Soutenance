<?php
if (!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])) {
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/connexion/index');
}

$title = 'Liste des inscriptions';
include('./app/Commun/dashbord_siedbar_DE.php');
$inscription = "";
$inscription = listerInscription();
$etudiants_inscrits = [];
foreach ($inscription as $key => $value) {
    $etudiants_inscrits[] = listerEtudiant_par_matricule($inscription[$key]['Matricule']);
    //die(var_dump( $etudiants_inscrits[0][0]['Nom']));
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
    <h1 class="h3 mb-2 text-gray-800">Liste des inscriptions</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/ajout_inscription" type="button" class="btn btn-primary">Ajouter une inscription</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>N° Inscription</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Sexe</th>
                            <th>Code filière</th>
                            <th>Date</th>
                            <th>Année</th>
                            <th>Statuts</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>N° Inscription</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Sexe</th>
                            <th>Code filière</th>
                            <th>Date</th>
                            <th>Année</th>
                            <th>Statuts</th>
                            <th>Actions</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <?php
                            foreach ($etudiants_inscrits as $key => $value) {
                            ?>
                                <td><?= $inscription[$key]['Matricule'] ?></td>
                                <td><?= $etudiants_inscrits[$key][0]['Nom'] ?></td>
                                <td><?= $etudiants_inscrits[$key][0]['Prenom'] ?></td>

                                <td><?= $etudiants_inscrits[$key][0]['Sexe'] ?></td>
                                <td><?= $inscription[$key]['Codefil'] ?></td>
                                <td><?= $inscription[$key]['DateIns'] ?></td>
                                <td><?= $inscription[$key]['Annee_Ins'] ?></td>
                                <td> <span class=" <?= $inscription[$key]['est_actif'] == 1 ? 'btn-primary btn-sm' : 'btn-danger btn-sm' ?>"><?= $inscription[$key]['est_actif'] == 1 ? 'Activé' : 'Désactivé' ?></span></td>
                                <td>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/suppression_inscription/<?= $inscription[$key]['NumIns'] ?> " class="btn-sm  btn-circle btn-danger text-decoration-none "><i class="fas fa-times-circle"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/activation_inscription/<?= $inscription[$key]['NumIns'] ?>/<?= $inscription[$key]['est_actif'] ?>" class="<?= $inscription[$key]['est_actif'] == 1 ? 'btn-outline-danger btn-sm' : 'btn-outline-primary btn-sm' ?> text-decoration-none">
                                        <?= $inscription[$key]['est_actif'] == 1 ? 'Désactiver' : 'Activer' ?>
                                    </a>
                                </td>

                        </tr>
                    <?php
                            }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
unset($_SESSION['message_success_global']);
unset($_SESSION['message_success_activation_global']);
unset($_SESSION['message_erreur_desactivation'],$_SESSION['message_suppression_success'],$_SESSION['message_suppression_erreur']);
include('./app/Commun/dashbord_footer.php');
?>