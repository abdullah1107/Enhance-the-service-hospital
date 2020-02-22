<?php

$con=mysql_connect("localhost","root",""); 

$result=mysql_select_db("information",$con);

if(!$con){
	echo  'not conected';
	die();

}


?>