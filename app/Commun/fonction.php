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

function verifier_info(string $info){
    return(isset($info) AND !empty($info));
}


/**
 * .3++++++
 * 
     *database_login


     *Elle permet de se connecter à la base de données
     *Elle ne prend aucun paramètre
     *Elle retourne un booléen.
*/
function database_login(){
    $bdd= "";
    try {
        $bdd= new PDO('mysql:host=' .DATABASE_HOST. ';dbname=' .DATABASE_NAME. ';charset=utf8', DATABASE_USERNAME, DATABASE_PASSWORD);
    } 
    catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
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
function check_username_exist(string $username){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE nom_utilisateur=?');
    $req->execute([$username]);
    $users= $req->fetch();
    return $users;
    

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
function check_password_exist(string $password, int $id){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE mot_de_passe=:mot_de_passe AND id_utilisateur=:id');
    $req->execute(array(
        'mot_de_passe'=>sha1($password),
        'id'=>$id
    ));
    $users= $req->fetch();
    if($users){
        $users=true;
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
function check_email_exist(string $email){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE email=?');
    $req->execute([$email]);
    $users= $req->fetch();
    return $users;
    

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
      * @return bool le resultat.
     *Elle prend en paramètre  l'id, le nom, le prenom, l'email et le nom de l'utilisateur
     *Elle retourne un booléen.
*/
function update_profil_in_db( int $id,  string $nom,  string $prenom, string $username){
    $update_profil="false";

    $date=date("Y-m-d H:i:s");

    $bdd=database_login();
    $requete= "UPDATE utilisateur SET nom= :nom, prenom=:prenom, nom_utilisateur=:nom_utilisateur, mis_a_jour_le=:mis_a_jour_le WHERE id_utilisateur= :id";
    $requete_prepare= $bdd->prepare($requete);
    $requete_execute= $requete_prepare->execute(array(
        'id'=>$id,
        'nom'=>$nom,
        'prenom'=>$prenom,
        'nom_utilisateur'=>$username,
        'mis_a_jour_le'=>$date
    ));

    if($requete_execute){
        $update_profil= true;
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
function desactiver_utilisateur( int $id){
    $desactiver_utilisateur="false";

    $date=date("Y-m-d H:i:s");

    $bdd=database_login();
    $requete= "UPDATE utilisateur SET est_actif= :est_actif, mis_a_jour_le=:mis_a_jour_le  WHERE id_utilisateur= :id";
    $requete_prepare= $bdd->prepare($requete);
    $requete_execute= $requete_prepare->execute(array(
        'id'=>$id,
        'est_actif'=>0,
        'mis_a_jour_le'=>$date
    ));

    if($requete_execute){
        $desactiver_utilisateur= true;
    }

    return  $desactiver_utilisateur;
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
function update_password_in_db( int $id,  string $password){
    $update_password="false";


    $bdd=database_login();
    $requete= "UPDATE utilisateur SET mot_de_passe=:mot_de_passe WHERE id_utilisateur= :id";
    $requete_prepare= $bdd->prepare($requete);
    $requete_execute= $requete_prepare->execute(array(
        'mot_de_passe'=>sha1($password),
        'id'=>$id
    ));

    if($requete_execute){
        $update_password= true;
        
    }

    return  $update_password;
}

/**
 * .3++++++
 * 
     *recup_udpate_profil

     *Elle permet de récupérer les données mise à jour de l'utilisateur dans la base de données
     * @param int $id Id de l'utilisateur.
     * @return bool le resultat.
 */


function recup_update_profil($id){
    $data=[];
    $bdd=database_login();
    $req_recup=$bdd->prepare('SELECT id_utilisateur,nom,prenom,nom_utilisateur,profil,email FROM utilisateur WHERE id_utilisateur= :id');
    $resultat=$req_recup->execute(array(
       'id'=> $id,
    ));

    if($resultat){
        $data=$req_recup->fetch();
    }
    return $data;
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
     * @return array les données de l'utilisateur.
 */
function recuperer_donnees_utilisateur($email, $mot_de_passe, $profil, int $est_actif, int $est_supprimer){
    $data_users=[];
    $bdd=database_login();
    $req_recup=$bdd->prepare('SELECT id_utilisateur,nom,prenom,nom_utilisateur,profil,email FROM utilisateur WHERE email= :email AND mot_de_passe= :mot_de_passe AND profil= :profil AND est_actif= :est_actif AND est_supprimer= :est_supprimer');
    $resultat=$req_recup->execute(array(
       'email'=> $email,
       'mot_de_passe'=> sha1($mot_de_passe),
       'profil'=>$profil,
       'est_actif'=>$est_actif,
       'est_supprimer'=>$est_supprimer

    ));
   
    //Si la requete est exécuté, je récupère les données dans le tableau data_users
    if($resultat){
       $data_users=$req_recup->fetch();
}  
return $data_users;
}

function est_connecter(){
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
     * @return bool les données de l'utilisateur.
 */
function inscrire_utilisateur($nom, $prenom, $nom_utilisateur,$email,$mot_de_passe,$profil) {

    $inscription=false;

    $bdd=database_login();

    //Récupération des informations saisies par l'utilisateur dans la base de données
$req=$bdd->prepare('INSERT INTO utilisateur(nom, prenom, nom_utilisateur,email,mot_de_passe,profil)
VALUES (:nom, :prenom, :nom_utilisateur,  :email, :mot_de_passe, :profil)');
$req->execute(array(
   'nom'=>$nom,
   'prenom'=>$prenom,
   'nom_utilisateur'=>$nom_utilisateur,
   'email'=>$email,
   'mot_de_passe'=>$mot_de_passe,
   'profil'=>$profil
  
));

if($req){
    $inscription=true;
}

return $inscription;

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
            $mail->SMTPDebug =0;
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

     *Elle permet de récupérer les données mise à jour de l'utilisateur dans la base de données
     * @param string $filename 
     * @return html le resultat.
 */


function buffer_html_file($filename) {
    ob_start(); //démarre la temporisation de sortie

    include $filename; //Inclut des fichier html dans le tampon

    $html= ob_get_contents(); // Récupère le contenu du tampon
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

		$request = "SELECT id FROM utilisateur WHERE email=:email";

		$request_prepare = $db->prepare($request);

		$request_execution = $request_prepare->execute([
			'email' => $email
		]);

		if ($request_execution) {
			$data = $request_prepare->fetch(PDO::FETCH_ASSOC);
			if (isset($data) && !empty($data) && is_array($data)) {
				$user_id = $data["id"];
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
 * Cette fonction permet de mettre à jour la table token de l'utilisateur selon son id .
 * @param int $id_utilisateur Id de utilisateur.
 * @return bool $maj
 */

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


/**
 * Cette fonction permet d'insérer le token de l'utilisateur dans la base de données .
 * @param int $user_id Id de utilisateur.
 * @param string $type  Type de utilisateur.
 * @param token $token Token de utilisateur.
 * @return bool  $insertion_token
 */
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

/**
 * Cette fonction permet de récupérer le token de l'utilisateur selon son id .
 * @param int $id Id de utilisateur.
 * @return array token
 */


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


/**
 * Cette fonction permet de récupérer l'id de l'utilisateur selon son email .
 * @param string $email Email de utilisateur.
 * @return array user_id
 */


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

/**
 * Cette fonction permet de mettre à jour les champs est_actif, est_supprimer, mis_a_jour_le  si l'id_utilisateur existe dans la base de donnée .
 * @param int $id_utilisateur Id utilisateur a vérifié.
 * @return bool $maj1
 */


function maj1(int $id_utilisateur): bool
{

    $maj1 = false;

    $date=date("Y-m-d H:i:s");

    $db = database_login();

    $request = "UPDATE utilisateur SET est_actif = :est_actif, est_supprimer = :est_supprimer,  mis_a_jour_le = :mis_a_jour_le  WHERE id_utilisateur= :id_utilisateur";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'id_utilisateur' => $id_utilisateur,
            'est_actif' => 1,
            'est_supprimer'=> 0,
            'mis_a_jour_le' => $date
        ]
    );

    if ($request_execution) {

        $maj1 = true;
    }

    return $maj1;
}



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
function recup_mettre_a_jour_informations_utilisateur($id): bool
{

	$recup = false;

	$db = database_login();

	$request_recupere = $db->prepare('SELECT  id_utilisateur, nom, prenom, sexe, date_naissance, email, telephone, nom_utilisateur, avatar, adresse, profil FROM utilisateur WHERE id_utilisateur= :id');

	$resultat = $request_recupere->execute(array(
		'id' => $id,
	));

	if ($resultat) {
		$data = [];

		$data = $request_recupere->fetch(PDO::FETCH_ASSOC);

		$_SESSION['users'] = $data;

		$recup = true;
	}
	return $recup;
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


// Exemple de fonction pour exécuter la requête UPDATE TOKEN et faire passer le estu_supprimer à 1

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


// Exemple de fonction pour mettre à jour la table utilisateur

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
			'maj_le' => $date
		]
	);

	if ($request_execution) {

		$activation_compte_utilisateur = true;
	}

	return $activation_compte_utilisateur;
}