<?php 
session_start();
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
         <!--Profil-->
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                
              <div class="card-header  bg-primary text-white">
		 					<h5 class="card-title text-center">
								 Photo de profil
							</h5>
              </div>

                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/soutenance/public/images/avatar.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 class="font-weight-bold"><?=$_SESSION['users']['0']['nom']?> <?=$_SESSION['users']['0']['prenom']?></h4>
                      <p class="text-secondary mb-1"><?=$_SESSION['users']['0']['profil']?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Informations personnelles-->
            <div class="col-md-8">
              <div class="card mb-3">
              <div class="card-header  bg-primary text-white">
		 					<h5 class="card-title text-center">
								 Mes informations personnelles
							</h5>
						</div>
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
                      <a  class="btn btn-warning btn-sm" href="/soutenance/directeur_etudes/dashbord/edit_profil">Modifier</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <!--Changement de mot de passe-->
            <div class="col-md-8 offset-1 text-center">
              <div class="card mb-3">
              <div class="card-header  bg-danger text-white">
		 					<h5 class="card-title">
								Changer mot de passe(Sécurité)
							</h5>
						</div>
                <form class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Mot de passe actuel</h6>
                    </div>
                    <input type="password" class="col-sm-9 text-secondary form-control">
                  </div>
                  
                   
                    
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 font-weight-bold">Nouveau mot de passe</h6>
                    </div>
                    <input type="password" class="col-sm-9 text-secondary form-control">
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                    
                  <input type="submit" class="btn btn-sm btn-primary px-2" name="button" value="Appliquer">
									<input type="reset" class="btn btn-sm btn-danger px-2" name="button" value="Annuler">
                    </div>
                  </div>
              
            </form>

            </div>

            
          </div>
        </div>
    </div>



<?php
unset($_SESSION['success']);
    include('./app/Commun/dashbord_footer.php');
?>