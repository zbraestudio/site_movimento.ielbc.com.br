<?
include('bower_components/PHPMailer/PHPMailerAutoload.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>Documento sem título</title>
<link rel="stylesheet" href="css/reset.css">


<!-- BOWER - jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- BOWER - Bootstrap -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!--BOWER - Bootstrap Device Debug -->
<!-- Quando terminar o site comentar as chamas abaixo -->
<script src="bower_components/bootstrap-device-debug/bootstrap-device-debug.js"></script>
<link rel="stylesheet" href="bower_components/bootstrap-device-debug/bootstrap-device-debug.css">

<!-- Controle de acesso pelo Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<!-- Carrega CSS -->
<link rel="stylesheet" href="css/master.css">

<!-- Carrega JS -->
<script src="js/base.js"></script>
</head>

<body>
<header>
  <div class="container">

    <div class="row">
      <div class="col-md-12">
          <div class="jumbotron">
              <h1>Templates de E-mail</h1>
              <p>Abaixo foi desenvolvido alguns templates de E-mail para o cliente Netforce.</p>
          </div>


      </div>
    </div>

    <form action="index.php" method="post">

      <div class="row">

        <div class="col-md-6">
          <label for="to">Para</label>
          <div class="input-group">

            <span class="input-group-addon" id="basic-addon3"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" id="to" name="to" aria-describedby="basic-addon3" placeholder="Ex.: João da Silva" required="" value="<?= @$_POST['to']; ?>">
          </div>
        </div>

        <div class="col-md-6">
          <label for="subject">Assunto</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
            <input type="text" class="form-control" id="subject" name="subject" aria-describedby="basic-addon3" placeholder="Ex.: Teste de e-mail" required="" value="<?= @$_POST['subject']; ?>">
          </div>
        </div>


      </div>


      <hr />

      <div class="row">



        <div class="col-md-12">


          <label for="subject">Body</label>
          <textarea class="form-control" id="body" name="body" required=""><?
if(isset($_POST['body'])){
  echo($_POST['body']);
} else {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="background-color:#F5F5F5;padding: 25px;font-family: Tahoma, Geneva, sans-serif;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td style="background-color: #F8F8F8; border: 1px solid #EEEEEE;; background-image: url(cid:logo); background-repeat:no-repeat; background-position: 15px center; line-height:72px;padding-left: 85px; font-size:20px;color: #666666;">Bem vindo</td>
</tr>
<tr>
<td style="border:1px solid #EEEEEE; border-top: 0; background-color: #FFF; padding: 35px; color:#666666;">
<p><strong>Bem vindo(a) Bruno Gonçalves.</strong></p>
<p>Seu cadastro foi concluído com sucesso. Utilize o e-mail bugotech@gmail.com para fazer seu login.</p>
<p><a href="http://login.netforce.com.br">http://login.netforce.com.br</a></p>
</td>
</tr>
</table>
<br /><br />
<center>
<span style="font-style:italic; font-size: 11px; margin-top:5px;">
Esta é uma mensagem automática, por favor não responda este e-mail.
Copyright 2016 Netforce Sistems Ltda.
</span>
</center>
</body>
</html><? }?></textarea>
        </div>
      </div>

      <?
      if(isset($_POST['to'])) {


          /* Envia E-mail */
          $mail = new PHPMailer;

          $mail->isSMTP();
          $mail->Host =             'smtp.gmail.com';
          $mail->SMTPAuth =         true;
          $mail->Username =         'zbra.enviador@gmail.com';
          $mail->Password =         'zbrazbra';
          $mail->SMTPSecure =       'ssl';
          $mail->Port =             465;

          $mail->addAddress($_POST['to']);

          $mail->addEmbeddedImage('images/logo.png', 'logo');

          $mail->setFrom('tiago@zbraestudio.com.br', utf8_decode('Z.BRa Estúdio [developer]'));
          $mail->isHTML(true);

          $mail->Subject = $_POST['subject'];
          $mail->Body    = $_POST['body'];


          if($mail->send()) {
          ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success" role="alert">Seu e-mail de teste foi enviado com sucesso.</div>
            </div>
          </div>
        <?
          } else {
          ?>
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">Ocorreu um erro ao tentar enviar o e-mail de teste.</div>
              <div class="alert alert-warning" role="alert"><strong>Informações técnicas:</strong> <?= $mail->ErrorInfo; ?></div>
            </div>
          </div>
        <?
          }
      }
      ?>

        <div class="row">

            <p style="margin-bottom: 15px;">Veja abaixo as imagens a disposição pra você utilizar:</p>

            <div class="col-xs-6 col-md-2">
                <div class="thumbnail">
                    <img src="images/logo.png">
                    <div class="caption">
                        <h3>cid:logo</h3>
                        <p>Logomarca utilizada nos cabeçalhos do template.</p>
                    </div>
                </div>
            </div>

        </div>

      <div class="row">

        <div class="col-md-12">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>

      </div>

    </form>

  </div>
</header>
</body>
</html>
