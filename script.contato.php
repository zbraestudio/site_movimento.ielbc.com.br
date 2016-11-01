<?
session_start();
include('./incs/config.php');

$_SESSION['msg'] = array(
                        'title' => 'Opa! Sua mensagem foi enviada com sucesso.',
                        'msg' => 'Agradecemos ter entrado em contato com a gente. Assim que possível, estaremos respondendo sua mensagem. <br>Tâmo junto! Abraços!'
);
header('LOCATION: ' . get_config('site_url') . 'msg');
?>