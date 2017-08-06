<?php

/**
* 
*/
use DB;
class AppProvider 
{
	
	function __construct(argument)
	{
		public $return;
		public $status;
	}

	function boot()
	{
		DB::select("*")
		  ->whereId(10);

		//hitung percoban
		$a = 10;
		$b = 30;

		echo $a+$b;
	}
}
