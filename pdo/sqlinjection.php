<?php
$dsn = "mysql:host=sql308.unaux.com;dbname=unaux_26273168_PDO";
$usuario = "unaux_26273168";
$senha = "sa21dr07";


if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = "select * from tb_usuarios where ";
        $query .= "email = '{$_POST['usuario']}' ";
        $query .= "AND senha = '{$_POST['senha']}' ";

        $stmt = $conexao->query($query);

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $lista = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<pre>";
        print_r($lista);
        echo "</pre>";


    } catch (PDOException $e) {
        echo "<br>Erro: " . $e->getCode();
        echo "<br>Mensagem: " . $e->getMessage();
        echo "<br>Arquivo: " . $e->getFile();
        echo "<br>Linha: " . $e->getLine();

    } catch (Error $e) {
        echo "<br>Erro: " . $e->getCode();
        echo "<br>Mensagem: " . $e->getMessage();
        echo "<br>Arquivo: " . $e->getFile();
        echo "<br>Linha: " . $e->getLine();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="sqlinjection.php" method="POST">
        <input type="text" name="usuario" placeholder="usuario">
        <br>
        <input type="password" name="senha" placeholder="senha">
        <br>
        <button type="submit">okay</button>
    </form>

</body>

</html>