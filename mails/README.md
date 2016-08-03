#Template de E-mails da Netforce
Esse projeto é dedicado ao templates de e-mail da Netforce.

### Exemplo
Abaixo um exemplo de como utilizar os templates no PHP:
    
    
    $html  = '<html>
              <head>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
              </head>
              <body style="background-color:#F5F5F5;padding: 25px;font-family: Tahoma, Geneva, sans-serif;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              <td style="background-color: #F8F8F8; border: 1px solid #EEEEEE;; background-image: url(cid:logo); background-repeat:no-repeat; background-position: 15px center; line-height:72px;padding-left: 165px; font-size:20px;color: #666666;">Bem vindo</td>
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
              </html>':
    
    
    $mail = new PHPMailer;
    
    $mail->isSMTP();
    $mail->Host =             'smtp.gmail.com';
    $mail->SMTPAuth =         true;
    $mail->Username =         'zbra.enviador@gmail.com';
    $mail->Password =         'zbrazbra';
    $mail->SMTPSecure =       'ssl';
    $mail->Port =             465;
    
    $mail->addAddress('bugotech@gmail.com');
    
    $mail->addEmbeddedImage('images/logo.png', 'logo'); //caminho físico (path) da imagem
    
    $mail->setFrom('tiago@zbraestudio.com.br', utf8_decode('Z.BRa Estúdio [developer]'));
    $mail->isHTML(true);
    
    $mail->Subject = 'Assunto do e-mail';
    $mail->Body    = $html;
    
    
    if($mail->send()) {
        die('Enviado com sucesso!');
    else
        die('Ocorreu um erro ao tentar enviar o e-mail!' . $mail->ErrorInfo);


