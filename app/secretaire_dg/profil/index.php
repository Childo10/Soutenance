<?php
if(!isset($_SESSION['users_SDG']) && empty($_SESSION['users_SDG'])){
  header('location:'.CHEMIN_PROJET.'secretaire_dg/connexion/index');
}
$title = 'Profil du secretaire du directeur générale';
include('./app/Commun/dashbord_siedbar_SDG.php');


?>

<?php
if (isset($_SESSION['message_global']) && !empty($_SESSION['message_global'])) {
?>
  <div class="alert-message">
    <?= $_SESSION['message_global'] ?>
  </div>
  <style>
    .alert-message {
      position: fixed;
      z-index: 10;
      top: 30px;
      left: 60%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      font-size: 18px;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.4s ease-in-out;
    }



    .hide {
      opacity: 0;
    }
  </style>
<?php
}
?>


<?php
if (!empty($_SESSION['erreur']) or !empty($_SESSION['erreurs'])) {
?>
  <div class="alert-message">
    <p>Impossible de changer le mot de passe</p>
  </div>
  <style>
    .alert-message {
      position: fixed;
      z-index: 10;
      top: 30px;
      left: 60%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: red;
      color: white;
      font-size: 17px;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.4s ease-in-out;
    }



    .hide {
      opacity: 0;
    }
  </style>

<?php
}
?>


<?php
if (isset($_SESSION['erreur_globale']) && !empty($_SESSION['erreur_globale'])) {
?>
  <div class="alert-message">
    <?= $_SESSION['erreur_globale'] ?>
  </div>
  <style>
    .alert-message {
      position: fixed;
      z-index: 10;
      top: 30px;
      left: 60%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: red;
      color: white;
      font-size: 17px;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.4s ease-in-out;
    }



    .hide {
      opacity: 0;
    }
  </style>

<?php
}
?>


<?php
if (isset($_SESSION['errors']['mdp']) && !empty($_SESSION['errors']['mdp'])) {
?>
  <div class="alert-message">
    <?= $_SESSION['errors']['mdp'] ?>
  </div>
  <style>
    .alert-message {
      position: fixed;
      z-index: 10;
      top: 30px;
      left: 60%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: red;
      color: white;
      font-size: 17px;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.4s ease-in-out;
    }



    .hide {
      opacity: 0;
    }
  </style>

<?php
}
?>

<?php
if (isset($_SESSION['photo-erreurs_SDG']) && !empty($_SESSION['photo-erreurs_SDG'])) {
?>
  <div class="alert-message">
    <?= $_SESSION['photo-erreurs_SDG'] ?>
  </div>
  <style>
    .alert-message {
      position: fixed;
      z-index: 10;
      top: 30px;
      left: 60%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: red;
      color: white;
      font-size: 14px;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.4s ease-in-out;
    }



    .hide {
      opacity: 0;
    }
  </style>

<?php
}
?>

<?php
if (isset($_SESSION['photo_success_SDG']) && !empty($_SESSION['photo_success_SDG'])) {
?>
  <div class="alert-message">
    <?= $_SESSION['photo_success_SDG']?>
  </div>
  <style>
    .alert-message {
      position: fixed;
      z-index: 10;
      top: 30px;
      left: 60%;
      transform: translateX(-50%);
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      font-size: 14px;
      border-radius: 5px;
      opacity: 1;
      transition: opacity 0.4s ease-in-out;
    }



    .hide {
      opacity: 0;
    }
  </style>

<?php
}
?>

<div class="container">
  <div class="main-body">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= CHEMIN_PROJET ?>secretaire_dg/dashbord/">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profil de l'utilisateur</li>
      </ol>
    </nav>

    <!-- /Breadcrumb -->
    <!--Profil-->
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">

          <div class="card-header  bg-primary text-white">
            <h5 class="card-title text-center"> Photo de profil </h5>
          </div>

          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
            <img src="<?= $_SESSION['users_SDG']['avatar'] == 'null' ? CHEMIN_PROJET . 'public/images/user.png' : $_SESSION['users_SDG']['avatar'] ?>" alt="Admin" class="rounded-circle" width="150">
            <form class="mt-3" method="post" enctype="multipart/form-data" action="<?= CHEMIN_PROJET ?>secretaire_dg/profil/mise_a_jour_photo">
                <input class=" btn-sm bg-gray-100 btn btn-outline-light col-6 input_file" id="input_file" type="file" name="image">

                <!--Ajout et mise à jour de photos-->
                <div class="modal fade" id="ajout_photo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ajout_photoLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="#ajout_photoLabel">Photo de profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <p class="text-center">
                          Veuillez entrer votre mot de passe pour confirmer votre identité.
                        </p>

                        <div>
                          <input type="password" name="mot_de_passe" class="text-secondary form-control">

                        </div>


                      </div>
                      <div class="modal-footer">
                        <input type="submit" class="btn  btn-sm btn-primary" name="ajout_photo" value="Valider">
                        <input type="submit" class="btn  btn-sm btn-danger" value="Annuler">
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <button class="btn btn-primary btn-sm  mt-md-1 mt-lg-0" data-toggle="modal" data-target="#ajout_photo"><?= $_SESSION['users_SDG']['avatar'] != 'null' ? 'Mettre à jour' : 'Ajouter' ?></button>

              <button class="btn btn-outline-primary btn-sm mt-1">Envoyer des messages</button>

              <?php
              if ($_SESSION['users_SDG']['avatar'] != 'null') {
              ?>
                <!--Suppression de photo-->
                <form class="mt-3" method="post" action="<?= CHEMIN_PROJET ?>secretaire_dg/profil/suppression_photo">
                  <div class="modal fade" id="supression_photo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="supression_photoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="#supression_photoLabel">Suppression de photo de profil</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <p class="text-center">
                            Veuillez entrer votre mot de passe pour confirmer votre identité.
                          </p>

                          <div>
                            <input type="password" name="mot_de_passe" class="text-secondary form-control">

                          </div>


                        </div>
                        <div class="modal-footer">
                          <input type="submit" class="btn  btn-sm btn-primary" name="delete" value="Valider">
                          <input type="submit" class="btn  btn-sm btn-danger" value="Annuler">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#supression_photo"><i class="fas fa-trash"></i></button>

              <?php
              }
              ?>
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
                <?= $_SESSION['users_SDG']['nom'] ?> <?= $_SESSION['users_SDG']['prenom'] ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold">Nom utilisateur</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= $_SESSION['users_SDG']['nom_utilisateur'] ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= $_SESSION['users_SDG']['email'] ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold">Type de profil</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= $_SESSION['users_SDG']['profil'] ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold">Sexe</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= !empty($_SESSION['users_SDG']['sexe']) ? $_SESSION['users_SDG']['sexe'] : '' ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold">Date de naissance</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= !empty($_SESSION['users_SDG']['date_naissance']) ? $_SESSION['users_SDG']['date_naissance'] : '' ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold">Adresse</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= !empty($_SESSION['users_SDG']['adresse']) ? $_SESSION['users_SDG']['adresse'] : '' ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0 font-weight-bold">Téléphone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?= !empty($_SESSION['users_SDG']['telephone']) ? $_SESSION['users_SDG']['telephone'] : '' ?>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-primary btn-sm w-100" href="<?= CHEMIN_PROJET ?>secretaire_dg/profil/edit_profil">Modifier</a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-8 mt-5">
          <div class="card mb-3">
            <div class="card-header  bg-primary text-white">
              <div class="card-title text-center">
                Changez votre mot de passe
              </div>
            </div>


            <form class="card-body text-center" method="post" action="<?= CHEMIN_PROJET ?>secretaire_dg/profil/traitement_mot_de_passe">
              <p>(Si vous changez votre mot de passe, vous serez déconnecter automatiquement)</p>
              <div class="row form-group">
                <div class="col-sm-6">
                  <h6 class="mb-0 ">Mot de passe actuel</h6>
                </div>
                <div class="col-sm-6 form-group">
                  <input type="password" name="mdp_actuel" class="<?= isset($_SESSION['erreurs']['mdp_actuel']) ? 'is-invalid' : '' ?> <?= isset($_SESSION['erreur']) ? 'is-invalid' : '' ?> col-sm-12 text-secondary form-control">
                  <?php
                  if (isset($_SESSION['erreurs']['mdp_actuel'])) {
                  ?>
                    <div class="invalid-feedback text-center">
                      <?= $_SESSION['erreurs']['mdp_actuel'] ?>
                    </div>
                  <?php
                  }
                  ?>

                  <?php
                  if (isset($_SESSION['erreur'])) {
                  ?>
                    <div class="invalid-feedback text-center">
                      <?= $_SESSION['erreur'] ?>
                    </div>
                  <?php
                  }
                  ?>
                </div>

              </div>

              <div class="row form-group">
                <div class="col-sm-6">
                  <h6 class="mb-0 ">Nouveau mot de passe</h6>
                </div>

                <div class="col-sm-6 form-group">
                  <input type="password" name="mdp_nouveau" class= " <?= isset($_SESSION['erreurs']['mdp_nouveau']) ? 'is-invalid' : '' ?>  col-sm-12 text-secondary form-control ">
                  <?php
                  if (isset($_SESSION['erreurs']['mdp_nouveau'])) {
                  ?>
                    <div class="invalid-feedback text-center">
                      <?= $_SESSION['erreurs']['mdp_nouveau'] ?>
                    </div>
                  <?php
                  }
                  ?>
                </div>


              </div>

              <div class="row form-group">
                <div class="col-sm-6">
                  <h6 class="mb-0 ">Retaper le nouveau mot de passe</h6>
                </div>

                <div class="col-sm-6 form-group">
                  <input type="password" name="retaper_mdp_nouveau" class= " <?= isset($_SESSION['erreurs']['retaper_mdp_nouveau']) ? 'is-invalid' : '' ?>  col-sm-12 text-secondary form-control ">
                  <?php
                  if (isset($_SESSION['erreurs']['retaper_mdp_nouveau'])) {
                  ?>
                    <div class="invalid-feedback text-center">
                      <?= $_SESSION['erreurs']['retaper_mdp_nouveau'] ?>
                    </div>
                  <?php
                  }
                  ?>
                </div>


              </div>


              <div class="row form-group">
                <div class="col-sm-12">

                  <input type="submit" class="btn btn-sm btn-primary px-2" name="changer_mot_de_passe" value="Appliquer">
                  <input type="reset" class="btn btn-sm btn-danger px-2" value="Annuler">

                </div>
              </div>
            </form>
          </div>




        </div>





        <div class="col-6 mt-5 offset-3">

         


          <form action="<?= CHEMIN_PROJET ?>secretaire_dg/profil/desactivation_compte" method="post" class="form-group">

            <div class="modal fade" id="desactivation" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="desactivationLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="desactivationLabel">Désactivation de compte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-center">Attention! La désactivation de votre compte entrainera une déconnexion automatique.
                      Pour vous reconnecter, vous allez devoir réactiver votre compte par le biais d'un <a href="#">Administrateur</a>
                    </p>

                    <div>
                      <h6 class="mb-0 ">Entrer votre mot de passe</h6>
                      <input type="password" name="mdp" class="text-secondary form-control">

                    </div>




                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn  btn-sm btn-primary" name="desactiver_compte" value="Valider">
                    <input type="reset" class="btn  btn-sm btn-danger" value="Annuler">
                  </div>
                </div>
              </div>
            </div>

          </form>

          <form action="<?= CHEMIN_PROJET ?>secretaire_dg/profil/suppression_compte" method="post">
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
                      <input type="password" name="mdp" class="text-secondary form-control">

                    </div>


                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn  btn-sm btn-primary" name="suppression_compte" value="Valider">
                    <input type="submit" class="btn  btn-sm btn-danger" value="Annuler">
                  </div>
                </div>
              </div>
            </div>

          </form>




        </div>
      </div>
    </div>


  
    <div class="row justify-content-center mt-5">
    <div class="col-md-4 mb-3">
        <div class="card">

          <div class="bg-light card-header text-danger">
            <h6 class="card-title  text-center"> 
                  Désactivation de compte

            </h6>
          </div>

          <div class="card-body ">
            <div class="text-center">
              Pour désactiver votre compte,cliquez sur ce bouton
           

              <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#desactivation">Désactiver mon compte</button>
            </div>

          </div>
        </div>
      </div>


      <div class="col-md-4 mb-3">
        <div class="card">

          <div class="bg-danger card-header text-white">
            <h6 class="card-title  text-center"> 
                  Suppression de compte

            </h6>
          </div>

          <div class="card-body ">
            <div class=" text-center">
              Pour supprimer votre compte,cliquez sur ce bouton
           

              <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#suppression">Supprimer mon compte</button>

          </div>
        </div>
      </div>
    </div>

   
  </div>



  <?php
  unset($_SESSION['erreurs']);
  unset($_SESSION['erreur']);
  unset($_SESSION['message_global']);
  unset($_SESSION['erreur_globale']);
  unset($_SESSION['errors']);
  unset($_SESSION['photo-erreurs_SDG']);
  unset($_SESSION['photo_success_SDG']);
  include('./app/Commun/dashbord_footer.php');
  ?>