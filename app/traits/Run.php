<?php
	
	namespace ArtemSemenishch\App\Traits;

	trait Run
	{
		public function run():string
		{
			return $this->getName() . ' run';
		}
	}