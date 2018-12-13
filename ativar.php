<?php



    $mysqli = new mysqli("localhost", "root", "", "teste");
    $uid = "";
    $id = 0;
    $email = "";
    $mysqli->query("INSERT INTO usuarios (nome,email,ativo) VALUES ('Davi','".$email."',0)");
    $result = $mysqli->query("select id,email,uid from usuarios where id='".$_GET['id']."'");
    $id = 0;
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $email = $row['email'];
        $uid = $row['uid'];
    }
    $token = md5($email).md5($uid);
    if($_GET['token'] == $token){
        $mysqli->query("UPDATE usuarios SET ativo=1");
        header('location: /Projecta-Novo/index.php');
    }


?>