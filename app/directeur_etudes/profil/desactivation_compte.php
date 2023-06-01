

include('./app/commun/fonction.php');
$errors=[];
$erreurs=[];
$data=[];

if(isset($_SESSION['users']['id_utilisateur']) and !empty($_SESSION['users']['id_utilisateur'])){
    die();
    $id= $_SESSION['users']['id_utilisateur'];
}




if(isset($_POST["desactiver_compte"])){
         
    if (isset($_POST["mdp"]) && !empty($_POST["mdp"]) && strlen(($_POST["mdp"])) < 8) {
        $errors["mdp"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
    }

    if(verifier_info($_POST["mdp"]) && strlen(($_POST["mdp"])) >= 8){
        $data['mdp']= $_POST['mot_de_passe'];
        
    }

    if(empty($errors)){
        if(check_password_exist($data['mdp'],$id)){
            if(desactiver_utilisateur($id)){
            session_destroy();
            header("Location:".CHEMIN_PROJET."directeur_etudes/connexion/index");
            }
        }
    }
    }