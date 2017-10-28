<?php
	
	namespace ArtemSemenishch\App\Traits;

	trait Swim
	{
		public function swim():string
		{
			return $this->getName() . ' swim';
		}
	}