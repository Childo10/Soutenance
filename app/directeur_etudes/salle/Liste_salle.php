<?php
if (!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])) {
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/connexion/index');
}

$title = 'Liste des salles';
include('./app/Commun/dashbord_siedbar_DE.php');
$salle = "";
$salle = listerSalle();

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

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Liste des salles</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/Ajout_salle" type="button" class="btn btn-primary">Ajouter une salle</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <?php
                        if (!empty($salle)) {

                        ?>
                            <tr>
                                <th>Numéro</th>
                                <th>Capacité</th>
                                <th>Type</th>
                                <th>Max étudiant</th>
                                <th>Matériels défecteux</th>
                                <th>Matériels disponibles</th>
                                <th>Statuts</th>
                                <th>Actions</th>
                            </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Numéro</th>
                            <th>Capacité</th>
                            <th>Type</th>
                            <th>Max étudiant</th>
                            <th>Matériels défecteux</th>
                            <th>Matériels disponibles</th>
                            <th>Statuts</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>

                    <?php
                            foreach ($salle as $key => $value) {
                    ?>
                        <tbody>

                            <tr>
                                <td><?= $salle[$key]['Numsal'] ?></td>
                                <td><?= $salle[$key]['Capacite'] ?></td>
                                <td><?= $salle[$key]['Typesal'] ?></td>
                                <td><?= $salle[$key]['Nbmax'] ?></td>
                                <td><?= $salle[$key]['Nb_defectueux'] ?></td>
                                <td><?= $salle[$key]['Nb_dispo'] ?></td>
                                <td>
                                    <span class=" <?= $salle[$key]['est_actif'] == 1 ? 'btn-primary btn-sm' : 'btn-danger btn-sm' ?>"><?= $salle[$key]['est_actif'] == 1 ? 'Activée' : 'Désactivée' ?></span>
                                </td>
                                <td>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/Modifier_salle/<?= $salle[$key]['Numsal'] ?>" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/suppression_salle/ " data-toggle="modal" data-target="#suppression-<?= $salle[$key]['Numsal'] ?>" class="btn-sm  btn-circle btn-danger text-decoration-none "><i class="fas fa-times-circle"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/activation_salle/<?= $salle[$key]['Numsal'] ?>/<?= $salle[$key]['est_actif'] ?>" class="<?= $salle[$key]['est_actif'] == 1 ? 'btn-outline-danger btn-sm' : 'btn-outline-primary btn-sm' ?> text-decoration-none mt-1">
                                        <?= $salle[$key]['est_actif'] == 1 ? 'Désactiver' : 'Activer' ?></a>
                                </td>

                            </tr>
                    <?php
                            }
                        } else {
                            echo 'Données indisponibles';
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
include('./app/Commun/dashbord_footer.php');
?>