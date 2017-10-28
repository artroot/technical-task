<?php
	
	namespace ArtemSemenishch\App\iFaces;

	interface iAnimal
	{
		public function eat(string $food);
		public function __call($name, $arguments);
		public function getName();
	}