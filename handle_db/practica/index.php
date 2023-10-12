<?php 

class Humano  
{

public $nombre;
public $Raza;
public $altura;
public $peso;
public $constestura;
public $edad; 


function __construct($Raza, $altura, $peso,$constestura,$edad, $nombre) {
 
 
    $this->nombre = $nombre;
    $this->Raza = $Raza;
    $this->altura = $altura;
    $this->peso = $peso;
    $this->constestura = $constestura;
    $this->edad = $edad;

}

function caminar (){

echo $this->nombre . "caminando <br>"  ;

}

function correr (){

    echo $this->nombre . "corriendo <br>"  ;
    
    }

    function saltar (){

        echo $this->nombre . "saltando <br>"  ;
        
        }
    
        function nadar (){

            echo $this->nombre . " nadando <br>"  ;
            
            }
    

} 



$animal1 = new Humano("caucasica", "1.50", "60kg" ,"delgada" , "20" , "snider" );


var_dump($animal1);

?>