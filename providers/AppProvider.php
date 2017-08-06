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

		
	}
}