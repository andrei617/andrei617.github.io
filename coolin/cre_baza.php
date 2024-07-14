<?php
$msql=mysql_connect("localhost","root","");
if(!$msql)
{echo "Nu s-a realizat conectarea la MySQL";
exit;}
$rezultat=mysql_query("CREATE DATABASE testest");
if(!$rezultat)
	echo "Nu s-a realizat crearea datei de baze";
?>