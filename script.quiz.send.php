<?
include('mails/template_quiz.php');

$nome =     $_POST['nome'];
$email =    $_POST['email'];
$celular =  $_POST['celular'];
$pergunta = $_POST['pergunta'];

mail_quiz_send($nome, $email, $celular, $pergunta);

?>