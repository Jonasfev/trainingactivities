<?php
session_start();


Interface calcularInterface{
    public function calcular();
}

class calculo implements calcularInterface{
    private $valorA;
    private $valorB;
    protected $resultado;

    //métodos
    public function __construct($valorA, $valorB, $operador){
        $this->valorA = $valorA;
        $this->valorB = $valorB;
        $this->operador = $operador;

    }

    public function __get($atrib){
        return $this->$atrib;
    }

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }


    
    public function calcular(){

        switch ($_POST['sinal']){
            case "+":
                $resultado = $this->valorA + $this->valorB;
                $_SESSION['Retorno']= $resultado;

            break;
            case "-":
                $resultado = $this->valorA - $this->valorB;
                $_SESSION['Retorno']= $resultado;

            break;
            case "/":
                $resultado = $this->valorA / $this->valorB;
          
                $_SESSION['Retorno']= $resultado;

            break;
            case "*":
                $resultado =$this->valorA  * $this->valorB;
                
                $_SESSION['Retorno']= $resultado;

            break;
            case "%":
                $resultado = $this->valorA / $this->valorB * 100 ."%";
                
                $_SESSION['Retorno']= $resultado;
            break;
        }
    }
}

class classeError extends Exception {
    public $erro = null;

    public function __construct($erro){
        $this->erro = $erro;
        
    }

    public function ExibirMensagem(){
        $error =  $this->erro;
        $_SESSION['Retorno']= $error; 
        header("Location: calc.php");
        
    }
}

try{
    
    if($_POST['num2'] == 0 && ($_POST['sinal'] == "/" || $_POST['sinal'] == "%")){
        throw new classeError("ノಠ_ಠノ Número Inválido, baka! ノಠ_ಠノ");


    
    } else {
        $calc = new calculo($_POST['num1'], $_POST['num2'], $_POST['sinal']);
        $calc->calcular();

    }

} catch(classeError $e){
    $e->ExibirMensagem();
} finally{
    header("Location: calc.php");
}
$calc = new calculo($_POST['num1'], $_POST['num2'], $_POST['sinal']);

?>