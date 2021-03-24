<?php

    interface mostrarEsconder{
        public function show();
        public function hidden(); 
    }
    
     class ponto implements mostrarEsconder{
        //atributos
        private $X = null;
        private $Y = null;
        protected $cor = null;

        //métodos
        public function __construct($X, $Y, $cor){
            $this->X = $X;
            $this->Y = $Y;
            $this->cor = $cor;
        }

        public function __get($atrib){
            return $this->$atrib;
        }

        public function show(){
            echo "Mostrar o ponto";
        }

        public function hidden(){
            echo "Ponto escondido";
        }

        public function showHiden($x){
            if ($x = 1 ){
                $this->show();
            } else {
                $this->hidden();
            }
        }
        protected function mover($newX, $newY){
            $this->X = $newX;
            $this->Y = $newY;
            echo "Ponto movido";
        }

        protected function trocaCor($cor){
            $this->cor = $cor;
        }
    }

    class circulo extends ponto{
        //atributo
        public $raio = null;
        public $preenchimento = null;

        //metodos
        public function __construct($X, $y, $raio, $cor, $preenchimento){
            $this->X = $X;
            $this->Y = $y;
            $this->cor = $cor;
            $this->raio = $raio;
            $this->preenchimento = $preenchimento;
        }

        public function show(){
            echo "Mostrar circulo";
        }

        public function hidden(){
            echo "Circulo escondido";
        }

        public function showHiden($x){
            if ($x = 1 ){
                $this->show();
            } else {
                $this->hidden();
            }
        }

        protected function mover($newX, $newY){
            $this->hidden(0);
            $this->X = $newX;
            $this->Y = $newY;
            $this->show(1);
            echo "Circulo movido";
        }

        protected function trocarPreenchimento($preenchimento){
            $this->preenchimento = $preenchimento;
            echo "Preenchimento trocado";
        }

        

        protected function mudarTamanho($raio){
            $this->raio = $raio;
            echo "Tamanho alterado";
        }
    }

    class linha extends ponto{
        //atributos
        public $xFinal = null;
        public $yFinal = null;
        
        //métodos
        function __construct($X, $y, $xFinal, $yFinal, $cor){
            $this->X = $X;
            $this->Y = $y;
            $this->xFinal = $xFinal;
            $this->yFinal = $yFinal;
            $this->cor = $cor;
        }

        public function show(){
            echo "Mostrar a linha";
        }

        public function hidden(){
            echo "Linha escondido";
        }

        public function showHiden($x){
            if ($x = 1 ){
                $this->show();
            } else {
                $this->hidden();
            }
        }
        public function mover($newX, $newY){
            $this->hidden(0);
            $this->X = $newX;
            $this->Y = $newY;
            $this->show(1);
            echo "Figura movido";
        }

    }

    class retangulo extends linha{
        //atributo
        public $preenchimento = null;

        //métodos
        public function __construct($X, $Y, $xFinal, $yFinal, $cor, $preenchimento){
            $this->X = $X;
            $this->Y = $Y;
            $this->xFinal = $xFinal;
            $this->yFinal = $yFinal;
            $this->cor = $cor;
            $this->preenchimento = $preenchimento;
        }

        public function show(){
            echo "Mostrar retangulo";
        }

        public function hidden(){
            echo "Retangulo escondido";
        }

        public function showHiden($x){
            if ($x = 1 ){
                $this->show();
            } else {
                $this->hidden();
            }
        }
        
        protected function trocarPreenchimento($preenchimento){
            $this->preenchimento = $preenchimento;
            echo "Preenchimento trocado";
        }
    }

    $P = new ponto(10,20,"red");
    $C = new circulo(10,20,20,"red",50);
    $R = new retangulo(10,20,10,20,"red",20);
    $l = new linha(10,20,20,20,"red");


    echo "<pre>";
    print_r($P);
    $r = rand(0,2);
    $P->showHiden($r);
    echo "</pre>";
    echo "<pre>";
    print_r($C);
    $r = rand(0,2);
    $C->showHiden($r);
    echo "</pre>";
    echo "<pre>";
    print_r($R);
    $r = rand(0,2);
    $R->showHiden($r);
    echo "</pre>";
    echo "<pre>";
    print_r($l);
    $r = rand(0,2);
    $l->showHiden($r);
    echo "</pre>";
?>