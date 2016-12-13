<?
include('./incs/autoload.php');

set_page_title('Quiz');
set_page_description('Sabe aquela dúvida que você sempre teve? Ou talvez ouviu uma mensagem mas não ficou muito claro o assunto? Agora você pode perguntar!');
set_page_tags('participe, também quero, faça parte, quero participar, convite, inscrição, quero ir');
set_page_image(get_config('site_url') . 'images/quiz.jpg');

include('incs/inc.header.php');
?>
<section id="main" class="container pg_agenda">
  <div class="box">
    <h3>Agenda</h3>

    <p>Confira abaixo os próximos compromissos do LIVRES. Participe de nossos encontros e eventos.</p>


    <?
    $sql = 'SELECT * FROM Agenda';
    $sql .= " WHERE (`Data` >= NOW() AND DataFim IS NULL) OR (`Data` < NOW() AND DataFim >= NOW() ) AND Publicado = 'Y'";
    $sql .= ' ORDER BY `Data` ASC';
    $eventos = $db->LoadObjects($sql);

    foreach($eventos as $evento) {
      ?>
      <div class="evento">
        <a href="<?= get_config('sistema_upload_url') . $evento->Imagem; ?>" class="fancybox">
          <img src="<?= get_config('sistema_upload_url') . $evento->Imagem; ?>" class="imagem">
        </a>

        <div class="infos">
          <h2><?= $evento->Titulo; ?></h2>
          <h5><?= $evento->DataTexto; ?></h5>

          <?= $evento->Texto; ?>
        </div>

        <div class="clearboth"></div>
      </div>
    <?
    }
    ?>

  </div>
</section>

<?
include('incs/inc.footer.php');
?>
