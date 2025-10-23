<?php

class Contabancaria {
    private $saldo;


    public function setSaldo($saldo){
        if ($saldo > 0){
           $this->saldo = $saldo;
        }else{
             echo 'Saldo inválido, tente algum valor acima de zero (0)';
             echo '<br>';
        }
           
        
    }
    public function getSaldo(){
         
       return $this->saldo;
    }

    public function exibirDados(){
            echo 'Saldo: ' . $this->saldo . '<br>';
            

        
    
    
    }
}