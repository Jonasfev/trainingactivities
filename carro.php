<?php

class carro{
    //Atributos
    public $modelo= null;
    public $ano= null;
    public $cor= null;
    public $marca = null;


    //Métodos
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }

    

}

    $carro01 = new carro;
    $carro01 -> __set("modelo", "WRX");
    $carro01 -> __set("ano", "2016");
    $carro01 -> __set("cor","Azul");
    $carro01 -> __set("marca", "Subaru");
    echo "Modelo: " . $carro01->__get("modelo"). " <br> " . "Ano: " . $carro01->__get("ano"). " <br> " . "Cor: " . $carro01->__get("cor"). " <br> " . "Marca: " . $carro01->__get("marca");

    echo "<br>";

?>