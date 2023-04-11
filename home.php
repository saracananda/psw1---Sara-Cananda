<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("header.php");
?>
<div class="inicio" style="height: 385px;  display: flex; flex-wrap: nowrap;align-items: center; justify-content: center; margin: 0px; padding: 0px;">
    <div class="opcoes">
        <div class="direcionar_para_cadastro">
            <form action="cadaluno.php" method="post">
                <input type="submit" value="Cadastrar-se" style="margin-left: 10px; width:300px; background-color: rgb(110, 110, 255);  font-size: 20px;">
            </form>
        </div>
        <div class="ver_dados">
            <form action="mostrealuno.php" method="post">
                <input type="submit" value="Já possuo cadastro" style="margin-left: 10px; width:300px; background-color: rgb(110, 110, 255);  font-size: 20px;">
            </form>
        </div>
</div>

    

</div>






<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("footer.php");
?>
</body>
</html>