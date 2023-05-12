<?php 
session_start();
$title='Profil du directeur des études';
    include('./app/Commun/dashbord_siedbar_DE.php');
    
  ?>    
 
<div class="container">
    <div class="main-body">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/">Accueil</a></li>
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
                    <img src="<?= CHEMIN_PROJET ?>public/images/avatar.jpg" alt="Admin" class="rounded-circle" width="150">
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
                      <a  class="btn btn-warning btn-sm" href="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/edit_profil">Modifier</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
             <!--Formulaire de suppression de changement de mot de passe-->
             <div class="col-md-6 mt-5  offset-3 ">
              <h5 class="font-weight-bold">Changer votre mot de passe</h5>
              <p>(Si vous changez votre mot de passe, vous serez déconnecter automatiquement)</p>
                <form class="" method="post" action="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/edit_profil_traitement">
                  <div class="row form-group">
                    <div class="col-sm-6">
                      <h6 class="mb-0 ">Mot de passe actuel</h6>
                    </div>
                    <input type="password" name="mdp_actuel" class=" <?= isset($_SESSION['erreurs']['mdp_actuel']) ? 'is-invalid' : ''?> <?= isset($_SESSION['erreur']) ? 'is-invalid' : ''?> col-sm-9 text-secondary form-control">
                      <?php
                          if(isset($_SESSION['erreurs']['mdp_actuel'])){ 
                            ?>
                            <div class="invalid-feedback">
                              <?=$_SESSION['erreurs']['mdp_actuel']?>
                            </div>
                      <?php
                          }
                        ?>

                      <?php
                          if(isset($_SESSION['erreur'])){ 
                            ?>
                            <div class="invalid-feedback">
                              <?=$_SESSION['erreur']?>
                            </div>
                      <?php
                          }
                        ?>
                  </div>
                  
                
                  <div class="row form-group">
                    <div class="col-sm-6">
                      <h6 class="mb-0 ">Nouveau mot de passe</h6>
                    </div>
                    <input type="password" name="mdp_nouveau"  class="  <?= isset($_SESSION['erreurs']['mdp_nouveau']) ? 'is-invalid' : ''?>  col-sm-9 text-secondary form-control ">
                    <?php
                          if(isset($_SESSION['erreurs']['mdp_nouveau'])){ 
                            ?>
                            <div class="invalid-feedback">
                              <?=$_SESSION['erreurs']['mdp_nouveau']?>
                            </div>
                      <?php
                          }
                        ?>
                  </div>

                  <div class="row form-group">
                    <div class="col-sm-12">
                    
                  <input type="submit" class="btn btn-sm btn-primary px-2" name="changer_mot_de_passe" value="Appliquer">
									<input type="reset" class="btn btn-sm btn-danger px-2"  value="Annuler">

                    </div>
                  </div>
              
            </form>

            </div> 
            <!--Formulaire de suppression de compte-->
            <div class="col-6 mt-5 offset-3">
            
            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#desactivation">Désactiver mon compte</button>
            <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#suppression">Supprimer mon compte</button>
              
              
              <form action="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/desactivation_compte" method="Post" class="form-group">

              <div class="modal fade" id="desactivation" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="desactivationLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="desactivationLabel">Désactivation de compte</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                              <p class="text-center">La désactivation de votre compte entrainera une déconnexion automatique.
                                                Pour vous reconnecter, vous allez devoir réactiver votre compte.
                                              </p>
                                              
                                               <div>
                                              <h6 class="mb-0 ">Entrer votre mot de passe</h6>
                                              <input type="password" name="mdp"  class="  text-secondary form-control">
                   
                                              </div>
                                           
                                          

                                               
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn  btn-sm btn-primary" name="desactiver_compte"  value="Valider">
                                                <input type="submit" class="btn  btn-sm btn-danger"   value="Annuler">
                                            </div>
                                            </div>
                                        </div>
                                    </div>

              </form>

              <form action="<?= CHEMIN_PROJET ?>directeur_Etudes/dashbord/edit_profil_traitement" method="post">
              <div class="modal fade" id="suppression" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="suppressionLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="#suppressionLabel">Suppression de compte</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                            <p class="text-center">Attention,la suppression de votre compte entrainera une déconnexion automatique.
                                                
                                              </p>
                                              
                                               <div>
                                              <h6 class="mb-0 ">Entrer votre mot de passe</h6>
                                              <input type="password" name="mdp"  class="  text-secondary form-control">
                   
                                              </div>
                                           
                                               
                                            </div>
                                            <div class="modal-footer">
                                            <input type="submit" class="btn  btn-sm btn-primary" name="suppression_compte"  value="Valider">
                                                <input type="submit" class="btn  btn-sm btn-danger"   value="Annuler">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
          
              </form>
             
            
                           

            </div>
          </div>
        </div>
    </div>



<?php
unset($_SESSION['erreurs']);
unset($_SESSION['erreur']);

    include('./app/Commun/dashbord_footer.php');
?>