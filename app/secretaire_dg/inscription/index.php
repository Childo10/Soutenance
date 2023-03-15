<?php
    $title="Inscription - Secretaire du DG";
    include('./app/Commun/header.php');;
?>
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
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control " name="nom" id="nom"
                                    placeholder="Nom">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control " name="prenom" id="prenom"
                                    placeholder="Prénom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control" name="username" id="exampleFirstName"
                                    placeholder="Nom d'utilisateur">
                            </div>
                            <div class="col-sm-6">
                                <input type="Email" class="form-control " name="email" id="exampleLastName"
                                    placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control"
                                    id="exampleInputPassword" name="mdp" placeholder="Mot de passe">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control"
                                    id="exampleRepeatPassword" placeholder="Repéter le mot de passe">
                            </div>
                        </div>
                        
                                <div class="form-group row">
                                    <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                        <input type="submit" value="Connexion" class="mb-1 mb-md-0  btn btn-primary">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                </div>
                        <hr>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="/soutenance/secretaire_dg/mot_de_passe_oublie/">Mot de passe oublié?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/soutenance/secretaire_dg/connexion/">Avez vous déja un compte? Connectez-vous!</a>
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