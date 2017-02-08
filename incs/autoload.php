<?
session_start();
include('config.php');
include('girafa.db.php');
include('girafa.tablepost.php');


if( $_SERVER['HTTP_HOST'] == 'localhost') {
  $db_host = 'nbz.net.br';
} else {
  $db_host = 'localhost';
}
$db_db      = 'igrejaestacao.com.br_sistema';
$dv_user    = 'root';
$db_pass    = 'nwtiago';
$db = new nbrDB($db_host, $db_db, $dv_user, $db_pass);

?>
