<?
if( $_SERVER['HTTP_HOST'] == 'localhost') {
  $url_site = 'http://localhost/github/site_www.livresweb.com';
  $path_site = 'D:\github\site_www.livresweb.com\\';
} else {
  $url_site = 'http://www.livresweb.com';
  $path_site = '/dados/http/livresweb.com/www/';
}

$midiasocial_facebook = 'http://facebook.com/livreschurch';
$midiasocial_youtube = 'https://www.youtube.com/channel/UC-imHFpnCTsiiaJTAvd1OOg';


/* BANCO DE DADOS */
/*
 *
 * @tihhgoncalves - inutilizado, por enquanto. Mas já está pronto!
 *
 *
if( $_SERVER['HTTP_HOST'] == 'localhost')
  $db_host =      'nbz.net.br';
else
  $db_host =      'localhost';
$db_user =      'root';
$db_pass =      'nwtiago';
$db_database =  'livresweb.com_site';

$db = new girafaGB($db_host, $db_database, $db_user, $db_pass);
*/

/* E-MAIL */
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
$mailer->setFrom('tiago@livresweb.com', 'LIVRES // Movimento Cristão');
$mailer->isHTML(true);


$youtube_api_key = 'AIzaSyCDdRciH_aNVPRCEpkky5CZLZ1f84ytgHs';

?>
