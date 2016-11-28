<?
include('./incs/config.php');

set_page_title('Quiz');
set_page_description('Sabe aquela dúvida que você sempre teve? Ou talvez ouviu uma mensagem mas não ficou muito claro o assunto? Agora você pode perguntar!');
set_page_tags('participe, também quero, faça parte, quero participar, convite, inscrição, quero ir');
set_page_image(get_config('site_url') . 'images/quiz.jpg');

include('incs/inc.header.php');
?>
<section id="main" class="container">
  <div class="box">
    <span class="image featured"><img src="images/quiz.jpg" alt="" /></span>
    <h3>Faça sua pergunta!</h3>

    <p>Sabe aquela dúvida que você sempre teve?</p>
    <p>Ou talvez ouviu uma mensagem mas não ficou muito claro o assunto?</p>
    <p>Agora você pode perguntar e crescer ainda mais. As perguntas selecionadas serão respondidas nos encontros NEXT's.</p>


    <form action="<?= get_config('site_url'); ?>script.quiz.php" class="quiz" method="post">
      <input type="hidden" name="pagina" value="<?= get_config('page'); ?>" />
      <div class="row uniform 50%">
        <div class="12u 12u(mobilep)">
          <input type="text" name="nome" required="" placeholder="Seu nome" />
        </div>
        <div class="4u 12u(mobilep)">
          <input type="email" name="email" required="" placeholder="Seu e-mail" />
        </div>
        <div class="4u 12u(mobilep)">
          <input type="text" name="telefone" required="" placeholder="Seu telefone (whats, telegram, etc)" />
        </div>
        <div class="4u 12u(mobilep)">
          <input type="text" name="cidade" required="" placeholder="Cidade / Estado" />
        </div>
        <div class="12u 12u(mobilep)">
          <textarea name="pergunta" required="" placeholder="Faça sua pergunta"></textarea>
        </div>
        <div class="12u 12u(mobilep)">
          <input type="submit" value="Enviar" class="fit" />
        </div>
      </div>
    </form>

  </div>
</section>

<?
include('incs/inc.footer.php');
?>
