<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Connexion étudiant</title>
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?= CHEMIN_PROJET ?>public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= CHEMIN_PROJET ?>public/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="<?= CHEMIN_PROJET ?>public/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= CHEMIN_PROJET ?>public/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= CHEMIN_PROJET ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= CHEMIN_PROJET ?>public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= CHEMIN_PROJET ?>public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= CHEMIN_PROJET ?>public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= CHEMIN_PROJET ?>public//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= CHEMIN_PROJET ?>public/css/style.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link  href="<?= CHEMIN_PROJET ?>public/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

</head>

<body>
 
  <main class="main-content mt-0">
    <div class="page-header align-items-center min-vh-100">
      
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Connectez-vous</h4>
                 
                </div>
              </div>
              <div class="card-body">
                <form action="traitement" method="post" role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <input type="email" placeholder="Email"  class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="password" placeholder="Mot de passe" class="form-control">
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" name="se_souvenir" type="checkbox" id="rememberMe">
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Se souvenir de moi</label>
                  </div>
                  <div class="text-center">
                    <input type="submit" value="Connexion" class="btn btn-info w-100 my-4 mb-2">
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer id="sticky-footer">

   

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Educ - Action</span></strong>. Tout droits réservés
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->



<!-- Vendor JS Files -->
<script src="<?= CHEMIN_PROJET ?>public/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= CHEMIN_PROJET ?>public/vendor/aos/aos.js"></script>
<script src="<?= CHEMIN_PROJET ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= CHEMIN_PROJET ?>public/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= CHEMIN_PROJET ?>public/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= CHEMIN_PROJET ?>public/js/main.js"></script>


</body>

</html>
