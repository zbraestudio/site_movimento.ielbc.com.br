
<!-- Footer -->
<footer id="footer">
  <div class="inner">
    <section>
      <h2>Fale com a gente</h2>
      <form method="post" action="script.contato.send.php">
        <div class="field half first">
          <input type="text" name="nome" id="name" placeholder="Seu nome" required="" />
        </div>
        <div class="field half">
          <input type="email" name="email" id="email" placeholder="Seu e-mail" required="" />
        </div>
        <div class="field">
          <textarea name="mensagem" id="message" placeholder="Deixe sua mensagem" required=""></textarea>
        </div>
        <ul class="actions">
          <li><input type="submit" value="Enviar" class="special" /></li>
        </ul>
      </form>
    </section>
    <section>
      <h2>Let's go!</h2>
      <ul class="icons">
        <li><a href="<?= $midiasocial_facebook; ?>" target="_blank" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
        <!--<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>-->
        <!--<li><a href="#"  target="_blank" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>-->
        <!--<li><a href="#"  target="_blank" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>-->
        <!--<li><a href="#"  target="_blank" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>-->
        <!--<li><a href="#"  target="_blank" class="icon style2 fa-500px"><span class="label">500px</span></a></li>-->
        <li><a href="https://www.facebook.com/igrejalivre"  target="_blank" class="icon style2 fa-phone"><span class="label">Telefone</span></a></li>
        <li><a href="mailto:tiago@ielbc.com.br"  target="_blank" class="icon style2 fa-envelope-o"><span class="label">E-mail</span></a></li>
      </ul>
    </section>
    <ul class="copyright">
      <li>Livre Movimento Cristão &copy; Todos os direitos reservados.</li><li>Este site foi desenvolvido pela  <a href="http://www.zbraestudio.com.br" target="_blank">Z.BRA Estúdio</a>.</li>
    </ul>
  </div>
</footer>

<?


$tooltip_quiz = 'Sabe aquela dúvida que você sempre teve?';
$tooltip_quiz .= ' Clique aqui e pergunta no nosso QUIZ. ';
$tooltip_quiz .= ' As perguntas selecionadas são respondidas nos nossos programas NEXT’s.';

?>
<a href="<?= $url_site; ?>/quiz" id="chamada_quiz"  class="tooltip_quiz" title="<?= $tooltip_quiz; ?>" >
  <?= file_get_contents('./images/logo-quiz.svg');  ?>
</a>


</div>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
<script type="text/javascript" src="bower_components/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="js/tihh.js"></script>

</body>
</html>