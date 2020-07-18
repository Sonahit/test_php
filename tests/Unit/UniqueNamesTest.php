<?php

namespace Tests\Unit;

use App\UniqueNames as AppUniqueNames;
use PHPUnit\Framework\MockObject\MockObject;
use Tests\Test;

class UniqueNamesTest extends Test
{

    /**
     * Мок
     *
     * @var MockObject
     */
    private $mock = null;
    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->mock = $this->createMock(AppUniqueNames::class);
    }

    /**
     * Мок должен вернуть пустой массив
     *
     * @return void
     */
    public function testMockShouldReturnEmpty() {
        $this->mock->method('uniqueNamings')->willReturn([]);
        $this->assertEquals([], $this->mock->uniqueNamings([]));
    }

    /**
     * Тест должен вернуть пустой массив
     *
     * @return void
     */
    public function testShouldReturnEmpty()
    {
        $mock = new AppUniqueNames;
        $names = [];
        $this->assertEquals([], $mock->uniqueNamings($names));
    }

    /**
     * Тест должен вернуть уникальные имена с игнором регистра
     *
     * @return void
     */
    public function testUniqueNamesIgnoreCase()
    {
        $mock = new AppUniqueNames;
        $names = ['Nama', 'Nama', 'Nama', 'Gloria', 'Joomla', 'jOomla','Workpress', 'Workpress', 'workpress'];
        $this->assertEquals(['Nama', 'Gloria', 'Joomla', 'workpress'], $mock->uniqueNamings($names));
    }

    /**
     * Тест должен вернуть уникальные имена с учётом регистра
     *
     * @return void
     */
    public function testUniqueNamesCaseSensitive()
    {
        $mock = new AppUniqueNames;
        $names = ['Nama', 'Nama', 'nama', 'Gloria', 'Joomla', 'jOomla', 'Workpress', 'Workpress', 'workpress'];
        $this->assertEquals(['Nama', 'nama', 'Gloria', 'Joomla', 'jOomla', 'Workpress', 'workpress'], $mock->uniqueNamings($names, false));
    }
}