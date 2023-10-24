<?php

use PHPUnit\Framework\TestCase;
require "NumberChecker.php";

class NumberCheckerTest extends TestCase
{

	public function testIsEven()
	{
		$numpar = new numberChecker(12);
		$this->assertTrue($numpar->isEven());

		$numimpar = new numberChecker(5);
		$this->assertFalse($numimpar->isEven());
	}

	public function testIsPositive()
	{
		$numpositiu = new numberChecker(1);
		$this->assertTrue($numpositiu->isPositive());

		$numnegatiu = new numberChecker(-1);
		$this->assertFalse($numnegatiu->isPositive());
	}
}
?>




?>