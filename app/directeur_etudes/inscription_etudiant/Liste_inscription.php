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
                            <?php
                            if (!empty($inscription && $etudiants_inscrits)) {


                            ?>
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
                                <td><?= !empty($inscription[$key]['Matricule']) ? $inscription[$key]['Matricule'] : 'Indisponible' ?></td>
                                <td><?= !empty($etudiants_inscrits[$key][0]['Nom']) ? $etudiants_inscrits[$key][0]['Nom'] : 'Indisponible' ?></td>
                                <td><?= !empty($etudiants_inscrits[$key][0]['Prenom']) ? $etudiants_inscrits[$key][0]['Prenom'] : 'Indisponible' ?></td>

                                <td><?= $etudiants_inscrits[$key][0]['Sexe'] ?></td>
                                <td><?= !empty($inscription[$key]['Codefil']) ? $inscription[$key]['Codefil'] : 'Indisponible' ?></td>
                                <td><?= !empty($inscription[$key]['DateIns']) ? $inscription[$key]['DateIns'] : 'Indisponible'  ?></td>
                                <td><?= !empty($inscription[$key]['Annee_Ins']) ? $inscription[$key]['Annee_Ins'] : 'Indisponible' ?></td>
                                <td> <span class=" <?= $inscription[$key]['est_actif'] == 1 ? 'btn-primary btn-sm' : 'btn-danger btn-sm' ?>"><?= $inscription[$key]['est_actif'] == 1 ? 'Activé' : 'Désactivé' ?></span></td>
                                <td>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/ " data-toggle="modal" data-target="#suppression-<?= $inscription[$key]['NumIns']  ?>" class=" btn-sm  btn-circle btn-danger text-decoration-none "><i class="fas fa-times-circle"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/activation_inscription/<?= $inscription[$key]['NumIns'] ?>/<?= $inscription[$key]['est_actif'] ?>" class="<?= $inscription[$key]['est_actif'] == 1 ? 'btn-outline-danger btn-sm' : 'btn-outline-primary btn-sm' ?> text-decoration-none">
                                        <?= $inscription[$key]['est_actif'] == 1 ? 'Désactiver' : 'Activer' ?>
                                    </a>
                                </td>

                                <div class="modal fade" id="suppression-<?= $inscription[$key]['NumIns']  ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="desactivationLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="desactivationLabel">Suppression d'inscription</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center">Etes vous sur de supprimer cette inscription?
                                                </p>




                                            </div>
                                            <div class="modal-footer">
                                                <a type="button" href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/suppression_inscription/<?= $inscription[$key]['NumIns']  ?>" class="btn  btn-sm btn-primary" name="desactiver_compte" value="Valider">Oui</a>
                                                <a type="button" data-dismiss="modal" class="btn  btn-sm btn-danger" value="Annuler">Non</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </tr>
                <?php
                                }
                            } else {
                                echo 'Information indisponible';
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
unset($_SESSION['message_erreur_desactivation'], $_SESSION['message_suppression_success'], $_SESSION['message_suppression_erreur']);
include('./app/Commun/dashbord_footer.php');
?>