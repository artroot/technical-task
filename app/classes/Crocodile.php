<?php

	namespace ArtemSemenishch\App\Classes;

	use ArtemSemenishch\App\iFaces\iCanBite;
	use ArtemSemenishch\App\Traits\Bite;

	class Crocodile extends Amphibian implements iCanBite
	{
		use Bite;
	}