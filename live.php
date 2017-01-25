<?
include('./incs/autoload.php');

set_page_title('Live');
set_page_description('Acompanhe nossos encontros ao vivo.');
set_page_tags('culto, ao vivo, live, congregar, igreja');
set_page_image(get_config('site_url') . 'images/live.jpg');

include('incs/inc.header.php');
?>
<section id="main" class="container">
  <header>
    <h2>Live - Transmissão ao vivo</h2>
    <p>Confira abaixo nossas transmissões ao vivo</p>
  </header>
  <div class="box">
    <!--<span class="image featured"><img src="images/live.jpg" alt="" /></span>-->
    <center>
      <iframe width="640" height="360" src="https://www.youtube.com/embed/LIfit7-_3vI" frameborder="0" allowfullscreen></iframe>
    </center>




  </div>
</section>

<?
include('incs/inc.participe.php');
?>
<?
include('incs/inc.footer.php');
?>
