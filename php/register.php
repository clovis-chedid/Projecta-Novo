<?php

require_once __DIR__.'\db_connect.php';

use PHPMailer\PHPMailer\PHPMailer;

date_default_timezone_set('America/Sao_Paulo');

require '../mailer/PHPMailer.php';
require '../mailer/SMTP.php';
require '../mailer/POP3.php';
require '../mailer/OAuth.php';
require '../mailer/Exception.php';

if(isset($_SERVER['HTTP_REFERER']) and strpos($_SERVER['HTTP_REFERER'],'Projecta-Novo/cadastro.php') != false){
    $_POST['inputNome'] .= ' ';
    registrarUsuario($_POST);
}else{
    die(header('location: /Projecta-Novo/index.php'));
}

function registrarUsuario($info){
    $mysqli = new mysqli(db_host,db_usuario,db_senha,db_banco);
    $erro = "Nenhum";
    $email = $info['inputEmail'];
    $nome = $info['inputNome'];
    $senha = md5($info['inputSenha']);
    list($tipoUsuario,$porteUsuario,$erro) = checharPropositoPorte($info['inputPorte'],$info['inputProposito'],$_POST);
    $empresa = (isset($info['inputEmpresa'])) ? $info['inputEmpresa'] : 'Não especificada';
    $cargoEmpresa = (isset($info['inputCargo'])) ? $info['inputCargo'] : 'Não especificada';
    $query = 'select email from usuario where email="'.$email.'"';
    $result = $mysqli->query($query);
    if($result->num_rows == '0'){
        $query = sprintf("INSERT INTO usuario (nome,senha,email,situacao) VALUES ('%s','%s','%s','1')",$nome,$senha,$email);
        $mysqli->query($query);
        $idUsuario = $mysqli->insert_id;
        $query = sprintf("INSERT INTO empresa (nome_empresa,nome_contato,email_contato,telefone_contato) VALUES ('%s','%s','%s','%s')",$info['inputEmpresa'],$nome,$email,$info['inputTelefone']);
        $mysqli->query($query);
        $idEmpresa = $mysqli->insert_id;
        if($porteUsuario != 'Pessoa Física'){
            $tipoPessoa = 'J';
        }else{
            $tipoPessoa = 'F';
        }
        $query = sprintf("INSERT INTO conta (tipo_pessoa,id_empresa,id_usuario,id_categoria) VALUES ('%s','%s','%s','%s')",$tipoPessoa,$idEmpresa,$idUsuario,$tipoUsuario);
        $mysqli->query($query);
        $idConta = $mysqli->insert_id;
        $query = sprintf("INSERT INTO acesso (id_usuario,id_conta,email,tipo_acesso,status) VALUES ('%s','%s','%s','1','1')", $idUsuario,$idConta,$email);
        $mysqli->query($query);
        $uid = uniqid(rand(),true);
        $token = base64_encode('id='.$idUsuario.'&email='.$email.'&uid='.$uid.'&chave='.time());
        $mysqli->query("INSERT INTO controle_ativacao (id_usuario,email,uid,token) VALUES ('".$idUsuario."','".$email."','".$uid."','".$token."')");
        $link = 'http://192.168.5.102/Projecta-Novo/ativar.php?token='.$token;
        enviarEmail($email,$link, $nome);
    }else{
        $erro = 'Email já existente';
        header('location: /Projecta-Novo/cadastro.php?e=2'); 
    }
}

function checharPropositoPorte($porte,$proposito,$info){
    $tipoUsuario = '';
    $porteUsuario = '';
    switch($info['inputProposito']){
        case '1':
            $tipoUsuario = '3';
            break;
        case '2':
            $tipoUsuario = '2';
            break;
        case '3':
            $tipoUsuario = '4';
            break;
        default:
            $erro = "Campo Preenchido Incorretamente";
            header('location: /Projecta-Novo/cadastro.php?e=3&a=a'.$info['inputPorte']);
    }
    switch($info['inputPorte']){
        case '1':
            $porteUsuario = 'Grande Empresa';
            break;
        case '2':
            $porteUsuario = 'Média Esmpresa';
            break;
        case '3':
            $porteUsuario = 'Pequena Empresa';
            break;
        case '4':
            $porteUsuario = 'Micro Empresa';
            break;
        case '5':
            $porteUsuario = 'Empresa Individual';
            break;
        case '6':
            $porteUsuario = 'Pessoa Física';
            break;
        default:
            $erro = "Campo Preenchido Incorretamente";
            header('location: /Projecta-Novo/cadastro.php?e=3&a='.$info['inputPorte']);
    }
    return array($tipoUsuario,$porteUsuario,$erro);
}
function enviarEmail($destinatario, $link, $nomeCliente){
    $mail = new PHPMailer();

    $mail->IsSMTP(true);
    $mail->Host = "ssl://smtp.gmail.com"; 
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'davif127@gmail.com';  //LOGIN
    $mail->Password = ''; //SENHA

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

    $enviado = $mail->Send();

    $mail->ClearAllRecipients();
    $mail->ClearAttachments();

    if ($enviado) {
        header('location: /Projecta-Novo/cadastro.php?e=0&email='.$destinatario);
    }elseif(!$enviado){
        header('location: /Projecta-Novo/cadastro.php?e=1');
    }
}
