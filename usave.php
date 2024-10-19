<?php
include "dbase.php";
include "sqlobj.php";
$vals=$_POST["pvals"];
print_r($vals);

$myclass = new sqlobj($bdd);

$str1 = "SELECT * FROM users";
$uid = $myclass->maxacno("users",array("uname","umail"),"uid");
$str1= "INSERT INTO `users` (`uid`, `fname`, `uname`, `umail`, `admin`, `pword`, `ulid`) VALUES ('$uid', '$vals[0]', '$vals[1]', '$vals[2]', '$vals[3]', '$vals[4]', '1')";
$myclass->adddata($str1);
echo "complete";
?>
