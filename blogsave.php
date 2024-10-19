<?php
include "dbase.php";
include "sqlobj.php";
$vals=$_POST["pvals"];
print_r($vals);

$myclass = new sqlobj($bdd);  

$str1 = "SELECT * FROM posts";

$stmt= $bdd->prepare("INSERT INTO `posts` (`title`, `content`, `creator`) VALUES (:title, :content, '1')");
$stmt->bindParam(':title',$vals);
$stmt->bindParam(':content',$vals);

$stmt->execute();
echo "complete";
?>
