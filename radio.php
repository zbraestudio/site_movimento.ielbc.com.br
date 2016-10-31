<?
$page_config = array(
  'subpage'   => true,
  'title'     => 'Rádio'
);
include('incs/inc.header.php');
?>
  <!-- Main -->
  <div id="main">
    <div class="inner">

      <div id="pagina_radio_topo">
        <?= file_get_contents('./images/logo_radio.svg');  ?>
      </div>
      <iframe src="http://painelstream.com/xplay/7534" frameborder="0" width="100%" height="50" scrolling="no" noresize></iframe>
      <hr>
      <p>Um grande sonho está prestes a nascer, e estamos felizes por ter você com a gente.</p>
      <p>  Estamos orando [e trabalhando muito] para no primeiro semestre de 2017 lançarmos pra valer a Rádio LIVRES. Já pensou, 24 horas por dia com uma programação exclusiva pra gente? Que demais!</p>
      <p> Por enquanto estamos fazendo testes, mas já disponibilizamos pra galera.</p>
      <p> Esteja com a gente em oração! Esse sonho é de todos nós. Essa rádio já é nossa! Tâmo junto!
      </p>
      <p><b>Equipe Rádio Livres</b></p>


    </div>
  </div>
<?
include('incs/inc.footer.php');
?>