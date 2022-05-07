<?php

namespace metodos;

class SequenciaCrescente{

    /**
     * Returns true if removing a value from the array results on an array with crescent values (numbers) or not
     *
     * @return Bool
     */
    public static function sequenciaCrescente($array = [])
    {
        if(!is_array($array))
            return false;
        $totalOfNumbers = count($array);
        if($totalOfNumbers == 0)
            return false;
        for($i = 0; $i < $totalOfNumbers; $i++){
            if(self::isSequence($array, $i)){
                return true;
            }
        }
        return false;
    }

    /**
     * Checks if sent array has a sequence when removing sent position of this array
     *
     * @param  Array of values to check
     * @param  Int   the position to be removed
     * @return Bool
     */
    public static function isSequence($array, $position)
    {
        unset($array[$position]);
        $array = array_values($array);
        for($u = 0; $u < count($array); $u++){
            if(empty($array[$u + 1])){
                return true;
            }
            if($array[$u] + 1 > $array[$u + 1]){
                return false;
            }
        }
        return true;
    }
}