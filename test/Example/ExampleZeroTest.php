<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eldar
 * Date: 10/2/13
 * Time: 7:35 PM
 * To change this template use File | Settings | File Templates.
 */

use Example\ExampleZero;

class ExampleZeroTest extends \PHPUnit_Framework_TestCase {

    /**
     *
     */
    public function testGenerateRandomInt(){

        $ex0 = new ExampleZero();

        $this->assertTrue($ex0->generateRandomInt(50) <= 50);
    }

}
