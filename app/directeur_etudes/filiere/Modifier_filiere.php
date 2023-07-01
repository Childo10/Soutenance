<?php 
$data="";
if(!isset($_SESSION['users_DE']) && empty($_SESSION['users_DE'])){
    header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
  }
  
    $title='Modifier une filière';
    include('./app/Commun/dashbord_siedbar_DE.php');
    if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
        $codefil=$params['3'];
        $_SESSION['codefil']=$codefil;
        //die(var_dump($_SESSION['codefil']));
        $libfil=recup_filiere_par_codefil($codefil);
        //die(var_dump($libfil['libfil']));
    }

    if(isset($_SESSION['data']) && !empty($_SESSION['data'])){
        $data=$_SESSION['data'];
    }

   
?>




<?php
if (!empty($_SESSION['message_erreur_global']) or !empty($_SESSION['message_erreur_global'])) {
?>
    <div class="alert-message">
        <?=$_SESSION['message_erreur_global']?>
    </div>
    <style>
        .alert-message {
            position: fixed;
            top: 30px;
            left: 60%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: red;
            color: white;
            font-size: 16px;
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

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Modifier une filière</h1>
                    </div>
                    <form class="user" action="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/modifier_filiere_traitement" method="post">
                        <div class="form-group row">
                            <div class="col-md-12 mt-1">
                                <input type="text"  name="libfil" class="form-control "
                                    id="libfil" value="<?= isset($libfil['libfil']) ? $libfil['libfil'] : $data ?>">    
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                            <input type="submit" value="Modifier" class="mb-1 mb-md-0  btn btn-primary">
                            </input>

                                <input type="reset"  class=" btn btn-danger ">
                                    
                                </input>
                            </div>
                        </div>
                        
                        
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/filiere/liste_filiere">Liste des filières</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php 
unset($_SESSION['message_erreur_global']);
    include('./app/Commun/dashbord_footer.php');
?>