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

function check_email_exist($email){
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
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = 'educationapp@gmail.com';
            $mail->Password = 'ixzjicekjuokjekb';

            // Sender and recipient settings
            $mail->setFrom('educationapp@gmail.com', htmlspecialchars_decode('Educ-Action'));
            $mail->addAddress($destination, 'UTILISATEUR');
            $mail->addReplyTo('educationapp@gmail.com', htmlspecialchars_decode('Educ-Action'));

            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = htmlspecialchars_decode($subject);
            $mail->Body = $body;

            return $mail->send();

        } catch (Exception $e) {

            return false;

        }

    }