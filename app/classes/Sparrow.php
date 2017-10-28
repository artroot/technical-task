<?php
	
	namespace ArtemSemenishch\App\Classes;

	class Sparrow extends Flying
	{
		public function tweet():string
		{
			return $this->getName() . ' tweet';
		}
	}