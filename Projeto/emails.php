<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


// emails para quem será enviado o formulário
  $emailenviar = $email;
  $destino = $emailenviar;
  $assuntos = $assunto;

  // É necessário indicar que o formato do e-mail é html
  $headers .= "To: {$nome} <{$email}>, Kelly <kelly@example.com>" . "\r\n";
  $headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
  $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
  $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assuntos, $msg, $headers);
  return $enviaremail;
//   if($enviaremail){ echo 'aqui';
//   $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
//   echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
//   } else {
//   $mgm = "ERRO AO ENVIAR E-MAIL!";
//   echo "";
//   }
?>