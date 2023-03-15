<?php 
    $title="Profil du sécrétaire des études";
    include('./app/Commun/dashbord_siedbar_SE.php');
?>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil de l'utilisateur</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 class="font-weight-bold">Jean  Claude</h4>
                      <p class="text-secondary mb-1">Sécrétaire des études</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Nom complet</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Jean Claude
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Nom utilisateur</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Jeanl10
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    jeanclaude@.gmail.com
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Type de profil</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Sécrétaire des études
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="edit_profil">Editer</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>

<?php 
    include('./app/Commun/dashbord_footer.php');
?>
