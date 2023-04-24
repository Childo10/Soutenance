<?php 
    $title="Tableau de bord - Directeur des études";
   include('./app/Commun/dashbord_siedbar_DE.php');
    if(est_connecter()){
    ?>
 
    
    



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Nombres d'élèves inscrits -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Nombre d'élèves inscrits</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">1000</div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nombres de filières-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Nombre de Filières</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">15</div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nombre de professeurs -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre de professeurs
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800">30</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Salle -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Nombres de Salles</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">25</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!-- Salle -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary  shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary
                                             text-uppercase mb-1">
                                               Inscriptions enregistrées lors des 30 derniers jours</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">25</div>
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

          
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   


<?php
   }
   else{
    header('location:/soutenance/directeur_etudes/connexion/index');
   } 
    include('./app/Commun/dashbord_footer.php');
?>