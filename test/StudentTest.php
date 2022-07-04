<?php
include 'D:\PHP-Unit-Testing\src\Student.php';
use PHPUnit\Framework\TestCase;

final class StudentTest extends TestCase
{
    public function testClassConstructor()
{
    $user = new Student(23, 'Premkumar');

    $this->assertSame('Premkumar', $user->name);
    $this->assertSame(23, $user->age);
}
}