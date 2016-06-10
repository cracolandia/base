<?php

use App\Helpers;

class T03_SylvioT extends TestCase
{
    public function testFind(){
        $this->assertEquals(0, Helpers::find([0,1,2], 0));
        $this->assertEquals(1, Helpers::find([0,1,2], 1));
        $this->assertEquals(2, Helpers::find([0,1,2], 2));

        $this->assertEquals(-1, Helpers::find([0,1,2], 3));
        $this->assertEquals(-1, Helpers::find([0,1,2], -1));
    }
}
