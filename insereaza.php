<?php
require_once("conectare.php");
$nume=$_POST['nume'];
  
$prenume=$_POST['prenume'];

$clasa=$_POST['clasa'];

$x1=$_POST['question-1-answers'];
if($x1==1) $x1=2; else $x1=0;

$x2=$_POST['question-2-answers'];
if($x2==1) $x2=2; else $x2=0;

$x3=$_POST['question-3-answers'];
if($x3==1) $x3=2; else $x3=0;
 
$x4=$_POST['question-4-answers'];
if($x4==1) $x4=2; else $x4=0;

$x5=$_POST['question-5-answers'];
if($x5==3) $x5=1; else $x5=0;
 

$S=(int)$x1+$x2+$x3+$x4+$x5+1;
$cerere="INSERT INTO rezultat (nume,prenume,clasa,punctaj) VALUES('$nume','$prenume','$clasa',$S)";
$rezultat=mysql_query($cerere);
if(!$rezultat)
echo mysql_errno().":".mysql_error();

  header("Location:afisare_tabel.php");

?>
