<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
$title='Liste des matières';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des matières</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/matiere/Ajout_matiere" type="button" class="btn btn-primary" >Ajouter une matière</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code matière</th>
                        <th>Libellé de la matière</th>
                        <th>coefficient</th>
                        <th>Nombre maxi d'étudiants</th>
                        <th>Chapitre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Code matière</th>
                        <th>Libellé de la matière</th>
                        <th>coefficient</th>
                        <th>Nombre maxi d'étudiants</th>
                        <th>Chapitre</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>Maths</td>
                            <td>055474</td>
                            <td>150</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Voir
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les chapitres</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro du Chapitre</th>
                                                            <th scope="col">Libellé du chapitre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/Ajout_chapitre" type="button" class="btn btn-primary">Ajouter</a>
                                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/modifier_chapitre" type="button" class="btn btn-warning">Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/matiere/Modifier_matiere" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001545</td>
                            <td>SVT</td>
                            <td>055476</td>
                            <td>150</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Voir
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les chapitres</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro du Chapitre</th>
                                                            <th scope="col">Libellé du chapitre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a  href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/Ajout_chapitre.php" type="button" class="btn btn-primary">Ajouter</a>
                                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/modifier_chapitre.php" type="button" class="btn btn-warning" >Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/matiere/Modifier_matiere" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001547</td>
                            <td>PCT</td>
                            <td>055444</td>
                            <td>150</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Voir
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les chapitres</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro du Chapitre</th>
                                                            <th scope="col">Libellé du chapitre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a  href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/Ajout_chapitre.php" type="button" class="btn btn-primary">Ajouter</a>
                                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/modifier_chapitre.php" type="button" class="btn btn-warning">Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/matiere/Modifier_matiere" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>0015441</td>
                            <td>Anglais</td>
                            <td>055484</td>
                            <td>150</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Voir
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les chapitres</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro du Chapitre</th>
                                                            <th scope="col">Libellé du chapitre</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a  href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/Ajout_chapitre.php" type="button" class="btn btn-primary">Ajouter</a>
                                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/modifier_chapitre.php" type="button" class="btn btn-warning">Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/matiere/Modifier_matiere" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?php 
    include('./app/Commun/dashbord_footer.php');
?>
