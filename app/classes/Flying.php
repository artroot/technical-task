<?php
	
	namespace ArtemSemenishch\App\Classes;

	use ArtemSemenishch\App\iFaces\iCanFly;
	use ArtemSemenishch\App\iFaces\iCanRun;
	use ArtemSemenishch\App\Traits\Fly;
	use ArtemSemenishch\App\Traits\Run;

	abstract class Flying extends Animal implements iCanFly, iCanRun
	{
		use Fly;
		use Run;
	}