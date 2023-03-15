<?php 
$title='Liste des inscriptions';
    include('./app/Commun/dashbord_siedbar_DE.php');
?>



<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Liste des emplois du temps</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="Ajout_cours" type="button" class="btn btn-primary" >Ajouter un cours</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                        <th>Numéro du cours</th>
                        <th>Code matière</th>
                        <th>Numéro du professeur</th>
                        <th>Détails</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Numéro du cours</th>
                        <th>Code matière</th>
                        <th>Numéro du professeur</th>
                        <th>Détails</th>
                        <th>Actions</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                            <td>001548</td>
                            <td>445815</td>
                            <td>4455456</td>
                            <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
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
                                                   <span class="font-weight-bold ">Code filière:</span> 
                                                    <span class="font-font-weight-light ">001544</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Jour:</span> 
                                                    <span class="font-font-weight-light ">Mardi</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Heure de début</span> 
                                                    <span class="font-font-weight-light ">15:00</span>
                                               </div>
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Heure de fin:</span> 
                                                    <span class="font-font-weight-light ">18:00</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Numéro de salle:</span> 
                                                    <span class="font-font-weight-light ">00115485</span>
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
                                <a href="Modifier_inscription.php" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td> 
                        </tr>

                        <tr>
                            <td>001548</td>
                            <td>445815</td>
                            <td>4455456</td>
                            <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
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
                                                   <span class="font-weight-bold ">Code filière:</span> 
                                                    <span class="font-font-weight-light ">001544</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Jour:</span> 
                                                    <span class="font-font-weight-light ">Mardi</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Heure de début</span> 
                                                    <span class="font-font-weight-light ">15:00</span>
                                               </div>
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Heure de fin:</span> 
                                                    <span class="font-font-weight-light ">18:00</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Numéro de salle:</span> 
                                                    <span class="font-font-weight-light ">00115485</span>
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
                                <a href="Modifier_inscription.php" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn-sm  btn-circle btn-danger "><i class="fas fa-times-circle"></i></a>
                            </td> 
                        </tr>

                        <tr>
                            <td>001548</td>
                            <td>445815</td>
                            <td>4455456</td>
                            <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
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
                                                   <span class="font-weight-bold ">Code filière:</span> 
                                                    <span class="font-font-weight-light ">001544</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Jour:</span> 
                                                    <span class="font-font-weight-light ">Mardi</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Heure de début</span> 
                                                    <span class="font-font-weight-light ">15:00</span>
                                               </div>
                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Heure de fin:</span> 
                                                    <span class="font-font-weight-light ">18:00</span>
                                               </div>

                                               <div class="text-dark">
                                                   <span class="font-weight-bold ">Numéro de salle:</span> 
                                                    <span class="font-font-weight-light ">00115485</span>
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
                                <a href="Modifier_inscription.php" type="button" class="btn-sm  btn-circle  btn-warning"><i class="fas fa-edit"></i></a>
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
