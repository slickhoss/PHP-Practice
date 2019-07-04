<?php 

//Unit testing in php is done through phpunit
//can install through composer or https://phpunit.de/
//to execute tests we must navigate to the current directory and run phpunit fileName.php

//must use PHPUnit and extend class TestCase
use PHPUnit\Framework\TestCase;

//when testing another class we must require the appropriate file
//or use composers autoload function
include 'testClass.php';

class SampleTest extends TestCase
{
    //each function is its own test
    public function testTrue ()
    {
        //test expects the return value for this function to be true
        $this->assertTrue(true);
    }

    //name the test function as cleary as possible, define what is being tested
    //assertTrue/assertFalse is used to test boolean values
    public function testFalse()
    {
        //both statements equal the same thing
        //$this->assertTrue(true);
        $this->assertFalse(false);
    }
    
    public function testAdd()
    {   
        //to test a function in another class we must define an instance 
        //then call using -> notation
        $testClass = new TestClass();
        $expected = 4;
     
        //assertEquals compares two objects
        //pass the expected object and the function we want to compare
        $this->assertEquals($expected, $testClass->add(2,2));
    }
}
