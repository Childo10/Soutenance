<?php 
$title="Tableau de bord - Sécrétaire des études";
    include('./app/Commun/dashbord_siedbar_etudiant.php');
?>




                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Matières -->
                        <div class="col-xl-3 col-md-8 mb-4">
                            <div class="card shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                                Mes matières</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">13</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Professeurs -->
                         <div class="col-xl-3 col-md-8 mb-4">
                            <div class="card  shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-success text-uppercase mb-1">
                                                Mes Professeurs</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Matières en cours -->
                         <div class="col-xl-3 col-md-8 mb-4">
                            <div class="card  shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-secondary text-uppercase mb-1">
                                                Matières en cours</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Matières terminés-->
                         <div class="col-xl-3 col-md-8 mb-4">
                            <div class="card  shadow h-100 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                                Matières terminées</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      

                     

                    </div>


                      
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
           
 
            <?php
  
    include('./app/Commun/dashbord_footer.php');
?>
