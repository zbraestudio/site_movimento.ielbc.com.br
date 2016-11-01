<?
require_once(get_config('site_path') . 'bower_components/PHPMailer/PHPMailerAutoload.php');

$mailer = new PHPMailer;
$mailer->isSMTP();
$mailer->Host =             'smtp.livresweb.com';
$mailer->SMTPAuth =         true;
$mailer->Username =         'tiago@livresweb.com';
$mailer->Password =         'nw041203';
//$mailer->SMTPSecure =       'tls';
$mailer->Port =             587;
$mailer->CharSet = "UTF-8";
$mailer->addEmbeddedImage(get_config('site_path') . 'mails/logo.png', 'logo');
$mailer->setFrom('tiago@livresweb.com', 'LIVRES');
$mailer->isHTML(true);

?>