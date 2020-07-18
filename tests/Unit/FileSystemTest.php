<?php

use App\FileSystem;
use Tests\Test;

class FileSystemTest extends Test
{
    
    /**
     * @var FileSystem
     */
    public $mock = null;

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->mock = new FileSystem;
    }

    protected function normalizePath(string $path) 
    {
        $newPath = preg_replace(['/\/+/', '/\\+/'], ['/'], $path);
        if($this->startsWith($newPath, __DIR__ . '/../')) {
            $newPath = str_replace( __DIR__ . '/../', '', $path);
        }
        if($this->endsWith($newPath, '/')) {
            $newPath = substr($newPath, -1);
        }
        return $newPath;
    }

    protected function startsWith( $haystack, $needle ) {
        $length = strlen( $needle );
        return substr( $haystack, 0, $length ) === $needle;
    }

    protected function endsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        if (!$length) {
            return true;
        }
        return substr($haystack, -$length) === $needle;
    }

    public function testGetAllDirectories()
    {
        $dirs = array_map([FileSystemTest::class, "normalizePath"], $this->mock->getDirs(__DIR__ . '/../test_dir'));
        $expected = [
            "test_dir/test_:)",
            "test_dir/test_:)/hell"
        ];
        foreach ($dirs as $d) {
            $this->assertTrue(in_array($d, $expected));
        }
    }

    public function testGetAllFilesInDirectory()
    {
        $files = array_map([FileSystemTest::class, "normalizePath"], $this->mock->getFiles(__DIR__ . '/../test_dir'));
        $expected = [
            "test_dir/hello",
            "test_dir/world",
            "test_dir/test_:)/hello",
            "test_dir/test_:)/withextension.txt",
            "test_dir/test_:)/world",
            "test_dir/test_:)/hell/my_name_is_vitally"
        ];
        foreach ($files as $f) {
            $this->assertTrue(in_array($f, $expected));
        }
    }
}
