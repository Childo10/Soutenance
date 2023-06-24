<?php 
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
$title='Liste des salles';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des salles</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_salle" type="button" class="btn btn-primary" >Ajouter une salle</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro de la salle</th>
                        <th>Capacité de la salle</th>
                        <th>Type de salle </th>
                        <th>Détails</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numéro de la salle</th>
                        <th>Capacité de la salle</th>
                        <th>Type de salle </th>
                        <th>Détails</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>0015487</td>
                            <td>150 places</td>
                            <td>Informatique</td>
                            <td>
                            <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                     En savoir plus
                            </button>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Informations complémentaire de la salle n001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre maximum d'élèves</span> 
                                                    <span class="font-font-weight-light ">150</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre de matériels défectueux</span> 
                                                    <span class="font-font-weight-light ">10</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre de matériels disponibles</span> 
                                                    <span class="font-font-weight-light ">001545</span>
                                               </div>
                                              


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <a href="Modifier_salle" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>
                        
                        <tr>
                            <td>Sowadan</td>
                            <td>Modeste</td>
                            <td>001146</td>
                            <td>
                            <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                     En savoir plus
                            </button>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Informations complémentaire de la salle n001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre maximum d'élèves</span> 
                                                    <span class="font-font-weight-light ">150</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre de matériels défectueux</span> 
                                                    <span class="font-font-weight-light ">10</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre de matériels disponibles</span> 
                                                    <span class="font-font-weight-light ">001545</span>
                                               </div>
                                              
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <a href="Modifier_salle" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr> 

                        <tr>
                            <td>Jackson</td>
                            <td>Bradshaw</td>
                            <td>001145</td>
                            <td>
                            <button type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                     En savoir plus
                            </button>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Informations complémentaire de la salle n001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre maximum d'élèves</span> 
                                                    <span class="font-font-weight-light ">150</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre de matériels défectueux</span> 
                                                    <span class="font-font-weight-light ">10</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Nombre de matériels disponibles</span> 
                                                    <span class="font-font-weight-light ">001545</span>
                                               </div>
                                              
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <a href="Modifier_salle" type="button" class="btn-sm btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
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
