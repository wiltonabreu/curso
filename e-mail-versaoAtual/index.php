<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("vendor/autoload.php");
 

$mail = new PHPMailer();
 

$mail->IsSMTP();
$mail->SMTPDebug = 1;

//Define o servidor de envio
$mail->Host = 'mail.mav.com.br';
$mail->SMTPAuth = true;


$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->Port = 587;
$mail->Username = 'wilton@mav.com.br'; 
$mail->Password = '123.qwe'; 
 
//Define os Remetente 
$mail->setFrom('wilton@mav.com.br',"Wilton Abreu de Paula"); 

 
//Define os destinatário(s)     
$mail->AddAddress('wilton.abreu@mav.com.br');
$mail->AddAddress('wilton@mav.com.br');
 

$mail->IsHTML(true); 
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional) 

$mail->Subject  = "Teste PHP_MAILER_6.0.2"; 

$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//$mail->Body = 'Teste de envio de e-mail do curos PHP 7.0" 

//A linha abaixo é utilizada para anexar arquivos.
//$mail->addAttachment('images/phpmailer_mini.png');


 
// Exibe uma mensagem de resultado
if (!$mail->Send())
{
	echo "Não foi possível enviar o e-mail: ". $email->Errorinfo;
} else
{
	echo "E-mail enviado com sucesso!";

}

$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
?>