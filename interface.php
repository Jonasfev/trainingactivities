<?php
    interface EquipamentoEletronicoInterFace{
        public function ligar();
        public function desligar();
    }
    /*------------------------------------------------------------------*/

    class geladeira implements EquipamentoEletronicoInterFace{
        
        public function abrirPorta(){
        echo "Abrir a Porta";
        }

        public function ligar(){
            echo "Ligar a Geladeira";
        }

        public function desligar(){
            echo "Desligar a Geladeira";
        }
    }

    class TV implements EquipamentoEletronicoInterFace{
        public function ligar(){
            echo "Ligar a Tv";
        }
        public function desligar(){
            echo "Desligar a Tv";
        }

        public function trocarCanal(){
            echo "Canal Trocado!";
        }
    }
    /*--------------------------------------------------------------------------*/

    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }
    interface AquaticoInterface{
        public function nadar();
    }

    class Humano  implements MamiferoInterface, TerrestreInterface{
        public function respirar (){
            echo "Respirando!";
        }
        public function andar(){
            echo "Andando";
        }
        public function conversar(){
            echo "Conversando";
        }
    }

    class Baleia implements AquaticoInterface, MamiferoInterface{
        public function respirar(){
            echo "Respirando";
        }
        public function nadar(){
            echo "Nadando!";
        }
        public function esguicar(){
            echo "Esguiçando!";
        }
    }


    /*----------------------------------------------------------------------------*/

    interface AnimalInterface {
        public function comer();
        
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }
    class papagaio implements AveInterface{
        public function comer() {
            echo "Comendo!";
        }
        public function voar(){
            echo "Voando";
        }
    }

    $loro = new papagaio();

    echo "<pre>";

    print_r(get_class_methods($loro));

    echo "</pre>";
    
?>