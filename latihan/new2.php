<?php
$usia=$_GET["u"];
if($usia>16)
{
$film="AADC 2";
}
else
{
$film="Doraemon";
}
echo $film;	
?>