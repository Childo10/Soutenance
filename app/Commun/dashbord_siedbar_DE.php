<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ? $title  : 'Mon site'  ?></title>
    <link rel="stylesheet" href="<?= CHEMIN_PROJET ?>public/css/profil_style.css">
    <link rel="stylesheet" href="<?= CHEMIN_PROJET ?>public/css/sb-admin-2.min.css">
    <link href="<?= CHEMIN_PROJET ?>public/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this page -->
    <link href="<?= CHEMIN_PROJET ?>public/vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>



<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">
  

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= CHEMIN_PROJET ?>directeur_etudes/dashbord/index">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Gestion d'école</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= CHEMIN_PROJET ?>directeur_etudes/dashbord/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInscription" aria-expanded="true" aria-controls="collapseInscription">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Inscription</span>
                </a>
                <div id="collapseInscription" class="collapse" aria-labelledby="headingInscription" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/Ajout_inscription">Ajouter une inscription</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription_etudiant/Liste_inscription">Liste des inscriptions</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfesseur" aria-expanded="true" aria-controls="collapseProfesseur">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Professeur</span>
                </a>
                <div id="collapseProfesseur" class="collapse" aria-labelledby="headingProfesseur" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Ajout_professeur">Ajouter un professeur</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/professeur/Liste_professeur">Liste des professeurs</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEtudiant" aria-expanded="true" aria-controls="collapseEtudiant">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Etudiant</span>
                </a>
                <div id="collapseEtudiant" class="collapse" aria-labelledby="headingEtudiant" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/Ajout_etudiant">Ajouter un étudiant</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/etudiant/Liste_etudiant">Liste des étudiants</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Cours</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/cours/Ajout_cours">Ajouter un cours</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/cours/Liste_cours">Liste des cours</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefiliere" aria-expanded="true" aria-controls="collapsefiliere">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Filières</span>
                </a>
                <div id="collapsefiliere" class="collapse" aria-labelledby="headingfiliere" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/Ajout_filiere">Ajouter une filière</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/Liste_filiere">Liste des filières</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsematiere" aria-expanded="true" aria-controls="collapsematiere">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Matières</span>
                </a>
                <div id="collapsematiere" class="collapse" aria-labelledby="matiere" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/matiere/Ajout_matiere">Ajouter une matière</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/matiere/Liste_matiere">Liste des matières</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecours" aria-expanded="true" aria-controls="collapsecours">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Dérouler d'un cours</span>
                </a>
                <div id="collapsecours" class="collapse" aria-labelledby="cours" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/derou_cours/Ajout_derou_cours">Ajouter un dérouler cours</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/derou_cours/Liste_derou_cours">Liste des dérouler cours </a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbsence" aria-expanded="true" aria-controls="collapseAbsence">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Absence</span>
                </a>
                <div id="collapseAbsence" class="collapse" aria-labelledby="cours" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/absence/Ajout_absence">Ajouter une absence</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/absence/Liste_absence">Liste des absences </a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseChapitre" aria-expanded="true" aria-controls="collapseChapitre">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Chapitre</span>
                </a>
                <div id="collapseChapitre" class="collapse" aria-labelledby="cours" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/Ajout_chapitre">Ajouter un chapitre</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/chapitre/Liste_chapitre">Liste des chapitres</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesalle" aria-expanded="true" aria-controls="collapsesalle">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Salle</span>
                </a>
                <div id="collapsesalle" class="collapse" aria-labelledby="salle" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/Ajout_salle">Ajouter une salle</a>
                        <a class="collapse-item" href="<?= CHEMIN_PROJET ?>directeur_Etudes/salle/Liste_salle">Liste salles </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                      
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['users_DE']['nom']?> <?=$_SESSION['users_DE']['prenom']?> </span>
                                <img class="img-profile rounded-circle" src="<?= $_SESSION['users_DE']['avatar']=='null' ? CHEMIN_PROJET . 'public/images/user.png': $_SESSION['users_DE']['avatar']?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= CHEMIN_PROJET ?>directeur_etudes/profil/">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Prêt à partir?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Retour</button>
                                <a class="btn btn-primary" href="<?= CHEMIN_PROJET ?>directeur_etudes/dashbord/deconnexion">Déconnexion</a>
                            </div>
                        </div>
                    </div>
                </div>

