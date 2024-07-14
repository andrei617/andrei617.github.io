<?php
$msql=mysql_connect("localhost","root","");
if(!$msql)
{
	echo "nu s-a realizat conectarea la MySQL";
	exit;
}
$baza=mysql_select_db("testest");
if(!$baza)
{
	echo mysql_errno().":".mysql_error();
	exit;
}

?>