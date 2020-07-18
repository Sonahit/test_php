<?php

use App\Token;
use Tests\Test;

class TokenTest extends Test
{
    
    /**
     * @var Token
     */
    public $mock = null;

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->mock = new Token;
    }

    public function testToken()
    {
        $this->assertEquals("Hello hello", $this->mock->tokenReplace("Hello :world", ["world" => "hello"]));
        $this->assertEquals(
            "Hello my name is Victor Anatolyevich Klykva",
            $this->mock->tokenReplace(
                "Hello my :intro is :first_name :patronymic :last_name",
                [
                    "intro" => "name",
                    "first_name" => "Victor",
                    "patronymic" => "Anatolyevich",
                    "last_name" => "Klykva"
                ]
            )
        );
    }
}
