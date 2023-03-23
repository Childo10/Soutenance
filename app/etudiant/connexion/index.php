
  <?php
   $title="Connexion - Etudiant";
    include('./app/Commun/web_header_etudiant.php');
    ?>
 
  <main class="main-content mt-0">
    <div class="page-header align-items-center min-vh-100">
      
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Connexion</h4>
                 
                </div>
              </div>
              <div class="card-body">
                <form action="traitement" method="post" role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" name="se_souvenir" type="checkbox" id="rememberMe" checked>
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

      <?php
    include('./app/Commun/web_footer_etudiant.php');
    ?>