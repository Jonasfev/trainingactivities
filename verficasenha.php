<?php
    interface loginsInterface{
        public function verificaLogin();
    }

    class validaLogin implements loginsInterface{
        private $login = null;
        private $senha = null;

        public function __construct($login, $senha){
            $this->login = $login;
            $this->senha = $senha;
        }
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public  function verificaLogin(){
            $arrayLogin = array("foo", "bar", "hello");
            $arraySenha = array("123", "1234", "12345");

            for ($i = 0; $i < sizeof($arrayLogin); $i++){
               
                if($this->login == $arrayLogin[$i] && $this->senha == $arraySenha[$i]){
                    echo "Login Valido";
                    break;
                } else {
                    echo "Login não Validado";
                    echo "<br>";
                }
            }
        }
    }
    $logon = new validaLogin($_POST['nome'], $_POST['password']);
    $logon->verificaLogin();
?>