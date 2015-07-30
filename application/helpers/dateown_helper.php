<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('databaseDateFormat'))
{
	function databaseDateFormat($dateToString)
	{
		return date('Y-m-d',$dateToString);
	}
}

if ( ! function_exists('textFormatDate'))
{
	function textFormatDate($strtotime)
	{
		return date("d-M-Y",$strtotime);
	}
}