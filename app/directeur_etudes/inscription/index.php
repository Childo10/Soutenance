<?php
    session_start();
    $title="Inscription - Directeur des études";
    include('./app/Commun/header.php');
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
                                <input type="text" class="form-control <?= isset($_SESSION['errors']['nom']) ? 'is-invalid' : ''?>" name="nom" id="nom"
                                    placeholder="Nom">
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
                                <input type="text" class="form-control  <?= isset($_SESSION['errors']['prenom']) ? 'is-invalid' : ''?> " name="prenom" id="prenom"
                                    placeholder="Prénom">
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
                                <input type="text" class="form-control  <?= isset($_SESSION['errors']['username']) ? 'is-invalid' : ''?>" name="username" id="username"
                                    placeholder="Nom d'utilisateur ">
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
                                <input type="text" class="form-control  <?= isset($_SESSION['errors']['sexe']) ? 'is-invalid' : ''?> " name="sexe" id="sexe"
                                    placeholder="Sexe">
                                    <?php
                                    if(isset($_SESSION['errors']['sexe'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['sexe']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="date" class="form-control  <?= isset($_SESSION['errors']['date']) ? 'is-invalid' : ''?>"
                                    id="date" name="date" placeholder="date">
                                    <?php
                                    if(isset($_SESSION['errors']['date'])){ 
                                    ?>
                                    <div class="invalid-feedback">
                                        <?=$_SESSION['errors']['date']?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control  <?= isset($_SESSION['errors']['email']) ? 'is-invalid' : ''?>" name="email"
                                    id="email" placeholder="Email">
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
                            <div class="col-sm-6 text-center offset-md-3">
                                <input type="password" class="form-control <?= isset($_SESSION['errors']['mot_de_passe']) ? 'is-invalid' : ''?>" name="mot_de_passe"
                                    id="mot_de_passe" placeholder="Mot de passe">
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
    include('./app/Commun/dashbord_footer.php');
?>