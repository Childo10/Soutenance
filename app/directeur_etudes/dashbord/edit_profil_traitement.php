<?php
session_start();
include('./app/commun/fonction.php');
$errors=[];
$data=[];
if(isset($_SESSION['users']['0']['id_utilisateur']) and !empty($_SESSION['users']['0']['id_utilisateur'])){
    $id= $_SESSION['users']['0']['id_utilisateur'];
    
     

	if(isset($_POST['button'])){

        if(verifier_info($_POST['nom'])){
         $data['nom']= htmlentities($_POST['nom']);
         
        }else{
            $errors['nom']='Nom incorrect ou vide, veuillez réssayez';
        }

        if(verifier_info($_POST['prenom'])){
            $data['prenom']= htmlentities($_POST['prenom']);
            
        }else{
            $errors['prenom']='Prénom incorrect ou vide, veuillez réssayez';
        }

        if(verifier_info($_POST['email']) AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $data['email']= htmlentities($_POST['email']);
            
        }else{
            $errors['email']='Email incorrect ou vide, veuillez réssayez';
        }

        if(verifier_info($_POST['nom_utilisateur'])){
            $data['nom_utilisateur']= htmlentities($_POST['nom_utilisateur']);
            
        }else{
            $errors['nom_utilisateur']="Nom d'utilisateur incorrect ou vide, veuillez réssayez";
        }

        if(empty($errors)){
            /*$bdd=database_login();
            $requete= "UPDATE utilisateur SET nom= :nom, prenom=:prenom, email= :email, nom_utilisateur=:nom_utilisateur WHERE id_utilisateur= :id";
            $requete_prepare= $bdd->prepare($requete);
            $requete_execute= $requete_prepare->execute(array(
                'id'=>$id,
                'nom'=>$data['nom'],
                'prenom'=>$data['prenom'],
                'nom_utilisateur'=>$data['nom_utilisateur'],
                'email'=>$data['email'],
            ));*/
            if(update_profil_in_db($id, $data['nom'], $data['prenom'], $data['email'], $data['nom_utilisateur'])){


                $_SESSION['users']=recup_udpate_profil($id);
                
                $_SESSION['success']="Modification réussie";
                header('location:/soutenance/directeur_etudes/dashbord/profil');
            }
      
        }
        else{
            $_SESSION['errors']= $errors;
            header('location:/soutenance/directeur_etudes/dashbord/edit_profil');
        }
		
	   

}
}
