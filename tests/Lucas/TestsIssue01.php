<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Helpers;

class TestsIssue01 extends TestCase
{
	public function testSeAFuncaoSomaCorretamente()
	{
		$reduce = Helpers::reduce([1, 2, 3]);

		$this->assertEquals(6, $reduce);
	}

	/**
	 * @expectedException Exception
	 */
	public function testSeRetornaExececaoComValorNaoNumerico()
	{
		Helpers::reduce(['1', 'dois', 3]);
	}

	/**
	 * @dataProvider providerReduceFunction
	 */
	public function testMelhorandoTesteComDataProvider($a, $expected)
	{
		$reduce = Helpers::reduce($a);

		$this->assertEquals($expected, $reduce);
	}

	public function providerReduceFunction()
	{
		return array(
				array(array(1, 2, 3), 6)
		);
	}

}
