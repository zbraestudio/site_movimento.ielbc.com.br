<?
if( $_SERVER['HTTP_HOST'] == 'localhost') {
  $url_site = 'http://localhost/github/site_movimento.ielbc.com.br';
  $path_site = 'D:\github\site_movimento.ielbc.com.br\\';
} else {
  $url_site = 'http://movimento.ielbc.com.br';
  $path_site = '/dados/http/ielbc.com.br/movimento/';
}

$midiasocial_facebook = 'http://facebook.com/ielbc';


/* Envia E-mail */
include($path_site . 'bower_components/PHPMailer/PHPMailerAutoload.php');

$mailer = new PHPMailer;

$mailer->isSMTP();
$mailer->Host =             'smtp.ielbc.com.br';
$mailer->SMTPAuth =         true;
$mailer->Username =         'tiago@ielbc.com.br';
$mailer->Password =         'nw041203';
//$mailer->SMTPSecure =       'tls';
$mailer->Port =             587;
$mailer->CharSet = "UTF-8";
$mailer->addEmbeddedImage($path_site . 'mails/images/logo.png', 'logo');
$mailer->setFrom('tiago@ielbc.com.br', utf8_decode('LIVRES // Movimento Cristão'));
$mailer->isHTML(true);

?>