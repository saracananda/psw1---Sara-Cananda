<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>exemplo-post</title>
</head>
<body>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("header.php");
?>
<div class="tabela" style="height: 285px; display:flex; flex-direction: column; justify-content: center;">

<table style="border-collapse: collapse; margin:0px 0px 0px 10px; width:40%;">
    <tr style="border: 1px solid #3c4c65; text-align: left;">
        <td class="negrito" style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo "Nome";
        ?>
        </td>
        <td style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo $_POST ['nome'];
        ?>
        </td>
    </tr>
    <tr style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <td class="negrito" style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo "CPF";
        ?>
        </td>
        <td style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo $_POST ['cpf'];
        ?>
        </td>
    </tr>
    <tr>
        <td class="negrito" style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo "Data de nascimento";
        ?>
        </td>
        <td style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo $_POST ['dtnasci'];
        ?>
        </td>
    </tr>
    <tr style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <td class="negrito" style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo "Curso:";
        ?>
        </td>
        <td style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo $_POST ['curso'];
        ?>
        </td>
    </tr>
    <tr style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <td class="negrito" style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo "Telefone";
        ?>
        </td>
        <td style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo $_POST ['tel'];
        ?>
        </td>
    </tr>
    <tr style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <td class="negrito" style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo "E-mail";
        ?>
        </td>
        <td style="border: 1px solid #3c4c65; text-align: left; padding: 8px;">
        <?php 
        echo $_POST ['email'];
        ?>
        </td>
    </tr>
</table>

    <!-- <a href="./editar.php" style="margin-left: 10px;">Editar</a> -->

</div>

<form action="editar.php" method="post">
    <input type="hidden" name="nome" value="<?php echo $_POST ['nome'];?>">
    <input type="hidden" name="cpf" value="<?php echo $_POST ['cpf'];?>">
    <input type="hidden" name="dtnasci" value="<?php echo $_POST ['dtnasci'];?>">
    <input type="hidden" name="curso" value="<?php echo $_POST ['curso'];?>">
    <input type="hidden" name="tel" value="<?php echo $_POST ['tel'];?>">
    <input type="hidden" name="email" value="<?php echo $_POST ['email'];?>">

    <input type="submit" value="EDITAR" style="margin-left: 10px; width:70px; background-color: rgb(110, 110, 255);">
</form>

<form action="home.php" method="post">
    <input type="hidden" name="nome" value="<?php echo $_POST ['nome'];?>">
    <input type="hidden" name="cpf" value="<?php echo $_POST ['cpf'];?>">
    <input type="hidden" name="dtnasci" value="<?php echo $_POST ['dtnasci'];?>">
    <input type="hidden" name="curso" value="<?php echo $_POST ['curso'];?>">
    <input type="hidden" name="tel" value="<?php echo $_POST ['tel'];?>">
    <input type="hidden" name="email" value="<?php echo $_POST ['email'];?>">

    <input type="submit" value="HOME" style="margin-left: 10px; width:70px; background-color: rgb(110, 110, 255);">
</form>

<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("footer.php");
?>
</body>
</html>