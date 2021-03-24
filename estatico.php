<?php
    class exemplo {
        public static $atributo1 = "Este é um atributo estático.";
        public $atributo2 = "Este é um atributo normal.";
        
        public static function metodo1(){
            echo "Este metódo é estático.";
        }
        
        public function metodo2(){
            echo "Este metódo é normal.";
        }
    }
    echo "Programação WEB BackEnd - 2DTA";
    echo "<hr>";
   
    echo exemplo::$atributo1;
    echo "<br>";
    exemplo::metodo1();
    echo "<br>";
    $x = new exemplo();

    echo $x->metodo1();
    echo "<br>";
    echo $x->metodo2();
    echo "<br>";
    echo $x->atributo1;
    echo "<br>";
    echo $x->atributo2;
?>