<?
include('./incs/autoload.php');

set_page_title('Agenda');
set_page_description('Confira os próximos compromissos da ESTAÇÃO. Participe dos nossos encontros e eventos.');
set_page_tags('culto, encontro, reunião, grupos familiar, gp, pequeno grupo');

include('incs/inc.header.php');
?>
<section id="main" class="container pg_agenda">
  <div class="box">
    <h3>Agenda</h3>

    <p>Confira abaixo os próximos compromissos da ESTAÇÃO. Participe dos nossos encontros e eventos.</p>


    <?
    $sql = 'SELECT * FROM Agenda';
    $sql .= " WHERE (`Data` >= NOW() AND DataFim IS NULL) OR (`Data` < NOW() AND DataFim >= NOW() ) AND Publicado = 'Y'";
    $sql .= ' ORDER BY `Data` ASC';
    $eventos = $db->LoadObjects($sql);

    foreach($eventos as $evento) {

      if(empty($evento->Imagem)){
        $img_path = get_config('site_path') . '/images/agenda_semimagem.png';
        $img_url = get_config('site_url') . '/images/agenda_semimagem.png';
      } else {
        $img_path = get_config('sistema_upload_path') . $evento->Imagem;
        $img_url = get_config('sistema_upload_url') . $evento->Imagem;
      }


      ?>
      <div class="evento">
        <a href="<?= $img_url; ?>" class="fancybox">
          <img src="<?= $img_url; ?>" class="imagem">
        </a>

        <div class="infos">
          <h2><?= $evento->Titulo; ?></h2>
          <h5><?= $evento->DataTexto; ?></h5>

          <?= $evento->Texto; ?>
          <div class="clearboth"></div>
        </div>

        <div class="clearboth"></div>
      </div>
      <div class="clearboth"></div>
    <?
    }
    ?>

  </div>
</section>

<?
include('incs/inc.footer.php');
?>
