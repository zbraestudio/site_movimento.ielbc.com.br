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

    <form action="script.quiz.send.php" method="post">

      <input type="text" placeholder="Seu nome" name="nome" required>
      <input type="email" placeholder="Seu e-mail" name="email" required>

      <div class="anonimo_opcao sim">
        <input id="anonimo1" type="radio" name="anonimo" value="Não" checked="checked">
        <label for="anonimo1"><span><span></span></span>Na hora que minha pergunta for respondida, pode falar meu nome junto.</label>
      </div>

      <div class="anonimo_opcao">
        <input id="anonimo2" type="radio" name="anonimo" value="Sim">
        <label for="anonimo2"><span><span></span></span>Não! Quero perguntar anonimamente e que meu nome não seja mencionado.</label>
      </div>

      <fieldset>
        <legend>Celular(es) // Whats App // Telegram</legend>
        <input type="text" placeholder="Seu celular" name="celular" required>
      </fieldset>

      <fieldset>
        <legend>Sua pergunta</legend>
        <textarea placeholder="Pergunte o que quiser" name="pergunta" required></textarea>
      </fieldset>

      <button type="submit">Enviar</button>

    </form>

  </div>
</div>
<?
include('incs/inc.footer.php');
?>