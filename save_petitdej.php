<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta http-equiv="Content-language" content="fr">
	</head>
	<?php
		require('./phpmailer/PHPMailerAutoload.php');
		function connectMySQL($host,$login,$password,$dbname){
			$sql=new mysqli();
			$sql->init();
			$sql->real_connect($host,$login,$password,$dbname);
			return $sql;
		}

		function queryMySQL($sql,$query){
			$result = $sql->query($query);
			return $result;
		}

		$connect = connectMySQL('localhost','jack_russell','18631492$','jr_petitdejeuner2017');
		$connect->set_charset("utf-8");
		if(ISSET($_POST['idNom'])){
			$nom=$_POST['idNom'];
			$prenom=$_POST['idPrenom'];
			$email=$_POST['idMail'];
			$societe=$_POST['idSociete'];
			$tel=$_POST['idTel'];
			$date_petitdej=$_POST['txtDate'];
			$date=explode("-",$date_petitdej);
			$annee = $date[0];
			$jour = $date[2];
			$mois = $date[1];
			switch($mois){
				case '09':
					$mois="Septembre";
					break;
				case '10':
					$mois="Octobre";
					break;
				default:
					break;
			}
			$req="INSERT INTO inscriptions(nom,prenom,email,societe,telephone,date_petitdej,date_inscription) VALUES ";
			$req.="('".$nom."','".$prenom."','".$email."','".$societe."','".$tel."','".$date_petitdej."',NOW())";

			if($res=queryMySQL($connect,$req)){
				$jr_mail = "hello@jack-russell.fr"; //hello@jack-russell.fr
				$jr_name = "Jack Russell";
				$sujet="Confirmation inscriptions au petit déjeuner de l'email";
				$message_html="
				<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
				<html xmlns=\"http://www.w3.org/1999/xhtml\">
				<head>
					<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
					<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=10.0, user-scalable=yes\">
					<title>45 minutes pour vous initier &agrave; l'algorithme de l'email - Jack Russell</title>
					<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700\" rel=\"stylesheet\"> 
				  <!-- CSS Reset -->
					<style type=\"text/css\">
						html,
						body {
							margin: 0 !important;
							padding: 0 !important;
							height: 100% !important;
							width: 100% !important;
						}

						.ExternalClass *{line-height:100%;}

						.ExternalClass{
							width: 100%;
							background-color: #ebebeb;
							mso-line-height-rule: exactly;
						}
						table {
							border-collapse: collapse !important;
							padding: 0px !important;
							border: none !important;
							border-bottom-width: 0px !important;
							mso-table-lspace: 0pt;
							mso-table-rspace: 0pt;
						}
						td{border-collapse:collapse;}

						img{-ms-interpolation-mode:bicubic;}

						table td{border-collapse:collapse;}
						p {margin:0; padding:0;}

						.ReadMsgBody{width: 100%; background-color: #ebebeb;}

						.yshortcuts a{border-bottom: none !important;}

						.adclassApl a {color:#9f9f9f !important;}

						.mobile-link--footer a,
						a[x-apple-data-detectors]{
							color:inherit !important;
						}

						.lien1,
						.lien1:visited,
						.lien1:hover,
						.lien1:focus,
						.lien1:active{color:#afafaf !important;}

						.lien2,
						.lien2:visited,
						.lien2:hover,
						.lien2:focus,
						.lien2:active{color:#FFF !important;}

						.lien3,
						.lien3:visited,
						.lien3:hover,
						.lien3:focus,
						.lien3:active{color:#707173 !important;}

						tr[class=\"showImgtel\"]{display:none;}

						@media only screen and (max-width: 600px){
							*[class=\"hide\"]{
								display:none !important;
								width:0 !important;
								height:0 !important;
							}
							a[class=\"showImg1\"]{
								background:url(\"http://varibase.emsecure.net/images/JackRussell/background-top_mobile.jpg\") no-repeat left top;
								width: 320px !important;
								height: 23px !important;
								display: block !important;
							}
							a[class=\"showImg2\"]{
								background:url(\"http://varibase.emsecure.net/images/JackRussell/background-left_mobile.jpg\") no-repeat left top;
								width: 20px !important;
								height: 328px !important;
								display: block !important;
								text-align: left;
							}
							a[class=\"showImg3\"]{
								background:url(\"http://varibase.emsecure.net/images/JackRussell/background-right_mobile.jpg\") no-repeat left top;
								width: 20px !important;
								height: 328px !important;
								display: block !important;
								text-align: left;
							}
							a[class=\"showImg4\"]{
								background:url(\"http://varibase.emsecure.net/images/JackRussell/parking_mobile.jpg\") no-repeat left top;
								width: 320px !important;
								height: 116px !important;
								display: block !important;
								text-align: left;
							}
							a[class=\"showImg5\"]{
								background:url(\"http://varibase.emsecure.net/images/JackRussell/localiser_mobile.jpg\") no-repeat left top;
								width: 320px !important;
								height: 117px !important;
								display: block !important;
								text-align: left;
							}
							td[class=\"td20\"]{width: 20px !important;}
							td[class=\"td280\"]{width: 280px !important;}
							table[class=\"table320\"]{display: block !important; width: 320px !important; text-align:center !important;}
							img[class=\"img320\"]{width: 320px !important; height: auto !important;}
							*[class=\"chglh\"]{line-height: 20px !important;}
						}
					</style>
				</head>
				<body width=\"100%\" bgcolor=\"#FFF\" style=\"margin:0; padding:0;\">
					<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" height=\"100%\" width=\"100%\" bgcolor=\"#FFF\" align=\"center\" style=\"border-collapse:collapse;\">
						<tr>
							<td valign=\"top\" align=\"center\" style=\"text-align: center;\">
								<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" class=\"table320\" width=\"600\">
									<tr>
										<td align=\"center\" valign=\"middle\" style=\"text-align: center; font-family: Helvetica, Arial, sans-serif; font-size:11px; line-height:14px; mso-height-rule: exactly; color:#707173; letter-spacing:0.02em;\"><br />Si cet e-mail ne s’affiche pas correctement, <a class=\"lien3\" href=\"~ARCHIVE~\" title=\"version en ligne\" style=\"font-size:11px; color:#707173 !important; mso-height-rule: exactly;\" target=\"_blank\">cliquez ici</a><br /><br />
										</td>
									</tr>
									<tr>
										<td>
										<a class=\"showImg1\" href=\"#\" title=\"\" style=\"display: block; border:none; text-decoration:none; cursor:default; font-size: 1px; line-height: 1px;\" target=\"_blank\">
												<img class=\"hide\" src=\"http://varibase.emsecure.net/images/JackRussell/background-top.jpg\" width=\"600\" height=\"23\" alt=\"\" border=\"0\" />
											</a>
										</td>
									</tr>
									<tr>
										<td valign=\"top\">
											<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"table320\" width=\"600\">
												<tr>
													<td class=\"td20\" width=\"25\" style=\"font-size:1px; line-height:1px;\">
														<a class=\"showImg2\" href=\"#\" title=\"\" style=\"display: block; border:none; text-decoration:none; cursor:default; font-size: 1px; line-height: 1px;\" target=\"_blank\">
															<img class=\"hide\" src=\"http://varibase.emsecure.net/images/JackRussell/background-left.jpg\" width=\"25\" height=\"310\" alt=\"\" border=\"0\" />
														</a>
													</td>
													<td class=\"td280\" width=\"550\" valign=\"top\" style=\"text-align: center; font-family: 'Roboto', arial, sans-serif; font-size:14px; font-weight:300; line-height:19px; mso-height-rule: exactly; color:#000;\"><br><br>
														<b style=\"font-size:18px;  font-weight:700;\">Bonjour $prenom $nom</b><br>
														Nous vous remercions de vous &ecirc;tre inscrit<br>au petit d&eacute;jeuner de pr&eacute;sentation de l'algorithme de l'email.<br><br>Nous vous attendons avec plaisir<br class=\"hide\"> <b style=\"font-weight:700;\">le $jour $mois $annee &agrave; 9h00 au Caf&eacute; des Initi&eacute;s<br>3 place des Deux &Eacute;cus - 75001 Paris</b><br>pour vous pr&eacute;senter notre approche.<br><br>Bien cordialement,<br><b style=\"font-weight:700;\">Fr&eacute;d&eacute;ric Goubet et &Eacute;ric Azara</b><br>Cofondateurs de Jack Russell
													</td>
													<td class=\"td20\" width=\"25\" style=\"font-size:1px; line-height:1px;\">
														<a class=\"showImg3\" href=\"#\" title=\"\" style=\"display: block; border:none; text-decoration:none; cursor:default; font-size: 1px; line-height: 1px;\" target=\"_blank\">
															<img class=\"hide\" src=\"http://varibase.emsecure.net/images/JackRussell/background-right.jpg\" width=\"25\" height=\"310\" alt=\"\" border=\"0\" />
														</a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td valign=\"top\">
											<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"table320\" width=\"600\">
												<tr>
													<td colspan=\"3\">
														<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"hide\" width=\"600\">
															<tr>
																<td>
																	<a href=\"https://www.google.fr/maps/search/Parking/@48.8626791,2.3417316,15z/data=!3m1!4b1\" title=\"parking le plus proche\" style=\"border:none; display:block; height:100%;\" target=\"_blank\">
																		<img class=\"hide\" src=\"http://varibase.emsecure.net/images/JackRussell/parking.jpg\" width=\"300\" height=\"115\" alt=\"parking le plus proche\" border=\"0\" />
																	</a>
																</td>
																<td>
																	<a href=\"https://www.google.fr/maps/place/Cafe+des+Inities/@48.8628216,2.3413571,15z/data=!4m5!3m4!1s0x0:0x36aac3bf6b3826d0!8m2!3d48.8628216!4d2.3413571\" title=\"localiser le caf&eacute; des initi&eacute;s\" style=\"border:none; display:block; height:100%;\" target=\"_blank\">
																		<img class=\"hide\" src=\"http://varibase.emsecure.net/images/JackRussell/localiser.jpg\" width=\"300\" height=\"115\" alt=\"localiser le caf&eacute; des initi&eacute;s\" border=\"0\" />
																	</a>
																</td>
															</tr>
														</table>
														<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"table320\" width=\"600\">
															<tr>
																<td>
																	<a class=\"showImg4\" href=\"https://www.google.fr/maps/search/Parking/@48.8626791,2.3417316,15z/data=!3m1!4b1\" title=\"parking le plus proche\" style=\"border:none; text-decoration:none; font-size:1px; color:#FFFFFF; line-height:1px;\" target=\"_blank\">&nbsp;</a>
																</td>
															</tr>
															<tr>
																<td>
																	<a class=\"showImg5\" href=\"https://www.google.fr/maps/place/Cafe+des+Inities/@48.8628216,2.3413571,15z/data=!4m5!3m4!1s0x0:0x36aac3bf6b3826d0!8m2!3d48.8628216!4d2.3413571\" title=\"localiser le caf&eacute; des initi&eacute;s\" style=\"border:none; text-decoration:none; font-size:1px; color:#FFFFFF; line-height:1px;\" target=\"_blank\">&nbsp;</a>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr><td height=\"24\" style=\"font-size:1px;\" bgcolor=\"#efefef\" colspan=\"3\">&nbsp;</td></tr>
												<tr>
													<td class=\"td20\" width=\"25\" style=\"font-size:1px;\" bgcolor=\"#efefef\">&nbsp;</td>
													<td class=\"td280\" valign=\"middle\" bgcolor=\"#efefef\" width=\"550\" style=\"text-align: left; font-family: 'Roboto', arial, sans-serif; font-size:14px; font-weight:300; line-height:19px; mso-height-rule: exactly; color:#000;\">
														Jack Russell est une start-up franco-canadienne d&eacute;di&eacute;e &agrave; l’email marketing, cr&eacute;&eacute;e en 2016 par Fr&eacute;d&eacute;ric Goubet et Eric Azara. Nous sommes structur&eacute;s autour d’une agence de cr&eacute;ation, d’un d&eacute;partement &eacute;tudes et d’une plateforme de veille. Nos premiers clients en France sont Mercedes, Smart, Marques Avenue et Husqvarna.
													</td>
													<td class=\"td20\" width=\"25\" style=\"font-size:1px;\" bgcolor=\"#efefef\">&nbsp;</td>
												</tr>
												<tr>
													<td class=\"td20\" width=\"25\" style=\"font-size:1px;\" bgcolor=\"#efefef\">&nbsp;</td>
													<td class=\"td280\" valign=\"middle\" bgcolor=\"#efefef\" width=\"550\">
														<a href=\"http://jack-russell.fr/\" title=\"l'agence Jack Russell\" style=\"border:none; display:block; height:100%;\" target=\"_blank\">
															<img src=\"http://varibase.emsecure.net/images/JackRussell/logo_JR.jpg\" width=\"240\" height=\"165\" alt=\"logo Jack Russell\" border=\"0\" />
														</a>
													</td>
													<td class=\"td20\" width=\"25\" style=\"font-size:1px;\" bgcolor=\"#efefef\">&nbsp;</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
								<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" class=\"table320\" width=\"600\">
									<tr>
										<td class=\"td20\" width=\"25\" bgcolor=\"#000000\" style=\"font-size:1px;\">&nbsp;</td>
										<td class=\"td280\" valign=\"middle\" bgcolor=\"#000000\" style=\"text-align: center; font-family: 'Roboto', arial, sans-serif; font-size: 14px; font-weight:300; mso-height-rule: exactly; line-height: 19px; color: #FFFFFF;\">
											<br><br>
											<b style=\"font-weight:700;\">Jack Russell</b> - 25, rue d'Hauteville - 75010 Paris<br class=\"hide\">
											+33 1 43 18 01 07 - <a class=\"lien2\" href=\"mailto:hello@jack-russell.fr\" title=\"Contacter Jack Russell\" style=\"border:none; text-decoration:none;\" target=\"_blank\">hello@jack-russell.fr</a> - <a class=\"lien2\" href=\"http://jack-russell.fr/\" title=\"l'agence Jack Russell\" style=\"border:none; text-decoration:none;\" target=\"_blank\">www.jack-russell.fr</a><br class=\"hide\">
											SA au capital de 946 134 Euros - RCS PARIS B 438 689 747<br><br><br>
										</td>
										<td class=\"td20\" width=\"25\" bgcolor=\"#000000\" style=\"font-size:1px;\">&nbsp;</td>
									</tr>
							  </table>
							</td>
						</tr>
					</table>
				</body>
				</html>";
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
				$mail->addAddress($email);     // Add a recipient
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = $sujet;
				$mail->Body    = $message_html;
				$mail->send();
				
				$private_mail = new PHPMailer;
				$private_mail->CharSet = 'utf-8';
				$private_mail->isSMTP();
				$private_mail->Host = "customers-pop-proxy.oxymium.net";
				$private_mail->SMTPAuth=true;
				$private_mail->Username = "contact@jack-russell.net";
				$private_mail->Password = "fy6mfauke5";
				$private_mail->SMTPSecure = 'tls'; 
				$private_mail->Port = 587;
				$private_mail->setFrom($jr_mail, $jr_name);
				$private_mail->addAddress("fgoubet@varibase.com","Frédéric Goubet"); 
				$private_mail->addAddress("cfauconnier@varibase.com","Charlotte Fauconnier"); // Add a recipient
				$private_mail->isHTML(true);   
				
				$message_private="Nouvelle insciption à un petit déjeuner : <br>";
				$message_private.="Date : $jour $mois $annee";
				$message_private.="<br>";
				$message_private.="Prenom Nom : $prenom $nom<br>";
				$message_private.="Societe : $societe<br>";
				$message_private.="Email : $email<br>";
				$message_private.="Tel : $tel<br>";
				$sujet_private = "Nouvelle inscription au petit déjeuner du $jour $mois";
				$private_mail->Subject = $sujet_private;
				$private_mail->Body    = $message_private;
				$private_mail->send();
				header('Location:petitdej.php?inscription=true');
			}else{
				//echo "ERROR!";
			}

		}
	?>
</html>