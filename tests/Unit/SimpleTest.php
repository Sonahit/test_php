<?php

use App\Simple;
use Tests\Test;

class SimpleTest extends Test
{
    

    /**
     * @var Simple
     */
    public $mock = null;

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->mock = new Simple;
    }

    /**
     * Тест должен проверить суммирование
     *
     * @return void
     */
    public function testAdd()
    {
        $this->assertEquals(3, $this->mock->add(1, 2));
        $this->assertEquals(2, $this->mock->add(10, -8));
    }

    /**
     * Тест должен проверить отрицание
     *
     * @return void
     */
    public function testSubtract()
    {
        $this->assertEquals(-1, $this->mock->subtract(1, 2));
        $this->assertEquals(18, $this->mock->subtract(10, -8));
    }

    /**
     * Тест должен проверить умножение
     *
     * @return void
     */
    public function testMultiply()
    {
        $this->assertEquals(2, $this->mock->multiply(1, 2));
        $this->assertEquals(-80, $this->mock->multiply(10, -8));
    }

    /**
     * Тест должен проверить деление
     *
     * @return void
     */
    public function testDivision()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->assertEquals(0, $this->mock->division(2, 0));
        $this->mock->division(0, 2);
        $this->assertEquals(0.5, $this->mock->division(1, 2));
    }

    /**
     * Тест должен проверить замену текста в строке
     *
     * @return void
     */
    public function testReplaceStrings()
    {
        $this->assertEquals("sssssssss", $this->mock->replaceStrings("j", "jjjjjjjjj", "s"));
        $this->assertEquals("asdFFF123333341123s", $this->mock->replaceStrings(":ddddd", "asdFFF123333341123:ddddd", "s"));
    }

    /**
     * Тест должен проверить замену текста в строке - regex
     *
     * @return void
     */
    public function testPregReplaceStrings()
    {
        $this->assertEquals("sssssssss", $this->mock->pregReplaceStrings("/j/", "jjjjjjjjj", "s"));
        $this->assertEquals("asdFFF123333341123s", $this->mock->pregReplaceStrings("/:.*/", "asdFFF123333341123:ddddd", "s"));
        
    }

    /**
     * Тест должен провести конкатеринование строк
     *
     * @return void
     */
    public function testConcatStrings()
    {
        $this->assertEquals("ab", $this->mock->concatStrings("a", "b"));
    }

    /**
     * Тест проверяет соединение массивов
     *
     * @return void
     */
    public function testArrayMerge()
    {
        $this->assertEquals([1,2,3,4,5,1,2,3,4,5], $this->mock->arrayMerge([1,2,3,4,5], [1,2,3,4,5]));
    }

    /**
     * Тест проверяет на уникальные значения в массиве
     *
     * @return void
     */
    public function testArrayUnique()
    {
        // Ключи тоже проверяются
        $this->assertEquals([1,2,3,4,5], $this->mock->arrayUnique([1,2,3,4,5,1,2,3,4,5]));
        $this->assertEquals([5,4,3,2,1], $this->mock->arrayUnique([5,4,3,4,5,2,1,3,4,5]));
    }

    /**
     * Тест проверяет на пересечение значений массивов
     *
     * @return void
     */
    public function testArrayIntersects()
    {
        // Ключи тоже проверяются
        $this->assertEquals([1,2,3,5,1,2,3,5], $this->mock->arrayIntersects([1,2,3,4,5,1,2,3,4,5], [1,2,3,8,5]));
        $this->assertEquals([5,3,5,2,3,5], $this->mock->arrayIntersects([5,4,3,4,5,2,1,3,4,5], [5,3,2,2,2]));
    }

    /**
     * Тест проверяет разность значений массивов 
     *
     * @return void
     */
    public function testArrayDiff()
    {
        // Ключи тоже проверяются
        $this->assertEquals([4,4], $this->mock->arrayDiff([1,2,3,4,5,1,2,3,4,5], [1,2,3,8,5]));
        $this->assertEquals([4,4,1,4], $this->mock->arrayDiff([5,4,3,4,5,2,1,3,4,5], [5,3,2,2,2]));
    }
}
