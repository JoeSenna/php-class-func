<?php

class Calculadora
{
    /**
     * Autoexplicativo
     * @param float $y
     * @param float $x
     * 
     * @return int
     */

    public function soma($x, $y){
        return $x + $y;
    }

    public function sub($x, $y){
        return $x - $y;
    }

    public function mult($x, $y){
        return $x * $y;
    }

    public function div($x, $y){
        if ($y ==0){
            return 0;
        }
        return $x / $y;
    }

    public function pot($x, $y){
        //caso seja número real
        if (!is_int($y)){
            return 'Potência precisa ser um nº inteiro'; 
        }
        
        //caso potência negativa, inverte o número
        if ($y<0){
            $x=1 / $x;
            $y=$y * -1;
        }
        
        $total=1;
        for ($i=0; $i<$y; $i++){
            $total = $total * $x;
        }
        return $total;
    } 
}

?>