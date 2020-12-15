<?php

use PHPUnit\Framework\TestCase;

class BMICalculatorTest extends TestCase
{

    // public const BASE_URL = 'http://localhost:8000'; // class constante

    // public function __construct()
    // {
    //     parent::__construct();
    //     define('BASE_URL', 'http://localhost:8000'); // php constante
    // }
    public function test_underweight_BMI_text_result()
    {
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 10;
        $result = $BMICalculator->getTextResultFromBMI();

        $expected = 'Underweight';
        $this->assertSame($expected, $result);
    }

    public function test_normal_BMI_text_result()
    {
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 24;
        $result = $BMICalculator->getTextResultFromBMI();

        $expected = 'Normal';
        $this->assertSame($expected, $result);
    }

    public function test_overweight_BMI_text_result()
    {
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 28;
        $result = $BMICalculator->getTextResultFromBMI();

        $expected = 'Overweight';
        $this->assertSame($expected, $result);
    }

    public function test_correct_BMI_value()
    {
        $BMICalculator = new BMICalculator;
        $BMICalculator->mass = 100; // kg
        $BMICalculator->height = 1.6; // m
        $result = $BMICalculator->calculate();

        $expected = 39.1;
        $this->assertSame($expected, $result);
        $this->assertEquals(BASE_URL, 'http://localhost:8000');
    }
}
