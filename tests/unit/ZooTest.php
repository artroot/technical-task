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

		public function testEachAnimalCanEat()
		{
			$animals = ['cat', 'dog', 'crocodile', 'sparrow'];

			foreach ($animals as $animal){
				$this->assertTrue(
					is_string(Zoo::factory($animal)->eat('food'))
				);
			}
		}

		public function testCatCanNotSwim()
		{
			$this->expectException(
				Exception::class
			);
			Zoo::factory('cat')->swim();
		}
	}
