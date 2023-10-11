<?php
	$mango = $_GET["mango"];
	$orange = $_GET["orange"];
    $banana = $_GET["banana"];

    $mango = $mango * 30 ;
    $orange = $orange * 70 ;
    $banana = $banana * 30 ; 

    $total = $mango + $orange + $banana ;
	echo "<b>ผลลัพธ์</b> คือ ";
	echo $total;
?>