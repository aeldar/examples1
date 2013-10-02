<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eldar
 * Date: 10/2/13
 * Time: 7:33 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Example;


class ExampleZero {

    public function generateRandomInt($i = 1000){
        return rand(0, $i);
    }

}