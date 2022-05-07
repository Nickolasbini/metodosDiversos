<?php

namespace metodos;

class CalcularSeculo{

    /**
     * Parses sent year to the correspondent century
     *
     * @param  Int    the year to calculate the century of
     * @return String with correspondent century
     */
    public function seculoAno($year = null)
    {
        if(!$year || !is_numeric($year))
            return 'informe um número válido';
        $century = (int)ceil($year / 100);
        return 'século ' . $century;
    }
}