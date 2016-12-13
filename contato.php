<?
include('./incs/autoload.php');

set_page_title('Contato');
set_page_description('Envie uma mensagem que responderemos assim que possível.');
set_page_tags('fale conosco, mensagem, fale com a gente, converse, socorro, ajuda, pergunta');

include('incs/inc.header.php');
?>

<!-- Main -->
<section id="main" class="pg_contato container 75%">
  <header>
    <h2>Contato</h2>
    <p>Envie sua mensagem e responderemos assim que possível.</p>
  </header>
  <div class="box">
    <form method="post" action="<?= get_config('site_url'); ?>script.contato.php">
      <div class="row uniform 50%">
        <div class="6u 12u(mobilep)">
          <input type="text" name="nome" value="" placeholder="Seu nome" required="" />
        </div>
        <div class="6u 12u(mobilep)">
          <input type="email" name="email" value="" placeholder="Seu e-mail"  required="" />
        </div>
      </div>
      <div class="row uniform 50%">
        <div class="12u">
          <input type="text" name="assunto" value="" placeholder="Assunto da sua mensagem"  required="" />
        </div>
      </div>
      <div class="row uniform 50%">
        <div class="12u">
          <textarea name="msg" placeholder="Sua mensagem" rows="6"  required=""></textarea>
        </div>
      </div>
      <div class="row uniform">
        <div class="12u">
          <ul class="actions align-center">
            <li><input type="submit" value="Enviar mensagem" /></li>
          </ul>
        </div>
      </div>
    </form>
  </div>
</section>

<?
include('incs/inc.participe.php');
?>
<?
include('incs/inc.footer.php');
?>
