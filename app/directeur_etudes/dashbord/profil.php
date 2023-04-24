<?php 
$title='Profil du directeur des études';
    include('./app/Commun/dashbord_siedbar_DE.php');
    
  ?>    

<div class="container">
    <div class="main-body">

         <?php
              if(isset($_SESSION['success'])){ 
              ?>
            <h3 class="text-center alert alert-success  ">
                <?=$_SESSION['success']?>
            </h3>
          <?php
          }
         ?>
      
              
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/soutenance/directeur_etudes/dashbord/">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil de l'utilisateur</li>
            </ol>
          </nav>
          
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 class="font-weight-bold"><?=$_SESSION['users']['0']['nom']?> <?=$_SESSION['users']['0']['prenom']?></h4>
                      <p class="text-secondary mb-1"><?=$_SESSION['users']['0']['profil']?></p>
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
                    <?=$_SESSION['users']['0']['nom']?> <?=$_SESSION['users']['0']['prenom']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Nom utilisateur</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$_SESSION['users']['0']['nom_utilisateur']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$_SESSION['users']['0']['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Type de profil</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$_SESSION['users']['0']['profil']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a  class="btn btn-warning" href="/soutenance/directeur_etudes/dashbord/edit_profil">Editer</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>



<?php
unset($_SESSION['success']);
    include('./app/Commun/dashbord_footer.php');
?>