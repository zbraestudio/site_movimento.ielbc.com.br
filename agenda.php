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
    //$eventos =
    ?>
    <div class="evento">
      <img src="https://placehold.it/960" class="imagem">
      <div class="infos">
        <h2>Start!</h2>
        <h5>14/jan/2016, a partir das 20hrs.</h5>
        <p>aeuhaueae</p>
      </div>

      <div class="clearboth"></div>
    </div>
    <?

    ?>

  </div>
</section>

<?
include('incs/inc.footer.php');
?>
