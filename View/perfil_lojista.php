<?php
session_start();

$_SESSION['usuarioEmail'];
$_SESSION['usuarioSenha'];

if (!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])) {

    header("Location: index.html");

    exit;
} else {

?>
    <html>

    <head>
        <title>Perfil Usuário </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilo_index.css">
    </head>

    <body>
        <div>

            <?php echo "<span>";
            echo "Olá, ";
            echo "</span>";
            echo "<span>";
            echo $_SESSION['usuarioEmail'];
            echo "</span>"; ?>
            <br><br>

            <form action="sair.php">
                <input type="submit" value="Deslogar" name="deslogar">
            </form>
        </div>
    </body>

    </html>
<?php } ?>