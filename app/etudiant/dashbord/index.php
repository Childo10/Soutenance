<?php
    $title="Tableau de bord Etudiant - Educ-Action";
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?? 'Mon site' ?></title>
    <link rel="stylesheet" href="/soutenance/public/css/profil_style.css">
    <link rel="stylesheet" href="/soutenance/public/css/sb-admin-2.min.css">
    <link href="/soutenance/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/soutenance/public/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/soutenance/public/vendor/aos/aos.css" rel="stylesheet">
  <link href="/soutenance/public/vendor/bootstrap2/css/bootstrap.min.css" rel="stylesheet">
  <link href="/soutenance/public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/soutenance/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/soutenance/public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/soutenance/public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/soutenance/public/css/style.css" rel="stylesheet">
     <!-- Custom styles for this page -->
     <link href="/soutenance/public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Educ - action</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="/soutenance/etudiant/pages/Accueil">Accueil</a></li>
          <li><a href="/soutenance/etudiant/pages/professeur">Professeurs</a></li>
          <li><a href="/soutenance/etudiant/pages/filieres">Filières</a></li>
          <li><a href="/soutenance/etudiant/pages/a_propos">A propos</a></li>
          <li><a href="/soutenance/etudiant/pages/contact">Contact</a></li>
          <li><a href="/soutenance/etudiant/connexion/" class="active">Se connecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/soutenance/etudiant/dashbord/" class="get-started-btn">Tableau de bord</a>

    </div>
  </header><!-- End Header -->

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
            <div class="sidebar-brand-icon">
                <i class="fas fa-school"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Gestion d'école</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tableau de bord</span></a>
        </li>

            <hr class="sidebar-divider">

            <!-- Heading -->

            <li class="nav-item">
                <a class="nav-link" href="accueil">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Cours</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="accueil">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Chapitres</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="accueil">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                        <span>Déconnexion</span>
                </a>
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
            <div class="container-fluid"></div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <a class="btn btn-primary" href="connexion">Déconnexion</a>
            </div>
        </div>
    </div>
</div>
</div>

    
  <!-- ======= Footer ======= -->
  <?php
    include('./app/Commun/page.footer.php');
?>