<?php
require_once("conectare.php");
$cerere="SELECT *FROM rezultat";
$rezultat=mysql_query($cerere);
if(!$rezultat)
{
	echo mysql_errno().":".mysql_error();
	exit;
}
echo "<TABLE BORDER=5>";
echo "<TR><TD align='center'><STRONG>nume<TD><STRONG>prenume<TD><STRONG>clasa<TD><strong>punctaj";
while($rand=mysql_fetch_array($rezultat))
{
	echo "<TR>";
	echo "<TD>".$rand["nume"]."<TD>".$rand["prenume"]."<TD>".$rand["clasa"]."<TD>".$rand["punctaj"];
	echo "</TR>";
}
echo "</TABLE>";
?>