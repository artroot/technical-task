<?php

	namespace ArtemSemenishch\App\Classes;

	use Exception;

	/**
	 * Animals Static Factory
	 * @package ArtemSemenishch\App\Classes
	 */
	final class Zoo
	{
		/**
		 * @param string $name
		 * @return Animal
		 * @throws Exception
		 */
		public static function factory(string $name)
		{
			$className = __NAMESPACE__ . '\\' . ucfirst($name);
			if (class_exists($className) and $animal = new $className and $animal instanceof Animal){
				return $animal;
			}else{
				throw new Exception('Zoo has not ' . $name);
			}
		}
	}