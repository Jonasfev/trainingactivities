<?php
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
        throw new classeError("Teste");

    } catch(classeError $e){
        echo "<h3>==================== trowh ============================</h3>";
        $e->ExibirMensagem();
    }

?>