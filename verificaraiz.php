<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $delta = null;
    $x1 = 0;
    $x2 = 0;

    class classeError extends Exception {
        public $erro = null;

        public function __construct($erro){
            $this->erro = $erro;
            
        }

        public function ExibirMensagem(){
            echo "<div style ='border: 1px solid red; background-color:green; color:white;'>";
            echo $this->erro;
            echo"</div>";
        }
    }
    try{
        $delta =  (($b*$b)-(4*$a*$c));
        if($delta >= 0 && $a != 0){
            
            $x1 = (  ( -$b + (sqrt($delta))  )  / ( 2*$a ) );
            $x2 = (  ( -$b - (sqrt ($delta) )  )  / ( 2*$a ) );
            echo "x1 vale =:" .$x1;
            echo "<br>";
            echo "x2 vale =:" .$x2;
        } else{
            throw new classeError("Delta Invalido");
        }
    } catch(classeError $e){
        echo "<h3>==================== trowh ============================</h3>";
        $e->ExibirMensagem();
    }
    
    
?>