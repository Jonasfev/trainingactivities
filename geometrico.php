<?php
//Implemente um conjunto de classes, utilizando heranças, para representar os atributos e métodos dos seguintes objetos geométricos do plano: Linha, Quadrado, Circulo. Lembre-se de que estas serão classes filho, por tanto há a necessidade de abstrair e implementar todas as classes necessárias.
    class Ponto{
        public $cor = null;
        public $x = null;
        public $y = null;
        public $a = null;
        public $b = null;

        function __construct($x, $y, $cor, $a, $b){
            $this->x = $x;
            $this->y = $y;
            $this->cor = $cor;
            $this->a = $a;
            $this->b = $b;
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $atributo;
        }

        function desenhar(){
            echo "Ponto Colocado";
        }
    }

    class Linha extends Ponto{
        function desenhar(){
            return "Linha Desenhada em ponto inicial: " . $this->x ." em ponto final: ". $this->y ;
        }
    }

    class Quadrado extends Ponto{
        function desenhar(){
            
            return "Quadadro desenha nas coordenas: ". $this->x. " " . $this->y. " " . $this->a . " " . $this->b . " ";
        }
    }

    class Circulo extends Ponto{
        function desenhar(){
            return "Circulo Desenhado em ponto inicio: ". $this->x ." final: ". $this->x;
        }
    }
//testes das classes
$lin1 = new Linha(0, 5 , "Verde", null, null);
echo "<pre>";
print_r($lin1);
echo "<br>";
print_r(get_class_methods($lin1));
echo "</pre>";
echo $lin1->desenhar();

$quad = new Quadrado (2, 10 , "Verde", -2, -10);
echo "<pre>";
print_r($quad);
echo "<br>";
print_r(get_class_methods($quad));
echo "</pre>";
echo $quad->desenhar();

$D = new Circulo (0, 5, "Verde", null, null);
echo "<pre>";
print_r($D);
echo "<br>";
print_r(get_class_methods($D));
echo "</pre>";
echo $D->desenhar();

?>