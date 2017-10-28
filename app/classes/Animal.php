<?php

	namespace ArtemSemenishch\App\Classes;

	use ArtemSemenishch\App\iFaces\iAnimal;
	use Exception;

	abstract class Animal implements iAnimal
	{
		public function eat(string $food):string
		{
			return $this->getName() . ' eating ' . $food;
		}

		public function __call($name, $arguments)
		{
			throw new Exception($this->getName() . ' can not ' . $name);
		}

		public function getName():string
		{
			return str_replace(__NAMESPACE__ . '\\', '',get_class($this));
		}
	}