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
$interogare="CREATE TABLE rezultat(nume text, prenume text, clasa text,punctaj int)";
$rezultat=mysql_query($interogare);
if(!$rezultat)
{
	echo mysql_errno().":".mysql_error();
	exit;
}
?>