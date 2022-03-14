<?php

class aleatorio{

    public static function numAleatorio(){
        $min=1;
        $max=10;
        $resultado=null;

        $resultado=rand($min,$max);
        return $resultado;
    }


}