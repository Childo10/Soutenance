<?php 
$title='Liste des inscriptions';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des inscriptions</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/Ajout_inscription" type="button" class="btn btn-primary" >Ajouter une inscription</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro d'inscription </th>
                        <th>Détails</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro d'inscription </th>
                        <th>Détails</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>Jackson</td>
                            <td>Bradshaw</td>
                            <td>001145</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                     En savoir plus
                            </button>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Informations complémentaire de l'inscription n001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Numéro matricule:</span> 
                                                    <span class="font-font-weight-light ">001544</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Sexe:</span> 
                                                    <span class="font-font-weight-light ">Masculin</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Code filière:</span> 
                                                    <span class="font-font-weight-light ">001545</span>
                                               </div>
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Date d'inscription:</span> 
                                                    <span class="font-font-weight-light ">10/05</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Année d'inscription:</span> 
                                                    <span class="font-font-weight-light ">2022 - 2023</span>
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
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/Modifier_inscription" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr>
                        
                        <tr>
                            <td>Sowadan</td>
                            <td>Modeste</td>
                            <td>001146</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                     En savoir plus
                            </button>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Informations complémentaire de l'inscription n001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Numéro matricule:</span> 
                                                    <span class="font-font-weight-light ">0015448</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Sexe:</span> 
                                                    <span class="font-font-weight-light ">Masculin</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Code filière:</span> 
                                                    <span class="font-font-weight-light ">001549</span>
                                               </div>
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Date d'inscription:</span> 
                                                    <span class="font-font-weight-light ">10/06</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Année d'inscription:</span> 
                                                    <span class="font-font-weight-light ">2022 - 2023</span>
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
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/Modifier_inscription" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td>
                           
                        </tr> 

                        <tr>
                            <td>Jackson</td>
                            <td>Bradshaw</td>
                            <td>001145</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                                     En savoir plus
                            </button>

                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Informations complémentaire de l'inscription n001</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Numéro matricule:</span> 
                                                    <span class="font-font-weight-light ">001544</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Sexe:</span> 
                                                    <span class="font-font-weight-light ">Masculin</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Code filière:</span> 
                                                    <span class="font-font-weight-light ">001545</span>
                                               </div>
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Date d'inscription:</span> 
                                                    <span class="font-font-weight-light ">10/05</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Année d'inscription:</span> 
                                                    <span class="font-font-weight-light ">2022 - 2023</span>
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
                                <a href="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/Modifier_inscription" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" type="button" class="btn-sm  btn-circle btn-danger"><i class="fas fa-times-circle"></i></a>
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
