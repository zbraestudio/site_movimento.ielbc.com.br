<?
session_start();
include('./incs/config.php');
include('./mails/participe.php');


$nome =       $_POST['nome'];
$email =      $_POST['email'];
$telefone =   $_POST['telefone'];
$cidade =     $_POST['cidade'];
$pagina =     $_POST['pagina'];

mail_participe_send($nome, $email, $telefone, $cidade, $pagina);
?>
