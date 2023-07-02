<?php
if (!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])) {
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/connexion/index');
}
$title = 'Liste des étudiants';
include('./app/Commun/dashbord_siedbar_DE.php');

$etudiant = "";
$etudiant = listerEtudiant();

?>



<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Liste des étudiants</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/Ajout_etudiant" type="button" class="btn btn-primary">Ajouter un étudiant</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <?php
                        if (!empty($etudiant)) {
                        ?>
                            <tr>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sexe</th>
                                <th>Statuts</th>
                                <th>Actions</th>
                            </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Sexe</th>
                            <th>Statuts</th>
                            <th>Actions</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            foreach ($etudiant as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $etudiant[$key]['Matricule'] ?></td>
                                <td><?= $etudiant[$key]['Nom'] ?></td>
                                <td><?= $etudiant[$key]['Prenom'] ?></td>
                                <td><?= $etudiant[$key]['Sexe'] ?></td>
                                <td><span class=" <?= $etudiant[$key]['est_actif'] == 1 ? 'btn-primary btn-sm' : 'btn-danger btn-sm' ?>"><?= $etudiant[$key]['est_actif'] == 1 ? 'Activée' : 'Désactivée' ?></span></td>
                                <td>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/Modifier_etudiant/<?= $etudiant[$key]['Matricule'] ?>" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/suppression_etudiant/<?= $etudiant[$key]['Matricule']?> " class="btn-sm  btn-circle btn-danger text-decoration-none "><i class="fas fa-times-circle"></i></a>
                                    <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/activation_etudiant/<?= $etudiant[$key]['Matricule'] ?>/<?= $etudiant[$key]['est_actif'] ?>" class="<?= $etudiant[$key]['est_actif'] == 1 ? 'btn-outline-danger btn-sm' : 'btn-outline-primary btn-sm' ?> text-decoration-none">
                                        <?= $etudiant[$key]['est_actif'] == 1 ? 'Désactiver' : 'Activer' ?>
                                    </a>
                                </td>

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
include('./app/Commun/dashbord_footer.php');
?>