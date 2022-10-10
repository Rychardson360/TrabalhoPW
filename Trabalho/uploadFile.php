<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Arquivos</title>
   <style>
    body{
        background-color: antiquewhite;
    }
</style>
</head>
<body>   
</body>
</html>

<?php
$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeF = $_FILES['userfile']['name'];

$interior = $_POST['interior'];

if(is_dir($interior)){

}else{
    mkdir($interior);
}

$parInfo = pathinfo("$nomeF");

$ext = $parInfo['extension'];

$extp = array("jpg","jpeg","png");

if(in_array($ext, $extp)){
   $ctr = move_uploaded_file($nomeTemp,$interior."/".$nomeF);

 if($ctr){
    echo "Upload Realizado";
 }else{
    echo "Upload Não Realizado";
 }
}
else{
   echo "Extensão não permitida";  
}

echo"<br> <br> <a href='tabela.php?'>Tabela de Imagens</a><br>";


?>