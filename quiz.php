<?
$subpage = true;
include('incs/inc.header.php');
?>
<!-- Main -->
<div id="main">
  <div class="inner">
    <h1>QUIZ</h1>
    <p>Sabe aquela dúvida que você sempre teve? <br>
      Ou talvez ouviu uma mensagem, mas não ficou muito claro o assunto?</p>
      <p>Preencha o formulário abaixo com suas perguntas e envie pra gente.<br>Elas serão selecionadas e respondidas nos nossos encontros NEXT's.
    </p>

    <hr>

    <form action="#" method="post">

      <input type="text" placeholder="Seu nome" required>
      <input type="email" placeholder="Seu e-mail" required>

      <fieldset>
        <legend>Celular(es) // Whats App // Telegram</legend>
        <input type="text" placeholder="Seu celular" required pattern="\(\d{2}\)\d{4}-\d{4}">
      </fieldset>

      <fieldset>
        <legend>Sua pergunta</legend>
        <textarea placeholder="Pergunte o que quiser" required></textarea>
      </fieldset>

      <button type="submit">Enviar</button>

    </form>

  </div>
</div>
<?
include('incs/inc.footer.php');
?>