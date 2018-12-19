<?php
require_once 'db_connect.php';
$mysqli = new mysqli(db_host,db_usuario,db_senha,db_banco);
extract($_POST);
$query = sprintf("select * from usuario where email='%s'",$inputEmail);
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
    if($result->num_rows > 1){
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $senha = $row['senha'];
        $nome = $row['nome'];
    }else{
        while($row = $result->fetch_assoc()) {
            $email = $row['email'];
            $senha = $row['senha'];
            $nome = $row['nome'];
            // print_r($row);
        }
    }
    if($senha == md5($inputSenha)){
        $_SESSION['email'] = $inputEmail;
        $_SESSION['nome'] = $nome;
        echo true;
        // echo '<br>';
        // print_r($_SESSION);
    }
} else {
    $error = 'Email ou senha incorretos';
    echo false;
}




?>