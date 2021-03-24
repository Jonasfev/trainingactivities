<?php
    $dsn = "mysql:host=sql308.unaux.com;dbname=unaux_26273168_PDO";
    $usuario = "unaux_26273168";
    $senha = "sa21dr07";

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        // $query = "create table tb_usuarios(id int not null primary key auto_increment, nome varchar(50) not null, email varchar(100) not null, senha varchar(32) not null)";

        // $retorno = $conexao->exec($query);

        // echo $retorno;

        // $query =  'insert into tb_usuarios(nome, email, senha)
        // values ("Jonas Félix", "JonasFelixVieira@gmail.com", "123456")';
        // $retorno = $conexao->query($query);


        // $query =  'insert into tb_usuarios(nome, email, senha)
        // values ("Breno Gay", "BrenoGay@gmail.com", "123456")';
        // $retorno = $conexao->query($query);

        // $query =  'insert into tb_usuarios(nome, email, senha)
        // values ("André", "Andrepjl@gmail.com", "123456")';
        // $retorno = $conexao->query($query);

        $query = "select * from tb_usuarios";

        $stmt = $conexao->query($query);

        $lista = $stmt->fetch();
        echo "<pre>";
        print_r($lista);
        echo "</pre>";
        // $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // foreach($lista as $key=>$value){
        //     echo $value['nome'];
        //     echo "<hr>";
        
        // }

    } catch (PDOException $e){
        echo "<br>Erro: " . $e->getCode();
        echo "<br>Mensagem: " . $e->getMessage();
        echo "<br>Arquivo: " . $e->getFile();
        echo "<br>Linha: " . $e->getLine();
    }
?>