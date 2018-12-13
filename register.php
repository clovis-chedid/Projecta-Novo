<?php
/**
 * This example shows making an SMTP connection without using authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/Sao_Paulo');

require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/POP3.php';
require 'mailer/OAuth.php';
require 'mailer/Exception.php';
echo '<pre>';
echo print_r($_SERVER);
echo '</pre>';

if(isset($_SERVER['HTTP_REFERER']) and strpos($_SERVER['HTTP_REFERER'],'Projecta-Novo/cadastro.php') != false){
    $mysqli = new mysqli("localhost", "root", "", "teste");
    $erro = "Nenhum";
    $uid = uniqid('a',true);
    $email = $_POST['inputEmail'];
    $nome = $_POST['inputNome'];
    $senha = md5($_POST['inputSenha']);
    $tipoUsuario = 0;
    $porteUsuario = 0;
    $empresa = (isset($_POST['inputEmpresa'])) ? $_POST['inputEmpresa'] : 'Não especificada';
    $cargoEmpresa = (isset($_POST['inputCargo'])) ? $_POST['inputCargo'] : 'Não especificada';
    switch($_POST['inputProposito']){
        case '1':
            $tipoUsuario = '1';
            break;
        case '2':
            $tipoUsuario = '2';
            break;
        case '3':
            $tipoUsuario = '3';
            break;
        default:
            $erro = "Campo Preenchido Incorretamente";
    }
    switch($_POST['inputPorte']){
        case '1':
            $porteUsuario = '1';
            break;
        case '2':
            $porteUsuario = '2';
            break;
        case '3':
            $porteUsuario = '3';
            break;
        case '4':
            $porteUsuario = '4';
            break;
        case '5':
            $porteUsuario = '5';
            break;
        case '6':
            $porteUsuario = '6';
            break;
        default:
            $erro = "Campo Preenchido Incorretamente";
    }
    $token = md5($email).md5($uid);
    $mysqli->query("INSERT INTO usuarios (nome,email,ativo,uid) VALUES ('Davi','".$email."',0,'".$uid."')");
    $result = $mysqli->query("select id,email from usuarios where email='".$email."'");
    $id = 0;
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
    }
    $link = 'http://localhost/Projecta-Novo/ativar.php?token='.$token.'&id='.$id;
    $nomeCliente = $_POST['inputNome'];
    enviarEmail($email,$link, $nomeCliente);
    
}else{
    die(header('location: /Projecta-Novo/index.php'));
}



function enviarEmail($destinatario, $link, $nomeCliente){
    $mail = new PHPMailer();

    $mail->IsSMTP(true);
    $mail->Host = "ssl://smtp.gmail.com"; 
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'davif127@gmail.com';  //LOGIN
    $mail->Password = 'sabedori&1A'; //SENHA

    //$mail->SMTPDebug  = 2; 

    $mail->From = "davif127@gmail.com";
    $mail->FromName = "Projecta"; 

    $mail->AddAddress($destinatario, $nomeCliente);
    $mail->IsHTML(true); 
    $mail->CharSet = 'utf-8';
    $mail->Subject  = "Ative sua conta Projecta"; 
    //$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
    $mail->msgHTML('
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Sua conta Projecta</title>
</head>
<body>
<div style="text-align: center; width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
  <h3>Ativação de sua conta Projecta</h3>
  <p>Olá <strong>'.strstr($nomeCliente,' ', true).'</strong>,</p></br>
  <p>Este é o link para ativar sua conta trial Projecta:<br>'.$link.'</p>
  <small>Agradecemos a preferencia pelo Projecta!</small>
</div>
</body>
</html>
    
    ');
    //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");

    $enviado = $mail->Send();

    $mail->ClearAllRecipients();
    $mail->ClearAttachments();

    if ($enviado) {
        header('location: /Projecta-Novo/cadastro.php?e=0&email='.$destinatario);
    }
    else {
        header('location: /Projecta-Novo/cadastro.php?e=1');
    }
}