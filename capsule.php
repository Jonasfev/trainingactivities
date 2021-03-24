<?php
    class Pai{
        private $nome = "Jonas";
        protected $sobrenome = "Félix";
        public $humor = "Sério";

        public function __get($atrib){
            return $this->$atrib;
        }
        public function __set($atrib, $valor){
            $this->$atrib = $valor;
        }
        private function executarMania(){
            echo "Assoviar";
        }

        protected function responder(){
            echo "Oi!";
        }

        public function executarAcao(){
            $x = rand(1,10);
            if ($x >= 1 && $x <= 8){
                $this->responder();
            } else {
                $this->executarMania();
            }
        }

    }

    class Filho extends Pai{
        //métodos
        public function __construct(){
            echo "<pre>";
            print_r(get_class_methods($this));  
            echo "</pre>";
        }
        
        private function executarMania(){
            echo "cantar";
        }
        
        public function x(){
            $this->executarMania();
        }

        protected function responder(){
            echo "olá!";
        }

    }


    $f = new Filho();
    print_r($f);
    echo "<br>";

    print $f->nome;
    echo "<br>";
    print $f->humor;

    echo "<br>";
    $t = new Pai();
    echo $t->nome;
    echo "<br>";
    $t->executarAcao();

?>