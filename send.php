<?php
    require('./phpmailer/PHPMailerAutoload.php');
    
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
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
        $mail->addAddress('ebarbe@varibase.com', 'Jack Russell');     // Add a recipient

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
    