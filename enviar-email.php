<?php

session_start();

// Recebendo dados do formulário
$tipo = $_POST['tipo'];
$paginas = $_POST['paginas'];
$gerencia = $_POST['gerencia'];

if($tipo == 'agendamento'):
  $precobase = 150;
else:
  $precobase = 100;
endif;

$adicional1 = $paginas * 50;

if($gerencia == 'Sim'):
  $adicional2 = 150;
else:
  $adicional2 = 0;
endif;

$total = $precobase + $adicional1 + $adicional2;

// Recebendo dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = "Nova Solicitação";
$message = $_POST['message'];

$headers = "Content-Type: text/plain;charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de Orçamento\r\n";
$corpo .= "Tipo de Site: " . $tipo . "\r\n";
$corpo .= "Quantidade de Páginas: " . $paginas . "\r\n";
$corpo .= "Gerência: " . $gerencia . "\r\n";
$corpo .= "Preço do Site: R$ " . $total . "\r\n";
$corpo .= "Nome: " . $name . "\r\n";
$corpo .= "Email: " . $email . "\r\n";
$corpo .= "Telefone: " . $phone . "\r\n";

// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'contato@devlight.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso

  $_SESSION['mensagem'] = "Solicitação enviada com sucesso!
       <br> Tipo de Site: ".$tipo."
       <br> Quantidade de Páginas: ".$paginas."
       <br> Gerenciamento: ".$gerencia."
       <br> Valor do Site: R$ ".$total.",00"."<br> Entraremos em contato em breve.".
  header('location:answer.php?status=sucesso');
else:
  // Se der erro
  header('location:answer.php?status=erro');
endif;

?>