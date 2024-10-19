<?php
include "dbase.php";

$val2=$_POST["vals"];



$str1 ="select * from users where uname='$val2[0]' and pword='$val2[1]'";
$rs1=$bdd->query($str1) or die("error on $str1");
$i1=$rs1->rowcount();
if ($i1>0){
	$row1=$rs1->fetch();
	$cook="$row1[2]:$row1[6]";
	setcookie('login',$cook);
	$str1 ="select * from ulevel where ulid=$row1[6]";
	$rs2=$bdd->query($str1) or die("error on $str1");
	$row2=$rs2->fetch();
	$strj="<script type='text/javascript'> window.location.href='$row2[2]'</script>";
	echo $strj;

}else {
	echo "Error";
}

