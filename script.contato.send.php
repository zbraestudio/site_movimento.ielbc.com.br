<?
include('./incs/variables.php');
include($path_site . '/mails/template_contato.php');

$nome =     $_POST['nome'];
$email =    $_POST['email'];
$mensagem =  $_POST['mensagem'];

mail_contato_send($nome, $email, $mensagem);

?>