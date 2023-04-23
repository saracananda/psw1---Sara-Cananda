<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>exemplo-post</title>
</head>
<body style='margin: 0px; border:0px;'>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("header.php");
?>
    <div class="cadastro">
        <form class="form" method="post" action="mostrealuno.php">

        <h2 class="titulocadastro" style="font-size:30px;">FORMULÁRIO DE CADASTRO:</h2>
        <br>

        <div class="blocos">
            <div class="bloco1">
                <label for="nome">NOME:</label> <br>
                <input type="text" name="nome" placeholder="Digite seu nome" required/>
                <br>
                <label for="cpf">CPF:</label> <br>
                <input type="number" name="cpf" id="cpf" placeholder="Digite seu CPF" required>
                <br>
                <label for="dtnasci">DATA DE NASCIMENTO:</label> <br>
                <input type="text" name="dtnasci" id="dtnasci" placeholder="XX/XX/XXXX" required>
            <br>
            </div>
            <div class="bloco2">
                <label for="curso">CURSO:</label> <br>
                <input type="text" name="curso" id="curso" placeholder="Digite seu curso" required>
                <br>
                <label for="tel">TELEFONE:</label> <br>
                <input type="number" name="tel" id="tel" placeholder="11 digitos" required>
                <br>
                <label for="email">EMAIL:</label> <br>
                <input type="email" name="email" id="email" placeholder="Digite seu email" required>
            </div>
        </div>
            <br>
        <div class="botaofim">
            <button type="submit" class="btn">
                <b>Obter Dados Post</b>
            </button>
        </div>
    </div>

<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once ("footer.php");
?>
</body>
</html>