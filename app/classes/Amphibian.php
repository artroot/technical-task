<?php

	namespace ArtemSemenishch\App\Classes;

	use ArtemSemenishch\App\iFaces\iCanRun;
	use ArtemSemenishch\App\iFaces\iCanSwim;
	use ArtemSemenishch\App\Traits\Run;
	use ArtemSemenishch\App\Traits\Swim;

	abstract class Amphibian extends Animal implements iCanSwim, iCanRun
	{
		use Swim;
		use Run;
	}