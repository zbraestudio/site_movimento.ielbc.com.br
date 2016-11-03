
<!-- CTA -->
<section id="cta">

  <h2>Quer fazer parte disso?</h2>

  <p>O que é mais legal é que a gente só não gosta de pessoas perfeitas. Então se você é imperfeito como a gente, será muito bem vindo.</p>
  <p>Digite abaixo seus dados e a gente vai atrás de você.</p>

  <form action="<?= get_config('site_url'); ?>script.participe.php" method="post">
    <div class="row uniform 50%">
      <div class="12u 12u(mobilep)">
        <input type="text" name="nome"required="" placeholder="Seu nome" />
      </div>
      <div class="6u 12u(mobilep)">
        <input type="email" name="email" required="" placeholder="Seu e-mail" />
      </div>
      <div class="6u 12u(mobilep)">
        <input type="text" name="telefone" required="" placeholder="Seu telefone (whats, telegram, etc)" />
      </div>
      <div class="6u 12u(mobilep)">
        <input type="text" name="cidade" required="" placeholder="Cidade / Estado" />
      </div>
      <div class="6u 12u(mobilep)">
        <input type="submit" value="Enviar" class="fit" />
      </div>
    </div>
  </form>

</section>