<?php 
    class pessoa{
        public $name = null;
        
        function __construct($name){
            echo "<br>Objeto Inicializado";
            $this->nome = $name;
            
        }

        function __destruct(){
            echo "<br> Objeto Destruido";
        }

        function correr(){
            return $this->nome . ' está correndo.';
        }
    }

    $atetla = new pessoa("Breno");

    echo "<br> ". $atetla->correr();

    unset($pessoa);
?>