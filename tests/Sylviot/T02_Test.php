<?php

use App\Helpers;

class T02 extends TestCase
{
    public function reduceProvider(){
        return 
        [
            [[1,2,3], 6],
            [[1,2,3,4,5,6,7,8,9], 45]
        ];
    }

    /* Tests */

    public function test1()
    {
        $this->assertEquals(3, Helpers::reduce([1,2]));
    }

    /** * @expectedException Error */
    public function testException(){
        Helpers::reduce([1,2, 'a']);
    }

    /** * @dataProvider reduceProvider */
    public function testProvider($input, $expected){
        $this->assertEquals($expected, Helpers::reduce($input));
    }


}
