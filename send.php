<?php
    require('./phpmailer/PHPMailerAutoload.php');
    
if(ISSET($_POST['subject'])){
	switch($_POST['subject']){
		case 'barometre':
			$sujet = "Demande d'informations sur le barometre email";
			break;
		case 'pige':
			$sujet = "Demande d'informations sur la pige email";
			break;
	}
	$jr_mail = "ebarbe@varibase.com";
	$jr_name = "Jack Russell";
	$client_mail = $_POST['email'];
	if(ISSET($_POST['phone'])){
		$phone = $_POST['phone'];
	}
	//EMAIL 1 : FROM JR TO PROSPECT
	$message_html="Bonjour,<br>";
	$message_html.="Nous vous remercions pour votre demande d’information.<br>";
	$message_html.="Un des membres de l’équipe Jack Russell va prendre contact rapidement avec vous.<br>";
	$message_html.="A bientôt.<br>";
	$message_html.="<br><br><br>";
	$message_html.="Pascal Chirat<br>";
	$message_html.="Jack Russell<br>";
	$message_html.="25, Rue d'Hauteville<br>";
	$message_html.="75010 Paris<br>";
	$message_html.="+33 (0)1 43 18 01 07<br>";
	$message_html.="<br><br>";
	$message_html.="<img src=\"http://jack-russell.fr/img/logo-mail.png\"><br>";
	$message_html.="Suivez nous sur ";
	$message_html.="<a href=\"https://www.facebook.com/AgenceJackRussell/?fref=ts\">Facebook</a>";
	$message_html.=" et <a href=\"https://twitter.com/creativeemails\">Twitter</a>";
	$mail = new PHPMailer;
	$mail->CharSet = 'utf-8';
	$mail->isSMTP();
	$mail->Host = "customers-pop-proxy.oxymium.net";
	$mail->SMTPAuth=true;
	$mail->Username = "contact@jack-russell.net";
	$mail->Password = "fy6mfauke5";
	$mail->SMTPSecure = 'tls'; 
	$mail->Port = 587;
	$mail->setFrom($jr_mail, $jr_name);
	$mail->addAddress($client_mail);     // Add a recipient
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $sujet;
	$mail->Body    = $message_html;
	$mail->send();
	
	//EMAIL 2 : FROM JR TO JR 
	$message_html2="Merci de contacter cette personne qui souhaite avoir plus d informations sur : <br>";
	$message_html2.=$_POST['subject'];
	$message_html2.="<br>";
	$message_html2.="Email : ".$client_mail."<br>";
	if(ISSET($phone)){
		$message_html2.="T&eacute;l&eacute;phone : ".$phone;
	}
	
	$mail2 = new PHPMailer;
	$mail->CharSet = 'utf-8';
	$mail2->isSMTP();
	$mail2->Host = "customers-pop-proxy.oxymium.net";
	$mail2->SMTPAuth=true;
	$mail2->Username = "contact@jack-russell.net";
	$mail2->Password = "fy6mfauke5";
	$mail2->SMTPSecure = 'tls'; 
	$mail2->Port = 587;
	$mail2->setFrom($jr_mail, $jr_name);
	$mail2->addAddress("ebarbe@varibase.com");     // Add a recipient
	$mail2->isHTML(true);                                  // Set email format to HTML
	$mail2->Subject = $sujet;
	$mail2->Body = $message_html2;
	if(!$mail2->send()){
		return $mail->ErrorInfo;
	}
	echo "Merci de votre interêt, nous vous recontacterons rapidement";
	
}elseif(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $nom=$_POST['nom'];
        $societe=$_POST['societe'];
        $email=$_POST['email'];
        $sujet=$_POST['sujet'];
        $message=$_POST['message'];
        if(ISSET($_POST['prenom'])&&($_POST['prenom']!="")){
            return "";
        }
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = "customers-pop-proxy.oxymium.net";
        $mail->SMTPAuth=true;
        $mail->Username = "contact@jack-russell.net";
        $mail->Password = "fy6mfauke5";
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587;

        $mail->setFrom($email, $nom);
        $mail->addAddress('hello@jack-russell.fr', 'Jack Russell');     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $sujet;
        $mail->Body    = $nom." de la compagnie ".$societe."<br> A laisse ce message : <br>".$message;
        $mail->AltBody = $nom." de la compagnie ".$societe."\n A laissé ce message : \n".$message;
        
        if(!$mail->send()) {
            echo '<p class="sent">Impossible d\'envoyer le message, veuillez r&eacute;essayer ulterieurement.</p>';
           // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo '<p class="sent">Merci!<br>Votre message &agrave; bien &eacute;t&eacute; envoy&eacute;</p>';
        }
    }
