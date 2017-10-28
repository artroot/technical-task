<?php

	use ArtemSemenishch\App\Classes\Zoo;

	class ZooTest extends \PHPUnit\Framework\TestCase
	{
		public function testZooCanCreteAnimal()
		{
			$this->assertInstanceOf(
				'ArtemSemenishch\App\Classes\Animal',
				Zoo::factory('cat')
			);
		}
	}
