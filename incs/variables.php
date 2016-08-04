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
$mailer->Host =             'smtp.gmail.com';
$mailer->SMTPAuth =         true;
$mailer->Username =         'zbra.enviador@gmail.com';
$mailer->Password =         'zbrazbra';
$mailer->SMTPSecure =       'ssl';
$mailer->Port =             465;
$mailer->addEmbeddedImage($path_site . 'mails/images/logo.png', 'logo');
$mailer->setFrom('tiago@ielbc.com.br', utf8_decode('LIVRES // Movimento Cristão'));
$mailer->isHTML(true);

?>