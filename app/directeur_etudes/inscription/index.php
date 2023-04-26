<?php
    session_start();
    $title="Inscription - Directeur des études";
    include('./app/Commun/header.php');
    if(isset($_SESSION['users']) and !empty($_SESSION['users'])){
        header('location:/soutenance/directeur_etudes/dashbord/index');
    }
    $data=[];
    if (isset($_SESSION['data']) && !empty($_SESSION['data'])){
        $data= $_SESSION['data'];
    }
    
?>

<body>

 <div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
                    </div>
                    <form action="/soutenance/directeur_Etudes/inscription/traitement" method="post"  class="user" >
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="nom">Nom<span class="text-danger">(*)</span></label>
                                <input type="text"   value="<?php if (isset($data['nom']) && !empty($data['nom'])) {echo $data['nom'];} else{echo '';} ?>" class="form-control <?= isset($_SESSION['errors']['nom']) ? 'is-invalid' : ''?>" name="nom" id="nom"
                                    >
                                    <?php
                                    if(isset($_SESSION['errors']['nom'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['nom']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                            <div class="col-sm-6">
                                 <label for="prenom">Prénom <span class="text-danger">(*)</span></label>
                                <input type="text"  value="<?php if (isset($data['prenom']) && !empty($data['prenom'])) {echo $data['prenom'];} else{echo '';} ?>" class="form-control  <?= isset($_SESSION['errors']['prenom']) ? 'is-invalid' : ''?> " name="prenom" id="prenom"
                                    >
                                    <?php
                                    if(isset($_SESSION['errors']['prenom'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['prenom']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="username">Nom d'utilisateur <span class="text-danger">(*)</span></label>
                                <input type="text"  value="<?php if (isset($data['username']) && !empty($data['username'])) {echo $data['username'];} else{echo '';} ?>" class="form-control  <?= isset($_SESSION['errors']['username']) ? 'is-invalid' : ''?>" name="username" id="username"
                                    >
                                    <?php
                                    if(isset($_SESSION['errors']['username'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['username']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email <span class="text-danger">(*)</span></label>
                                <input type="email" value="<?php if (isset($data['email']) && !empty($data['email'])) {echo $data['email'];} else{echo '';} ?>" class="form-control  <?= isset($_SESSION['errors']['email']) ? 'is-invalid' : ''?>" name="email"
                                    id="email">
                                    <?php
                                    if(isset($_SESSION['errors']['email'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['email']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="mot_de_passe"> <span class="text-danger">(*)</span> Mot de passe</label>
                                <input type="password"  class="form-control <?= isset($_SESSION['errors']['mot_de_passe']) ? 'is-invalid' : ''?>" name="mot_de_passe"
                                    id="mot_de_passe" >
                                    <?php
                                    if(isset($_SESSION['errors']['mot_de_passe'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['mot_de_passe']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>

                            <div class="col-sm-6">
                                <label for="repeter_mot_de_passe">Répéter le mot de passe <span class="text-danger">(*)</span> </label>
                                <input type="password" class="form-control <?= isset($_SESSION['errors']['repeter_mot_de_passe']) ? 'is-invalid' : ''?>" name="repeter_mot_de_passe"
                                    id="repeter_mot_de_passe" >
                                    <?php
                                    if(isset($_SESSION['errors']['repeter_mot_de_passe'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['repeter_mot_de_passe']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                            
                        </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Accepter les conditions et les politiques d'utilisations
                                            </label>
                                    </div>
                                </div>
                        

                        <div class="form-group row">
                            <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                <input type="submit" value="Enregistrer" class="mb-1 mb-md-0  btn btn-primary">
                                <input type="reset"  class=" btn btn-danger ">
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="/soutenance/directeur_etudes/mot_de_passe_oublie/">Mot de passe oublié?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/soutenance/directeur_etudes/connexion/">Avez vous déja un compte? Connectez-vous!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php
    unset($_SESSION['errors']);
    include('./app/Commun/dashbord_footer.php');
?>