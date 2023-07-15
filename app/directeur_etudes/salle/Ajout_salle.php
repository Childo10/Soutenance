<?php
if (!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])) {
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/connexion/index');
}

$title = 'Ajouter une salle';
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
                            <h1 class="h4 text-gray-900 mb-4">Ajouter une salle</h1>
                        </div>
                        <form action="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/Ajout_traitement_salle" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 offset-md-3">
                                    <label for="capacite" class="font-weight-bold">Capacité de la salle <span class="text-danger">(*)</span></label>
                                    <input type="number" class="form-control <?= isset($_SESSION['errors_salle']['capacite']) ? 'is-invalid' : '' ?> " name="capacite" id="capacite">
                                    <?php
                                    if (isset($_SESSION['errors_salle']['capacite'])) {
                                    ?>
                                        <div class="invalid-feedback">
                                            <?= $_SESSION['errors_salle']['capacite'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="Typesal" class="font-weight-bold">Type de la salle <span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control <?= isset($_SESSION['errors_salle']['capacite']) ? 'is-invalid' : '' ?> " name="Typesal" id="Typesal">

                                    <?php
                                    if (isset($_SESSION['errors_salle']['Typesal'])) {
                                    ?>
                                        <div class="invalid-feedback">
                                            <?= $_SESSION['errors_salle']['Typesal'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="nbmax" class="font-weight-bold">Nombre maximum d'étudiant <span class="text-danger">(*)</span> </label>
                                    <input type="number" class="form-control <?= isset($_SESSION['errors_salle']['nbmax']) ? 'is-invalid' : '' ?>  " id="nbmax" name="nbmax">
                                    <?php
                                    if (isset($_SESSION['errors_salle']['nbmax'])) {
                                    ?>
                                        <div class="invalid-feedback">
                                            <?= $_SESSION['errors_salle']['nbmax'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="Nb_defectueux" class="font-weight-bold">Nombre de matériels défectueux <span class="text-danger">(*)</span></label>
                                    <input type="number" name="Nb_defectueux" class="form-control <?= isset($_SESSION['errors_salle']['Nb_defectueux']) ? 'is-invalid' : '' ?>" id="Nb_defectueux">
                                    <?php
                                    if (isset($_SESSION['errors_salle']['Nb_defectueux'])) {
                                    ?>
                                        <div class="invalid-feedback">
                                            <?= $_SESSION['errors_salle']['Nb_defectueux'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="Nb_dispo" class="font-weight-bold">Nombre de matériels disponibles <span class="text-danger">(*)</span> </label>
                                    <input type="number" name="Nb_dispo" class="form-control  <?= isset($_SESSION['errors_salle']['Nb_dispo']) ? 'is-invalid' : '' ?>" id="Nb_dispo">
                                    <?php
                                    if (isset($_SESSION['errors_salle']['Nb_dispo'])) {
                                    ?>
                                        <div class="invalid-feedback">
                                            <?= $_SESSION['errors_salle']['Nb_dispo'] ?>
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

                                    <input type="reset" value="Annuler" class=" btn btn-danger ">

                                    </input>
                                </div>
                            </div>

                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/Liste_salle">Liste des salles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
unset($_SESSION['errors_salle']);
include('./app/Commun/dashbord_footer.php');
?>