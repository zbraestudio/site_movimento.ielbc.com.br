<?
session_start();
include('./incs/config.php');
include('./mails/quiz.php');


$nome =       $_POST['nome'];
$email =      $_POST['email'];
$telefone =   $_POST['telefone'];
$cidade =     $_POST['cidade'];
$pagina =     $_POST['pagina'];
$mensagem =   $_POST['pergunta'];

mail_quiz_send($nome, $email, $telefone, $cidade, $pagina, $mensagem);
?>
