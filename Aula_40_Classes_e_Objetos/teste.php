<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'Model/Carro.php';

class Prop{

    public function __construct(private $nome){
        $this->nome = $nome;
    }


    public function ola(){
        echo "Olá, sou a ". $this->bananinha;
    }
}

$propriedade = new Prop('Adriana');
//echo $propriedade->nome;
display_info($propriedade, "Objeto");
$propriedade->ola();










include '../todos/footer.php';
?>
