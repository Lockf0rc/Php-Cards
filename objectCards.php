
<?php
$filename="Int/TCard.php";
$filename0="Int/ITheme.php";
$filename1="Int/myt.php";
$filename2="Int/View.php";
    include("$filename"); 
    include("$filename0"); 
	include("$filename1"); 
	include("$filename2");




//$t,$d,$n,$c,$da
$ccard= new TCard("sampleTitle","Lorem ipsum dolor sit amet, consectetur ","Foostuff","testing","2015-Jan-16");
$them= new myt();
// $them->format($ccard);
// echo $them->RENDER;
$vcard= new View($ccard,$them);
//echo $vcard;
?>
