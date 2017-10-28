<?php
	
	namespace ArtemSemenishch\App\Classes;

	use ArtemSemenishch\App\iFaces\iCanSwim;
	use ArtemSemenishch\App\Traits\Swim;

	abstract class Waterfowl extends Animal implements iCanSwim
	{
		use Swim;
	}