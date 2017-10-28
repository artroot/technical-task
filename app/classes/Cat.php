<?php
	
	namespace ArtemSemenishch\App\Classes;

	use ArtemSemenishch\App\iFaces\iCanBite;
	use ArtemSemenishch\App\Traits\Bite;

	class Cat extends Land implements iCanBite
	{
		use Bite;

		public function meow():string
		{
			return $this->getName() . ' meow';
		}
	}