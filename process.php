
<?php
session_start();

require 'carbon.php';

include "carbon";

if (isset($_GET['submit']))
{

	$year = $_GET['year'];
	$week = $_GET['week'];

		$currentTime = Carbon::now() . "<br>";
	
		$ddate = Carbon::create($year, 1, 1, 0);
		
		$week=$ddate->addWeek($week); 
		
		$exp=$week->addYear(4);
		
		$answere=$exp->lessThan($currentTime);
		if($answere==true)
		{
			alert("Tyre Is Expire");
		}
		else
		{
			alert("Tyre Is Not Expire");
		}
}
?>
