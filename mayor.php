<?php
class mayor{
    public static function numMayor($lista):int{
        $ordenar=arsort($lista);

        foreach ($lista as $num){
            $array=[];
            array_push($array,$num);
            break;
        }
        return $array[0];
    }
}
