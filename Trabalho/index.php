<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria dos Imóveis</title>
</head>
<style>
    body{
        background-color: antiquewhite;
    }
</style>
<body>
    <form enctype="multipart/form-data" method="post" action="uploadFile.php">
   <h2>Galeria de Imóveis</h2>
   <p>Nome do Diretório: <input type="text" name="interior"> </p>
   <p><input name="userfile" type="file"></p>
   <p> <button type="submit"> Enviar </button> </p>
</form> 
</body>
</html>