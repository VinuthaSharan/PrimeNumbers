<?php

require 'PrimeNumbers.php';

class PrimeNumbersTests extends PHPUnit_Framework_TestCase
{
    private $primeNumber;
 
    protected function setUp()
    {
        $this->primeNumber = new PrimeNumbers();
    }
 
    protected function tearDown()
    {
        $this->primeNumber = NULL;
    }
 
    public function testPrime()
    {
        var_dump(getenv('count'));

die();
        $primeNumber = $this->primeNumber->primeNo(10);
        $this->assertEquals([2,3,5,7], $primeNumber);
    }
 
}