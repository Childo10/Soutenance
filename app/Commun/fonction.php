<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * .3++++++
 * 
 *verifier_info


 *Elle permet de vérifier si une donnée existe et est non vide
 * @param string $info donnée de l'utilisateur.
 * @return bool le resultat.
     
 */

function verifier_info(string $info)
{
    return (isset($info) and !empty($info));
}


/**
 * .3++++++
 * 
 *database_login


 *Elle permet de se connecter à la base de données
 *Elle ne prend aucun paramètre
 *Elle retourne un booléen.
 */
function database_login()
{
    $bdd = "";
    try {
        $bdd = new PDO('mysql:host=' . DATABASE_HOST . ';dbname=' . DATABASE_NAME . ';charset=utf8', DATABASE_USERNAME, DATABASE_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}

/**
 * .3++++++
 * 
 *check_username_exist


 *Elle permet de vérifier si un nom d'utilisateur existe dans la base de données
 * @param string $username nom de l'utilisateur.
 * @return bool le resultat.
     
 */
function check_username_exist(string $username)
{
    $users = "false";
    $bdd = database_login();
    $req = $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE nom_utilisateur=?');
    $req->execute([$username]);
    $users = $req->fetch();
    return $users;
}

/**
 * .3++++++
 * 
 *verifier_filiere_existe


 *Elle permet de vérifier si une filière existe dans la base de données
 * @param string $libfil libellé de la filière.
 * @return bool filière.
     
 */
function verifier_filiere_existe(string $libfil)
{
    $users="";
    $filiere = false;
    $bdd = database_login();
    $req = $bdd->prepare('SELECT Codefil from filiere WHERE Libfil=?');
    $req_exec=$req->execute([$libfil]);
    if($req_exec){
       
        $users = $req->fetch();
        if(!empty($users) && is_array($users)){
            $filiere=true;
        }
    }
    return $filiere;
    }


    /**
 * .3++++++
 * 
 *listerfiliere


 *Elle permet de récupérer les données relative à une  filière  dans la base de données
 * @return array filière.
  */
     
    function listerfiliere(){
        $filiere=[];
        $bdd=database_login();
        $requselect= $bdd->query('SELECT Codefil,libfil,est_actif,est_supprimer FROM filiere where est_actif=1 and est_supprimer=0 ORDER BY Codefil DESC');
        $filiere= $requselect->fetchAll(PDO::FETCH_ASSOC);
       
        return $filiere;
    }

       /**
 * .3++++++
 * 
 *recup_filiere_par_codefil


 *Elle permet de récupérer le libellé d'une  filière par son code  dans la base de données
 * @return array filière.
  */
     
  function recup_filiere_par_codefil(int $codefil){
    $filiere="";
    $libfil="";
    $bdd=database_login();
    $req_prepare= $bdd->prepare('SELECT libfil FROM filiere where Codefil=?');
    $req_exec=$req_prepare->execute([$codefil]);
    if($req_exec){
        $filiere=$req_prepare->fetch();
        //if(!empty($filiere) && is_array($filiere)){
            //$libfil=implode($filiere);
        //}
    }

    
   
    return $filiere;
}




/**
 * .3++++++
 * 
 *check_password_exist


 *Elle permet de vérifier si un mot de passe existe dans la base de données
 * @param string $password mot de passe de l'utilisateur.
 * @param id $id Id de l'utilisateur.
 * @return bool le resultat.
 * 
 */
function check_password_exist(string $password, int $id)
{
    $users = "false";
    $bdd = database_login();
    $req = $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE mot_de_passe=:mot_de_passe AND id_utilisateur=:id');
    $req->execute(array(
        'mot_de_passe' => sha1($password),
        'id' => $id
    ));
    $users = $req->fetch();
    if ($users) {
        $users = true;
    }
    return $users;
}

/**
 * .3++++++
 * 
 *check_email_exist


 *Elle permet de vérifier si un email existe dans la base de données
 * @param string $email Email de l'utilisateur.
 * @return bool le resultat.
 */
function check_email_exist(string $email)
{
    $users = "false";
    $bdd = database_login();
    $req = $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE email=?');
    $req->execute([$email]);
    if($req){
        $users = $req->fetch();
    }

    if(is_array($users) && !empty($users)){
        $users=true;
    }
    return $users;
}

function check_email_exist_by_profil(string $email, string $profil)
{
    $users = "false";
    $bdd = database_login();
    $req = $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE email=:email and profil=:profil');
    $req->execute([
        'email'=>$email,
        'profil'=>$profil
        ]);

    if($req){
        $users = $req->fetch();
    }

    if(is_array($users) && !empty($users)){
        $users=true;
    }
    return $users;
}


/**
 * .3++++++
 * 
 *update_avatar


 *Elle permet de mettre à jour l'avatar de l'utilisateur
 * @param id $id id de l'utilisateur.
 * @param avatar $avatar avatar de l'utilisateur.
 * @return bool update_avatar
 */
function update_avatar(int $id, string $avatar ){
    $update_avatar=false;
    $bdd=database_login();

    $req=$bdd->prepare('UPDATE utilisateur set avatar=:avatar where id_utilisateur=:id ');
    $req_exec=$req->execute(array(
        'id'=>$id,
        'avatar'=>$avatar
    ));

    if($req_exec){
        $update_avatar=true;
    }
    return $update_avatar;


}





/**
 * .3++++++
 * 
 *update_profil_in_db


 *Elle permet de modifier les informations de l'utilisateur dans la base de données
 * @param int $id Id de l'utilisateur.
 * @param string $nom Nom de l'utilisateur.
 * @param string $prenom Prenom de l'utilisateur.
 * @param string $email Email de l'utilisateur.
 * @param string $username Nom utilisateur
 * @param string $adresse adresse
 * @param string $date_naissance  date de naissance 
 * @param string $sexe sexe
 * @param int $telephone telephone
 * @return bool $update_profil.
 */
function mettre_a_jour_donnees_utilisateur(int $id,  string $nom,  string $prenom, string $username, string $adresse, $date_naissance, $sexe, int $telephone)
{
    $update_profil = "false";

    $date = date("Y-m-d H:i:s");

    $bdd = database_login();
    $requete = "UPDATE utilisateur SET nom= :nom, prenom=:prenom, nom_utilisateur=:nom_utilisateur, adresse =:adresse,
     date_naissance =:date_naissance, sexe =:sexe, telephone =:telephone  
     , mis_a_jour_le=:mis_a_jour_le WHERE id_utilisateur= :id";

    $requete_prepare = $bdd->prepare($requete);
    $requete_execute = $requete_prepare->execute(array(
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'nom_utilisateur' => $username,
        'adresse' => $adresse,
        'date_naissance' => $date_naissance,
        'sexe' => $sexe,
        'telephone' => $telephone,
        'mis_a_jour_le' => $date
    ));

    if ($requete_execute) {
        $update_profil = true;
    }

    return $update_profil;
}


/**
 * .3++++++
 * 
 *desactiver_utilisateur


 *Elle permet de  desactiver l'utilisateur.
 * @param int $id Id de l'utilisateur.
 * @return bool le resultat.
 */
function desactiver_utilisateur(int $id)
{
    $desactiver_utilisateur = "false";

    $date = date("Y-m-d H:i:s");

    $bdd = database_login();
    $requete = "UPDATE utilisateur SET est_actif= :est_actif, mis_a_jour_le=:mis_a_jour_le  WHERE id_utilisateur= :id";
    $requete_prepare = $bdd->prepare($requete);
    $requete_execute = $requete_prepare->execute(array(
        'id' => $id,
        'est_actif' => 0,
        'mis_a_jour_le' => $date
    ));

    if ($requete_execute) {
        $desactiver_utilisateur = true;
    }

    return  $desactiver_utilisateur;
}


/**
 * .3++++++
 * 
 *desactiver_utilisateur


 *Elle permet de  desactiver l'utilisateur.
 * @param int $id Id de l'utilisateur.
 * @return bool le resultat.
 */
function supprimer_utilisateur(int $id)
{
    $supprimer_utilisateur = "false";

    $date = date("Y-m-d H:i:s");

    $bdd = database_login();
    $requete = "UPDATE utilisateur SET est_supprimer= :est_supprimer, mis_a_jour_le=:mis_a_jour_le  WHERE id_utilisateur= :id";
    $requete_prepare = $bdd->prepare($requete);
    $requete_execute = $requete_prepare->execute(array(
        'id' => $id,
        'est_supprimer' => 1,
        'mis_a_jour_le' => $date
    ));

    if ($requete_execute) {
        $supprimer_utilisateur = true;
    }

    return $supprimer_utilisateur;
}

/**
 * .3++++++
 * 
 *update_password_in_db


 *Elle permet de modifier le mot de passe de l'utilisateur dans la base de données
 * @param int $id    id de l'utilisateur.
 * @param string $password mot de passe.
 * @return bool le resultat.
     
 */
function update_password(int $id,  string $password)
{
    $update_password = "false";


    $bdd = database_login();
    $requete = "UPDATE utilisateur SET mot_de_passe=:mot_de_passe WHERE id_utilisateur= :id";
    $requete_prepare = $bdd->prepare($requete);
    $requete_execute = $requete_prepare->execute(array(
        'mot_de_passe' => sha1($password),
        'id' => $id
    ));

    if ($requete_execute) {
        $update_password = true;
    }

    return  $update_password;
}



/**
 * .3++++++
 * 
 *recuperer_donnees_utilisateur

 *Elle permet de récupérer les données de l'utilisateur dans la base de données
 * @param string $email Email de l'utilisateur.
 * @param string $mot_de_passe Mot de passe de l'utilisateur.
 * @param string  $profil Profil de l'utilisateur.
 * @param int $est_actif  Champ est_actif de l'utilisateur.
 * @param int $est_supprimer Champ est_supprimer de l'utilisateur.
 * @return array $data les données de l'utilisateur.
 */

function recuperer_donnees_utilisateur(string $email, string $mot_de_passe, string $profil, int $est_actif,int $est_supprimer)
{

    $data = [];

    $db = database_login();

    $requette = "SELECT id_utilisateur, nom, prenom, sexe, email, nom_utilisateur, avatar, profil, telephone, adresse, date_naissance FROM utilisateur WHERE email = :email and mot_de_passe = :mot_de_passe and profil = :profil and est_actif = :est_actif and est_supprimer = :est_supprimer ";

    $verifier_nom_utilisateur = $db->prepare($requette);

    $resultat = $verifier_nom_utilisateur->execute([
        'email' => $email,
        'mot_de_passe' => sha1($mot_de_passe),
        'profil' => $profil,
        'est_actif' => $est_actif,
        'est_supprimer' => $est_supprimer,
    ]);

    if ($resultat) {
        $data = $verifier_nom_utilisateur->fetch();
    }
    return $data;
}

function est_connecter()
{
    return isset($_SESSION['users']) and !empty($_SESSION['users']);
}

/**
 * .3++++++
 * 
 *recuperer_donnees_utilisateur


 *Elle permet d'enregistrer les données de l'utilisateur dans la base de données
 * @param string $nom Nom de l'utilisateur.
 * @param string $prenom Prenom de l'utilisateur.
 * @param string  $nom_utilisateur Nom_utilisateur de l'utilisateur.
 * @param string $email Email de l'utilisateur.
 * @param string $mot_de_passe Mot de passe de l'utilisateur.
 * @param string $profil Profil de l'utilisateur.
 * @return bool $inscription
 */
function inscrire_utilisateur(string $nom, string $prenom, string $nom_utilisateur, string $email, string $mot_de_passe, string $profil)
{
    $inscription = false;

    $db = database_login();

    if (!is_null($db)) {

        // Ecriture de la requête
        $requette = 'INSERT INTO utilisateur (nom, prenom, nom_utilisateur,email,mot_de_passe,profil) VALUES (:nom, :prenom, :nom_utilisateur,  :email, :mot_de_passe, :profil)';

        // Préparation
        $inserer_utilisateur = $db->prepare($requette);

        // Exécution ! La requête est maintenant en base de données
        $resultat = $inserer_utilisateur->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'nom_utilisateur' => $nom_utilisateur,
            'email' => $email,
            'mot_de_passe' => sha1($mot_de_passe),
            'profil' => $profil

        ]);

        if ($resultat) {
            $inscription = true;
        }

        return $inscription;
    }
}


/**
 * .3++++++
 * 
 *enregistrer_filiere


 *Elle permet d'enregistrer une filière la base de données
 * @param string $data Nom de la filière.
 * @return bool $enregistrer
 */
function enregistrer_filiere(string $data){
    $enregistrer=false;
    $date=date("Y-m-d H:i:s");
    $bdd=database_login();
    $req_prepare=$bdd->prepare('INSERT INTO filiere (libfil, creer_le) values(:libfil, :creer_le)');
    $req_exec=$req_prepare->execute(array(
        'libfil'=>$data,
        'creer_le'=>$date

    ));

    if($req_exec){
        $enregistrer=true;
    }

    return $enregistrer;
}

/**
 * .3++++++
 * 
 *modifier_filiere


 *Elle permet de modifier une filière la base de données.
 * @param int $codefil code de la filière.
 * @param string $libfil nom de la filière.
 * @return bool $modifier
 */
function modifier_filiere(int $codefil, string $libfil){
    $modifier=false;
    $date=date("Y-m-d H:i:s");
    $bdd=database_login();
    $req_prepare=$bdd->prepare('UPDATE filiere set libfil=:libfil, mise_a_jour_le=:mise_a_jour_le Where Codefil=:codefil');
    $req_exec=$req_prepare->execute(array(
        'libfil'=>$libfil,
        'mise_a_jour_le'=>$date,
        'codefil'=>$codefil

    ));

    if($req_exec){
        $modifier=true;
    }
    return $modifier;
}


/**
 * .3++++++
 * 
 *supprimer_filiere


 *Elle permet de faire une suppression logique de la filière dans la base de données selon le code de la filière.
 * @param int $codefil code de la filière.
 * @return bool $supprimer
 */
function suppression_logique_filiere(int $codefil){
    $suppression=false;
    $date=date("Y-m-d H:i:s");
    $bdd=database_login();
    $req_prepare=$bdd->prepare("UPDATE filiere SET est_supprimer = 1, est_actif = 0 mise_a_jour_le=:mise_a_jour_le WHERE  Codefil = :codefil");
    $req_exec=$req_prepare->execute(array(
        'codefil'=>$codefil,
        'mise_a_jour_le'=>$date

    ));

    if( $req_exec){
        $supprimer=true;
    }
    return $suppression;
}






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
function send_email(string $destination, string $subject, string $body): bool
{
    // passing true in constructor enables exceptions in PHPMailer
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    try {

        // Server settings
        // for detailed debug output
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->Username = EMAIL_ADDRESS;
        $mail->Password = EMAIL_PASSWORD;

        // Sender and recipient settings
        $mail->setFrom(EMAIL_ADDRESS, htmlspecialchars_decode('Education APP'));
        $mail->addAddress($destination, 'UTILISATEUR');
        $mail->addReplyTo(EMAIL_ADDRESS, htmlspecialchars_decode('Education APP'));

        // Setting the email content
        $mail->IsHTML(true);
        $mail->Subject = htmlspecialchars_decode($subject);
        $mail->Body = $body;

        return $mail->send();
    } catch (Exception $e) {

        return false;
    }
}

/**
 * .3++++++
 * 
 *buffer_html_file

 *Elle permet d'inclure du HTML dans le tampon
 * @param string $filename 
 * @return html le resultat.
 */


function buffer_html_file($filename)
{
    ob_start(); //démarre la temporisation de sortie

    include $filename; //Inclut des fichier html dans le tampon

    $html = ob_get_contents(); // Récupère le contenu du tampon
    ob_end_clean(); // Arrête et vide la tamporisation de sortie

    return $html; // Retourne le contenu du fichier html
}



/**
 * Cette fonction permet de récupérer l'id de l'utilisateur grace a son adresse mail.
 *
 * @param string $email L'email de l'utilisateur.
 * @return int $user_id L'id de l'utilisateur.
 */
function recuperer_id_utilisateur_par_son_mail(string $email): int
{

    $user_id = 0;

    $db = database_login();

    if (is_object($db)) {

        $request = "SELECT id_utilisateur FROM utilisateur WHERE email=:email";

        $request_prepare = $db->prepare($request);

        $request_execution = $request_prepare->execute([
            'email' => $email
        ]);

        if ($request_execution) {
            $data = $request_prepare->fetch(PDO::FETCH_ASSOC);
            if (isset($data) && !empty($data) && is_array($data)) {
                $user_id = $data["id_utilisateur"];
            }
        }
    }
    return $user_id;
}




/**
 * Cette fonction permet de récupérer l'id de l'utilisateur dans la table token selon son id .
 * @param int $id_utilisateur Id de utilisateur.
 * @return array $user_id
 */
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


/**
 * Cette fonction permet d'insérer le token de l'utilisateur dans la base de données.
 * @param int $user_id Id de utilisateur.
 * @param string $type  Type de utilisateur.
 * @param token $token Token de utilisateur.
 * @return bool  $insertion_token
 */
function insertion_token(int $user_id, string $type, string $token): bool
{

    $insertion_token = false;

    $db = database_login();

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

/**
 * Cette fonction permet de récupérer le token de l'utilisateur selon son id .
 * @param int $id Id de utilisateur.
 * @return array token
 */


function recuperer_token(string $user_id)
{
    $token = [];

    $db = database_login();

    $request = "SELECT token FROM token WHERE user_id=:user_id";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute([
        'user_id' => $user_id
    ]);

    if ($request_execution) {

        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);

        if (isset($data) && !empty($data) && is_array($data)) {
            $token = $data;
        }
    }
    return $token;
}


/**
 * Cette fonction permet de récupérer l'id de l'utilisateur selon son email .
 * @param string $email Email de utilisateur.
 * @return array user_id
 */


function select_user_id(string $email)
{
    $user_id = [];

    $db = database_login();

    $request = "SELECT id_utilisateur FROM utilisateur WHERE email=:email";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute([
        'email' => $email
    ]);

    if ($request_execution) {

        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);

        if (isset($data) && !empty($data) && is_array($data)) {
            $user_id = $data;
        }
    }
    return $user_id;
}

/**
 * Cette fonction permet de mettre à jour les champs est_actif, est_supprimer, mis_a_jour_le  si l'id_utilisateur existe dans la base de donnée .
 * @param int $id_utilisateur Id utilisateur a vérifié.
 * @return bool $maj1
 */


/**
 * Cette fonction permet de verifier si l'id_utilisateur existe dans la base de donnée .
 * @param int $user_id Id utilisateur a vérifié.
 * @param string $Type Le token d'utilisateur a vérifié.
 * @param string $token Le nom d'utilisateur a vérifié.
 * @param int $est_actif lechamp est_actif a vérifié.
 * @param int $nom_utilisateur Le nom d'utilisateur a vérifié.
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


/**
 * Cette fonction permet de mettre a jour les information de l'utilisateur a partir de son identifiant (id).
 *
 * @param int $id
 * @param string|null $nom
 * @param string|null $prenom
 * @param string|null $sexe
 * @param string|null $date_naissance
 * @param string|null $telephone
 * @param string|null $avatar
 * @param string|null $nom_utilisateur
 * @param string|null $adresse
 *
 * @return bool
 */
function mettre_a_jour_informations_utilisateur(int $id, string $nom = null, string $prenom = null, string $sexe = null, string $date_naissance = null, string $telephone = null, string $avatar = null, string $nom_utilisateur = null, string $adresse = null): bool
{
    $mettre_a_jour_informations_utilisateur = false;
    $data = ["id_utilisateur" => $id, "	mis_a_jour_le" => date("Y-m-d H:i:s")];
    $db = database_login();
    if (is_object($db)) {
        $request = "UPDATE utilisateur SET";
        if (!empty($nom)) {
            $request .= " nom = :nom,";
            $data["nom"] = $nom;
        }

        if (!empty($prenom)) {
            $request .= " prenom = :prenom,";
            $data["prenom"] = $prenom;
        }

        if (!empty($sexe)) {
            $request .= " sexe = :sexe,";
            $data["sexe"] = $sexe;
        }

        if (!empty($date_naissance)) {
            $request .= " date_naissance = :date_naissance,";
            $data["date_naissance"] = $date_naissance;
        }

        if (!empty($telephone)) {
            $request .= " telephone = :telephone,";
            $data["telephone"] = $telephone;
        }

        if (!empty($avatar)) {
            $request .= " avatar = :avatar,";
            $data["avatar"] = $avatar;
        }

        if (!empty($adresse)) {
            $request .= " adresse = :adresse,";
            $data["adresse"] = $adresse;
        }

        if (!empty($nom_utilisateur)) {
            $request .= " nom_utilisateur = :nom_utilisateur,";
            $data["nom_utilisateur"] = $nom_utilisateur;
        }

        $request .= "	mis_a_jour_le= :	mis_a_jour_le";

        $request .= " WHERE id_utilisateur= :id";

        //die(var_dump($request, $data));

        $request_prepare = $db->prepare($request);

        $request_execution = $request_prepare->execute($data);

        if ($request_execution) {
            $mettre_a_jour_informations_utilisateur = true;
        }
    }

    return $mettre_a_jour_informations_utilisateur;
}


//Fonction pour récupérer la mise à jour du profil

/**
 * Cette fonction permet de récupérer la mise à jour du profil .
 * @param int $id l'id de l'utilisateur.
 *
 * @return bool $recup
 */
function recup_mettre_a_jour_informations_utilisateur($id)
{

    $data=[];

    $db = database_login();

    $request_recupere = $db->prepare('SELECT  id_utilisateur, nom, prenom, sexe, date_naissance, email, telephone, nom_utilisateur, avatar, adresse, profil FROM utilisateur WHERE id_utilisateur= :id');

    $resultat = $request_recupere->execute(array(
        'id' => $id,
    ));

    if ($resultat) {
        $data = [];

        $data = $request_recupere->fetch(PDO::FETCH_ASSOC);

    }
    return $data;
}


/**
* .3++++++
* 
*delete_avatar


*Elle permet de mettre à jour l'avatar de l'utilisateur
* @param id $id id de l'utilisateur.
* @return bool update_avatar
*/
function delete_avatar(int $id){
    $delete_avatar=false;
    $bdd=database_login();
 
    $req=$bdd->prepare('UPDATE utilisateur set avatar=:avatar where id_utilisateur=:id ');
    $req_exec=$req->execute(array(
        'id'=>$id,
        'avatar'=>'null'
    ));
 
    if($req_exec){
        $delete_avatar=true;
    }
    return $delete_avatar;
 
 
 }



//Fonction pour récupérer l'avatar du profil

/**
 * Cette fonction permet de récupérer la photo du profil .
 * @param int $id l'id de l'utilisateur.
 *
 * @return array $data
 */
function recup_update_avatar($id)
{

    $data="";
    $data_avatar="";

    $db = database_login();

    $request = $db->prepare('SELECT  avatar FROM utilisateur WHERE id_utilisateur= :id');

    $resultat = $request->execute(array(
        'id' => $id,
    ));

    if ($resultat) {
        $data = $request->fetch(PDO::FETCH_ASSOC);
        //die(var_dump($data));
        $data_avatar=implode($data);

    }
    return $data_avatar;
}




/**
 * Cette fonction permet de verifier si le id_utilisateur existe dans la base de donnée .
 * @param string $nom_utilisateur Le nom d'utilisateur a vérifié.
 *
 * @return bool $check
 */
function check_token_exist(int $user_id, string $token, string $type, int $est_actif = 1, int $est_supprimer = 0): bool
{

    $check = false;

    $db = database_login();

    if (is_object($db)) {

        $requette = "SELECT * FROM token WHERE user_id = :user_id and token= :token and type= :type and est_actif= :est_actif and $est_supprimer= :est_supprimer";

        $verifier_id_utilisateur = $db->prepare($requette);

        $resultat = $verifier_id_utilisateur->execute([
            'user_id' => $user_id,
            'token' => $token,
            'type' => $type,
            'est_actif' => $est_actif,
            'est_supprimer' => $est_supprimer
        ]);

        if ($resultat) {

            $data = $verifier_id_utilisateur->fetchAll(PDO::FETCH_ASSOC);

            if (isset($data) && !empty($data) && is_array($data)) {

                $check = true;
            }
        }
    }
    return $check;
}


/**
 * Cette fonction permet de supprimer le token 
 * @param int $id L'id de l'utilisateur 
 *
 * @return bool $suppression_logique_token
 */
function suppression_logique_token(int $id_utilisateur): bool
{

    $suppression_logique_token = false;

    $date = date("Y-m-d H:i:s");

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

        $suppression_logique_token = true;
    }

    return $suppression_logique_token;
}


/**
 * Cette fonction permet d'activer le compte de l'utilisateur en passant le est_actif à 1
 * @param int $id L'id de l'utilisateur 
 *
 * @return bool $activation_compte_utilisateur
 */
function activation_compte_utilisateur(int $id_utilisateur): bool
{

    $activation_compte_utilisateur = false;

    $date = date("Y-m-d H:i:s");

    $db = database_login();

    $request = "UPDATE utilisateur SET est_actif = :est_actif, 	mis_a_jour_le = :mis_a_jour_le WHERE id_utilisateur= :id_utilisateur";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'id_utilisateur' => $id_utilisateur,
            'est_actif' => 1,
            'mis_a_jour_le' => $date
        ]
    );

    if ($request_execution) {

        $activation_compte_utilisateur = true;
    }

    return $activation_compte_utilisateur;
}
