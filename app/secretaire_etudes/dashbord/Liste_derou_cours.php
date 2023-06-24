<?php 
if(!isset($_SESSION['users_SE']) && empty($_SESSION['users_SE'])){
    header('location:'.CHEMIN_PROJET.'secretaire_etudes/connexion/index');
}
$title='Liste du déroulement des cours';
    include('./app/Commun/dashbord_siedbar_SE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste du déroulement des cours</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_derou_cours" type="button" class="btn btn-primary" >Ajouter un déroulement de cours</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro du cours</th>
                        <th>Date du cours</th>
                        <th>Heure réelle de début</th>
                        <th>Heure réelle de fin </th>
                        <th>Absences</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numéro du cours</th>
                        <th>Date du cours</th>
                        <th>Heure réelle de début</th>
                        <th>Heure réelle de fin </th>
                        <th>Absences</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001544</td>
                            <td>05/01/2023</td>
                            <td>17:00</td>
                            <td>19:00</td>
                            <td>
                                    <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Voir
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les absences au cours 001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro d'inscription</th>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Prénom</th>
                                                            <th scope="col">Sexe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a  href="Ajout_absence" type="button" class="btn btn-primary"  >Ajouter</a>
                                                <a  href="modifier_absence" type="button" class="btn btn-warning">Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="Modifier_derou_cours" type="button" class="btn btn-sm  btn-circle btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>

                        <tr>
                            <td>001545</td>
                            <td>10/03/2023</td>
                            <td>10:00</td>
                            <td>13:00</td>
                            <td>
                            <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                        Voir 
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les absences au cours 001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro d'inscription</th>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Prénom</th>
                                                            <th scope="col">Sexe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a  href="Ajout_absence" type="button" class="btn btn-primary"  >Ajouter</a>
                                                <a  href="modifier_absence" type="button" class="btn btn-warning">Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="Modifier_derou_cours" type="button" class="btn btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>001547</td>
                            <td>08/01/2023</td>
                            <td>15:00</td>
                            <td>18:00</td>
                            <td>
                            <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                        Voir
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les absences au cours 001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro d'inscription</th>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Prénom</th>
                                                            <th scope="col">Sexe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a  href="Ajout_absence" type="button" class="btn btn-primary"  >Ajouter</a>
                                                <a  href="modifier_absence" type="button" class="btn btn-warning">Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="Modifier_derou_cours" type="button" class="btn btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>


                        <tr>
                            <td>0015441</td>
                            <td>14/03/2023</td>
                            <td>13:00</td>
                            <td>15:00</td>
                            <td>
                            <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                            Voir
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Les absences au cours 001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Numéro d'inscription</th>
                                                            <th scope="col">Nom</th>
                                                            <th scope="col">Prénom</th>
                                                            <th scope="col">Sexe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">0000151</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">0000152</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">00011503</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>Masculin</td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                            <div class="modal-footer">
                                                <a  href="Ajout_absence" type="button" class="btn  btn-primary"  >Ajouter</a>
                                                <a  href="modifier_absence" type="button" class="btn btn-warning">Modifier</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                            </td>
                            <td>
                                <a href="Modifier_derou_cours" type="button" class="btn btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
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
