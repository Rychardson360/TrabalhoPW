<form action="excluir.php" method="post">
    <p> Escreva o cômodo da pasta a ser excluído <input type="text" name="excluir"></p>
    <?php
    $excul = $_POST['excluir'];
    if(is_dir($excul)){
        $new = scandir($excul);
        array_shift($new);
        array_shift($new);
        foreach($new as $newTwo){
            unlink("$excul/$newTwo");
        }
        rmdir($excul);
    }
    ?>
    <button type="submit"> Excluir </button>
</form>