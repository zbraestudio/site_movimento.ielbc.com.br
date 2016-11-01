<?
session_start();
include('./incs/config.php');
include('./mails/contato.php');

$nome =       $_POST['nome'];
$email =      $_POST['email'];
$assunto =    $_POST['assunto'];
$msg =        $_POST['msg'];

mail_contato_send($nome, $email, $assunto, $msg);
?>