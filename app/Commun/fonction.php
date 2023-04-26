<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function verifier_info($info){
    return(isset($info) AND !empty($info));
}

function database_login(){
    $bdd= "";
    try {
        $bdd= new PDO('mysql:host=localhost; dbname=gestion_emploi; charset=utf8','root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } 
    catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
    }
    return $bdd;
}


function check_username_exist($username){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE nom_utilisateur=?');
    $req->execute([$username]);
    $users= $req->fetch();
    return $users;
    

}

function check_password_exist($password, int $id){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE mot_de_passe=:mot_de_passe AND id_utilisateur=:id');
    $req->execute(array(
        'mot_de_passe'=>sha1($password),
        'id'=>$id
    ));
    $users= $req->fetch();
    return $users;
    

}

function check_email_exist($email){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE email=?');
    $req->execute([$email]);
    $users= $req->fetch();
    return $users;
    

}

function update_profil_in_db( int $id,  string $nom,  string $prenom,  string $email, string $username){
    $modifier_profil="false";
    $bdd=database_login();
    $requete= "UPDATE utilisateur SET nom= :nom, prenom=:prenom, email= :email, nom_utilisateur=:nom_utilisateur WHERE id_utilisateur= :id";
    $requete_prepare= $bdd->prepare($requete);
    $requete_execute= $requete_prepare->execute(array(
        'id'=>$id,
        'nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email,
        'nom_utilisateur'=>$username
    ));

    if($requete_execute){
        $modifier_profil= true;
    }

    return $modifier_profil;
}

function recup_udpate_profil($id){
    $data=[];
    $bdd=database_login();
    $req_recup=$bdd->prepare('SELECT id_utilisateur,nom,prenom,nom_utilisateur,profil,email FROM utilisateur WHERE id_utilisateur= :id');
    $resultat=$req_recup->execute(array(
       'id'=> $id,
    ));

    if($resultat){
        $data=$req_recup->fetchAll(PDO::FETCH_ASSOC);
    }
    return $data;
}

function check_user_exist_in_db($email, $mot_de_passe){
    $data_users=[];
    $bdd=database_login();
    $req_recup=$bdd->prepare('SELECT id_utilisateur,nom,prenom,nom_utilisateur,profil,email FROM utilisateur WHERE email= :email AND mot_de_passe= :mot_de_passe');
    $resultat=$req_recup->execute(array(
       'email'=> $email,
       'mot_de_passe'=> sha1($mot_de_passe)   
    ));
   
    //Si la requete est exécuté, je récupère les données dans le tableau data_users
    if($resultat){
       $data_users=$req_recup->fetchAll(PDO::FETCH_ASSOC);
}  
return $data_users;
}

function est_connecter(){
    return isset($_SESSION['users']) and !empty($_SESSION['users']);
    
}


//Je me prépare ma requete.




/**
 * .3++++++
 * 
     * Send mail.
     *
     * @param string $destination The destination.
     * @param string $subject The subject.
     * @param string $body The body.
     * @return bool The result.
     */
    function email(string $destination, string $subject, string $body): bool
    {
        // passing true in constructor enables exceptions in PHPMailer
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";

        try {

            // Server settings
            // for detailed debug output
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->SMTPDebug =0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = 'childohouedanou1998@gmail.com';
            $mail->Password = 'ylbdsjngxhbzfetz';

            // Sender and recipient settings
            $mail->setFrom('childohouedanou1998@gmail.com', htmlspecialchars_decode('Education APP'));
            $mail->addAddress($destination, 'UTILISATEUR');
            $mail->addReplyTo('childohouedanou1998@gmail.com', htmlspecialchars_decode('Education APP'));

            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = htmlspecialchars_decode($subject);
            $mail->Body = $body;

            return $mail->send();

        } catch (Exception $e) {

            return false;

        }

    }

        //Fonction buffer pour récupérer du html

function buffer_html_file($filename) {
    ob_start(); //démarre la temporisation de sortie

    include $filename; //Inclut des fichier html dans le tampon

    $html= ob_get_contents(); // Récupère le contenu du tampon
    ob_end_clean(); // Arrête et vide la tamporisation de sortie

    return $html; // Retourne le contenu du fichier html
}





function search_user_id($user_id)
{

    $user_id = [];

    $db = database_login();

    $request = "SELECT user_id FROM token WHERE id=:id";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute([
        'user_id' => $user_id
    ]);

    if ($request_execution) {

        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);

        if (isset($data) && !empty($data) && is_array($data)) {

            $user_id = $data;
        }
    }
    return $user_id;
}

// Exemple de fonction pour exécuter la requête UPDATE TOKEN

function maj(int $id_utilisateur): bool
{

    $maj = false;

    $date=date("Y-m-d H:i:s");

    $db = database_login();

    $request = "UPDATE token SET est_actif = :est_actif, est_supprimer = :est_supprimer, maj_le = :maj_le WHERE user_id= :id_utilisateur";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'id_utilisateur' => $id_utilisateur,
            'est_actif' => 0,
            'est_supprimer' => 1,
            'maj_le' => $date
        ]
    );

    if ($request_execution) {

        $maj = true;
    }

    return $maj;
}

function insertion_token(int $user_id, string $type, string $token ): bool
{

    $insertion_token = false;

    $db=database_login();

    $request = "INSERT INTO token (user_id, type, token) VALUES (:user_id, :type, :token)";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'user_id' => $user_id,
            'type' => $type,
            'token' => $token
        ]
    );

    if ($request_execution) {

        $insertion_token = true;
    }

    return $insertion_token;
}

// Récupérer le token
function recuperer_token(string $user_id){
    $token =[];

    $db=database_login();

    $request = "SELECT token FROM token WHERE user_id=:user_id";

    $request_prepare =$db->prepare($request);

    $request_execution = $request_prepare->execute([
        'user_id' => $user_id
    ]);

    if ($request_execution){

        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);

        if(isset($data) && !empty($data) && is_array($data)) {
            $token = $data;
        }
    }
    return $token;
}

//Recupérer id de l'utilisateur

function select_user_id(string $email){
    $user_id =[];

    $db=database_login();

    $request = "SELECT id_utilisateur FROM utilisateur WHERE email=:email";

    $request_prepare =$db->prepare($request);

    $request_execution = $request_prepare->execute([
        'email' => $email
    ]);

    if ($request_execution){

        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);

        if(isset($data) && !empty($data) && is_array($data)){
            $user_id = $data;
        }
    }
    return $user_id;
}

// Exemple de fonction pour exécuter la requête UPDATE UTILISATEUR

function maj1(int $id_utilisateur): bool
{

    $maj1 = false;

    $date=date("Y-m-d H:i:s");

    $db = database_login();

    $request = "UPDATE utilisateur SET est_actif = :est_actif, mis_a_jour_le = :mis_a_jour_le  WHERE id_utilisateur= :id_utilisateur";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'id_utilisateur' => $id_utilisateur,
            'est_actif' => 1,
            'mis_a_jour_le' => $date
        ]
    );

    if ($request_execution) {

        $maj1 = true;
    }

    return $maj1;
}



/**
 * Cette fonction permet de verifier si le id_utilisateur existe dans la base de donnée .
 * @param string $nom_utilisateur Le nom d'utilisateur a vérifié.
 *
 * @return bool $check
 */
function check_id_utilisateur_exist_in_db(int $user_id, string $type, string $token, int $est_actif, int $est_supprimer): bool
{

    $check = false;

    $db = database_login();

    $requette = "SELECT * FROM token WHERE user_id = :user_id and type = :type and token= :token and est_actif= :est_actif and est_supprimer= :est_supprimer";

    $verifier_id_utilisateur = $db->prepare($requette);

    $resultat = $verifier_id_utilisateur->execute([
        'user_id' => $user_id,
        'type' => $type,
        'token' => $token,
        'est_actif' => $est_actif,
        'est_supprimer' => $est_supprimer,
    ]);

    if ($resultat) {

       // $data = $verifier_id_utilisateur->fetchAll(PDO::FETCH_ASSOC);

       // if (isset($data) && !empty($data) && is_array($data)) {

            $check = true;
       // }
    }

    return $check;
}
