<?
session_start();
include('./incs/autoload.php');

if(isset($_SESSION['msg'])){

  $titulo = $_SESSION['msg']['title'];
  $msg = $_SESSION['msg']['msg'];

  unset($_SESSION['msg']);

} else {
  header('LOCATION: ' . get_config('site_url') . 'home');
}

set_page_noindex();

include('incs/inc.header.php');
?>

<!-- Main -->
<section id="main" class="pg_contato container 75%">
  <header>
    <h2><?= $titulo; ?></h2>
    <p><?= $msg; ?></p>
  </header>

</section>

<?
include('incs/inc.footer.php');
?>
