<?

require_once(get_config('site_path') . 'incs/mails.php');

function mail_quiz_getHtml($nome, $email, $telefone, $cidade, $pagina, $pergunta)
{

  $pagina = get_config('site_url') . $pagina;

  $html = '<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body style="background-color:#F5F5F5;padding: 25px;font-family: Tahoma, Geneva, sans-serif;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td style="background-color: #F8F8F8; border: 1px solid #EEEEEE;; background-image: url(cid:logo); background-repeat:no-repeat; background-position: 15px center; line-height:72px;padding-left: 85px; font-size:20px;color: #666666;">
        QUIZ
      </td>
    </tr>
    <tr>
      <td style="border:1px solid #EEEEEE; border-top: 0; background-color: #FFF; padding: 35px; color:#666666;">
        <p><strong>Olá ' . $nome . ', tudo bem?</strong></p>

        <p>Esse é um e-mail somente pra confirmar a você que já recebemos sua pergunta pro nosso QUIZ.
        Desde já estamos muito contentes que você participou e avisamos que todas as perguntas selecionadas serão respondidas nos encontros do NEXT.</p>

        <p>Caso você tenha urgência em falar com a gente, ligue para (47) 99650-6687 (Whats App e Telegram tmb!) ou escreva para <a href="mailto:tiago@livresweb.com">tiago@livresweb.com</a>.</p>

        <hr>

        <p>Veja também, as informações que você enviou pra gente:</p>
        <ul>
          <li><strong>Nome:</strong> ' . $nome . '</li>
          <li><strong>Telefone:</strong> ' . $telefone . '</li>
          <li><strong>E-mail:</strong> ' . $email . '</li>
          <li><strong>Cidade / UF:</strong> ' . $cidade . '</li>
          <li><strong>PERGUNTA:</strong> ' . $pergunta . '</li>
        </ul>
        <p>Você preencheu o formulário através da página: <a href="' . $pagina . '">' . $pagina . '</a></p>
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
function mail_quiz_send($nome, $email, $telefone, $cidade, $pagina, $pergunta){
  global $mailer;

  $mailer->addAddress($email);
  $mailer->addCC('tiago@livresweb.com');

  $mailer->Subject = "Olá $nome, recebemos sua pergunta!";
  $mailer->Body    = mail_quiz_getHtml($nome, $email, $telefone, $cidade, $pagina, $pergunta);

  if($mailer->send()) {

    $_SESSION['msg'] = array(
                            'title' => 'Opâ, recebemos sua pergunta!',
                            'msg' => 'Recebemos sua pergunta no nosso QUIZ.<br>As perguntas selecionadas serão respondidas nos encontros NEXTs. Ate la!'
    );
    header('LOCATION: ' . get_config('site_url') . 'msg');
    exit;
  } else {
    die('ERRO: ' . $mailer->ErrorInfo);
  }

}

?>