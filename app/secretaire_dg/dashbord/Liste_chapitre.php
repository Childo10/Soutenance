<?php 
$title='Liste des chapitres';
    include('./app/Commun/dashbord_siedbar_SDG.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des chapitres</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_chapitre" type="button" class="btn btn-primary">Ajouter un chapitre</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code matière</th>
                        <th>Libellé de la matière</th>
                        <th>Chapitre</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Code matière</th>
                        <th>Libellé de la matière</th>
                        <th>Chapitre</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>AG</td>
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
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                            <td><a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                            <td><a href="" type="button" class="btn-sm btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                            <td><a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                            <td><a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a href="modifier_chapitre" type="button" class="btn btn-primary">Modifier</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                            </td>
                        </tr>

                        <tr>
                        <td>001544</td>
                            <td>AG</td>
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
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a href="modifier_chapitre" type="button" class="btn btn-primary">Modifier</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                            </td>
                           
                        </tr>


                        <tr>
                        <td>001544</td>
                            <td>AG</td>
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
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a href="modifier_chapitre" type="button" class="btn btn-primary">Modifier</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                            </td>
                           
                        </tr>


                        <tr>
                        <td>001544</td>
                            <td>AG</td>
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
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Les fondamentaux du digital</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Les bases en HTML et CSS</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Les fonctions en PHP</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011507</th>
                                                            <td>Les frameworks CSS</td>
                                                            <td><a href="" type="button" class="btn btn-circle btn-danger "><i class="fas fa-times-circle"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a href="modifier_chapitre" type="button" class="btn btn-primary">Modifier</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

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
