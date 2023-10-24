<?php
class NumberChecker  {

	public function __construct(private int $number){}

	public function IsEven(): bool {
		return $this->number%2 == 0;
	}
	public function IsPositive(): bool {
		return $this->number > 0;
	}

}
?>
