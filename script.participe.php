<?
session_start();
include('./incs/config.php');

$_SESSION['msg'] = array(
                        'title' => 'Eba! Já recebemos seus dados.',
                        'msg' => 'Que bacana que quer participar com a gente nessa caminhada louca pelo Caminho da Graça. <br>Em breve estaremos entrando em contato com você.<br>Abraços e tâmo junto!!'
);
header('LOCATION: ' . get_config('site_url') . 'msg');
?>