<?php
    class funcionario{
        //atributos
        public $nome = "Karina";
        public $telefone = "(12)98889-4545";
        public $numFilhos = "0";

        //metodos
        function resumCadFun(){
            return "$this->nome possui $this->numFilhos filhos(as)";
        }
        function modifyNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;

        }

        function modifyNome($nome){
            $this->nome = $nome;

        }
    }

    $func01 = new funcionario;

    echo $func01->resumCadFun();
    echo '<br>';
    $func01->modifyNumFilhos(2);
    echo $func01->resumCadFun();
    echo '<br>';
    $func02 = new funcionario;
    $func02->modifyNome("Marcelo");
    $func02->modifyNumFilhos(4);
    echo $func02->resumCadFun();
?> 