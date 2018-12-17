<?php
$oldJson = json_decode(file_get_contents('strings.json'),true);
foreach($_GET as $string){
    if($string != 'edit'){
        $stringEdit = explode(';;;',$string);
        $fileExtension = explode('.',$stringEdit[2]);
        $fileArray = "pagina-".$fileExtension[0];      
        $oldJson[$fileArray]['str-'.$stringEdit[1]] = $stringEdit[0];
    }
}
// echo $fileArray;
// echo '<pre>';
// print_r($oldJson);
$newJson = json_encode($oldJson);
file_put_contents('strings.json',$newJson);
header('location: '.$_SERVER['HTTP_REFERER']);



?>