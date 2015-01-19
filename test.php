<?php
/**
* web24h.com.vn
*/
class test extends
{
	
	function __construct()
	{
		echo __METHOD__;	
	}

	public function index()
	{
		echo __METHOD__;
	}
}
$obj = new test();
$obj->index();