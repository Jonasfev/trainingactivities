<?php
    class funcionario{
        //atributo
        public $nome=null;
        public $telefone=null;
        public $numFilhos=null;

        //metódos

        // function setNome($nome){
        //     $this->nome = $nome;
        // }

        // function setTelefone($telefone){
        //     $this->telefone = $telefone;
        // }

        // function setNumFilhos($numFilhos){
        //     $this->numFilhos = $numFilhos;
        // }

        // function getNome(){
        //    return $this->nome;
        // }

        // function getTelefone(){
        //    return $this->telefone;
        // }

        // function getNumFilhos(){
        //     return $this->numFilhos;
        // }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }
    

        function resumCadFun(){
            return "$this->nome possui $this->numFilhos filhos(as)"; 
        }
    }
    
    $func01 = new funcionario;
    $func01 -> __set("Nome", "Breno");
    $func01 -> __set("Telefone", "(12)98754-5621");
    $func01 -> __set("NumFilhos",7);
    echo $func01->__get("Nome"). " possui " . $func01->__get("NumFilhos"). " Filhos(as).";

?>