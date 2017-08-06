<?php

/**
* 
*/
class AppProvider 
{
	
	function __construct(argument)
	{
		public $return;
		public $status;
	}

	function boot()
	{
		//hitung percoban
		$a = 10;
		$b = 30;

		echo $a+$b;
	}
}