<?php

	namespace ArtemSemenishch\App\Classes;
	use ArtemSemenishch\App\iFaces\iCanRun;
	use ArtemSemenishch\App\Traits\Run;

	abstract class Land extends Animal implements iCanRun
	{
		use Run;
	}