﻿<?
if( $_SERVER['HTTP_HOST'] == 'localhost') {
  $url_site = 'http://localhost/github/site_www.livresweb.com';
  $path_site = 'D:\github\site_www.livresweb.com\\';
} else {
  $url_site = 'http://www.livresweb.com';
  $path_site = '/dados/http/livresweb.com/www/';
}

$midiasocial_facebook = 'http://facebook.com/igrejalivre';
$midiasocial_youtube = 'https://www.youtube.com/channel/UC-imHFpnCTsiiaJTAvd1OOg';


/* Envia E-mail */
include($path_site . 'bower_components/PHPMailer/PHPMailerAutoload.php');

$mailer = new PHPMailer;

$mailer->isSMTP();
$mailer->Host =             'smtp.livresweb.com';
$mailer->SMTPAuth =         true;
$mailer->Username =         'tiago@livresweb.com';
$mailer->Password =         'nw041203';
//$mailer->SMTPSecure =       'tls';
$mailer->Port =             587;

$mailer->CharSet = "UTF-8";
$mailer->addEmbeddedImage($path_site . 'mails/images/logo.png', 'logo');
$mailer->setFrom('tiago@ielbc.com.br', 'LIVRES // Movimento Cristão');
$mailer->isHTML(true);

?>
