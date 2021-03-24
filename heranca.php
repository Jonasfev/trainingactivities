<?php

    //classe pai
    class Veiculo{
        public $placa = null;
        public $cor = null;

        //metódos

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
            
        }

        function __get($atributo){
            return  $atributo;
        }
    }

    //classe filho
    class Carro extends Veiculo{
        //atributo
        public $tetoSolar = true;
        //function
        function abrirTetoSolar(){
            $this->tetoSolar = true;
            return "Teto Solar está aberto";
        }

        function fecharTetoSolar(){
            $this->tetoSolar = false;
            return "Teto Solar está Fechado";
        }
    }


    class Moto extends Veiculo{
        public $contraPesoGuidao = true;
    }

    function darGrau(){
        return "Empinar a moto";

    }
    //testes das classes
    $kitt = new Carro("Holy", "Knight");
    echo "<pre>";
    print_r($kitt);
    echo "<br>";
    print_r(get_class_methods($kitt));
    echo "</pre>";
    echo $kitt->abrirTetoSolar();

    $v = new Veiculo("DBZ666", "Branco");
    echo "<pre>";
    print_r($v);
    echo "<br>";
    print_r(get_class_methods($v));
    echo "</pre>";

    $D = new Moto("Yamaha", "Branco");
    echo "<pre>";
    print_r($D);
    echo "<br>";
    print_r(get_class_methods($D));
    echo "</pre>";

?>