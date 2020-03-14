<?php
abstract class House {
	Abstract public function getHouseName();
	Abstract public function getHouseMotto();
	Abstract public function getHouseSeat();
	public function introduce(){
		print("House " . $this->getHouseName() . " of " . $this->getHouseSeat()." : "."\"".$this->getHouseMotto()."\"".PHP_EOL);
	}
}
?>