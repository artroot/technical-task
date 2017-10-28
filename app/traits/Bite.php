<?php
	
	namespace ArtemSemenishch\App\Traits;

	trait Bite
	{
		public function bite(string $victim):string
		{
			return $this->getName() . ' has bitten ' . $victim;
		}
	}