<?php

class ArrayRandomica{

    /**
     * Returns an array containing twenty random values and other with the unrepeated values on random values
     *
     * @return Array [
     *                   <array> 'randomValues',
     *                   <array> 'unrepeatedValues'
     *               ]
     */
    public static function fetchRandomArrayAndUnrepeatedNumbers()
    {
        $elementsOnArray  = 20;
        $randomValues     = [];
        $unrepeatedValues = [];
        for($count = 0; $count < $elementsOnArray; $count++){
            $randomNumber = rand(1, 10);
            $randomValues[] = $randomNumber;
            if(!in_array($randomNumber, $unrepeatedValues))
                $unrepeatedValues[] = $randomNumber;
        }
        return [
            'randomValues'     => $randomValues,
            'unrepeatedValues' => $unrepeatedValues
        ];
    }
}