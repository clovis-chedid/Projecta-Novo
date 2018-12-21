<?php


    $tokenLink = explode('&',base64_decode($_GET['token']));
    foreach($tokenLink as $variable){
        $variable = explode('=',$variable);
        $GLOBALS[$variable[0]] = $variable[1];
    }
    // echo '<pre>';
    // print_r($GLOBALS);
    // echo '</pre>';
    $mysqli = new mysqli("localhost", "root", "", "projecta");
    $result = $mysqli->query("select * from controle_ativacao where id_usuario=".$id);
    
    while($row = $result->fetch_assoc()){
        $token = $row['token'];
    }
    if($_GET['token'] == $token){
        $mysqli->query("UPDATE usuario SET situacao=2 where id_usuario=".$id);
        header('location: /Projecta-Novo/login.php?s=1');
    }


?>