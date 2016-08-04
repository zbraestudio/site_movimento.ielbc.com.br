<?

function mail_quiz_getHtml($nome, $email, $telefone, $mensagem){

  $html = '<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body style="background-color:#F5F5F5;padding: 25px;font-family: Tahoma, Geneva, sans-serif;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td style="background-color: #F8F8F8; border: 1px solid #EEEEEE;; background-image: url(cid:logo); background-repeat:no-repeat; background-position: 15px center; line-height:72px;padding-left: 85px; font-size:20px;color: #666666;">
        Bem vindo
      </td>
    </tr>
    <tr>
      <td style="border:1px solid #EEEEEE; border-top: 0; background-color: #FFF; padding: 35px; color:#666666;">
        <p><strong>Olá ' . $nome . ', tudo bem?</strong></p>

        <p>Recebemos sua pergunta e assim que selecionarmos ela, será respondida em um de nossos encontros do NEXT\'s.
        Para saber mais sobre nossos encontros, <a href="http://movimento.ielbc.com.br">clique aqui</a>.</p>

        <p>Aproveite e faça mais perguntas! Pode fazer quantas quiser, corre lá: http://movimento.ielbc.com.br/quiz</p>

        <hr>

        <p>SUA PERGUNTA:</p>
        <span style="font-size: 20px;"> ' . nl2br($mensagem) . '</span>

        <p>Veja também, as demais informações que você enviou pra gente:</p>
        <ul>
          <li><strong>Nome:</strong> ' . $nome . '</li>
          <li><strong>E-mail:</strong> ' . $email . '</li>
          <li><strong>Celular:</strong> ' . $telefone . '</li>

        </ul>
      </td>
    </tr>
  </table>
  <br/><br/>
  <center>
<span style="font-style:italic; font-size: 11px; margin-top:5px;">
Esta é uma mensagem automática, por favor não responda este e-mail.
Copyright 2016 LIVRE Movimento Cristão.
</span>
  </center>
  </body>
  </html>';

  return $html;

}

function mail_quiz_send($nome, $email, $telefone, $mensagem){
  global $mailer, $url_site;

  $mailer->addAddress($email);
  $mailer->addCC('tiago@ielbc.com.br');

<<<<<<< HEAD
  $mail->CharSet =          'UTF-8';
  $mail->isSMTP();
  $mail->Host =             'smtp.gmail.com';
  $mail->SMTPAuth =         true;
  $mail->Username =         'zbra.enviador@gmail.com';
  $mail->Password =         'zbrazbra';
  $mail->SMTPSecure =       'ssl';
  $mail->Port =             465;
=======
  $mailer->Subject = 'Recebemos sua pergunta do QUIZ!';
  $mailer->Body    = mail_quiz_getHtml($nome, $email, $telefone, $mensagem);
>>>>>>> a2a945ab659067982e91097ea7d863bfef0fc727


  if($mailer->send()) {
    header('LOCATION: ' . $url_site . '/quiz-obrigado');
    exit;
  } else {
    die('ERRO: ' . $mail->ErrorInfo);
  }

}

?>