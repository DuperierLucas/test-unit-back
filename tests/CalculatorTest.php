<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Service\CalculatorService;

class CalculatorTest extends KernelTestCase
{
    public function testAddition(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->addition(1,1);
        $this->assertEquals(2, $result);
    }

    public function testSubstraction(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->substraction(1,1);
        $this->assertEquals(0, $result);
    }

    public function testMultiplication(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->multiplication(1,1);
        $this->assertEquals(1, $result);
    }

    public function testDivision(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->division(1,1);
        $this->assertEquals(1, $result);
    }

    public function testModulo(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->modulo(17
        ,3);
        $this->assertEquals(2, $result);
    }

    public function testSquare(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $calculatorService = $container->get(CalculatorService::class);
        $result  = $calculatorService->square(25);
        $this->assertEquals(5, $result);
    }
}
