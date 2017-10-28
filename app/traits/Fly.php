<?php
	
	namespace ArtemSemenishch\App\Traits;

	trait Fly
	{
		public function fly():string
		{
			return $this->getName() . ' fly';
		}
	}