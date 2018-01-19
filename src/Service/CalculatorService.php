<?php

namespace JaimeLopez\Testuals\Example\Service;

class CalculatorService
{
    /**
     * @param int $number1
     * @param int $number2
     * @return int
     */
    public function addNumbers($number1, $number2)
    {
        return $number1 + $number2;
    }

    /**
     * @param int $number1
     * @param int $number2
     * @return int
     */
    public function multiplyNumbers($number1, $number2)
    {
        return $number1 * $number2;
    }
}