<?php
	
	namespace ArtemSemenishch\App\Classes;

	use ArtemSemenishch\App\iFaces\iCanBite;
	use ArtemSemenishch\App\iFaces\iCanSwim;
	use ArtemSemenishch\App\Traits\Bite;
	use ArtemSemenishch\App\Traits\Swim;

	class Dog extends Land implements iCanSwim, iCanBite
	{
		use Swim;
		use Bite;

		public function wuf():string
		{
			return $this->getName() . ' wuf';
		}
	}