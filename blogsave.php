<?php
include "dbase.php";
include "sqlobj.php";
$vals=$_POST["pvals"];
print_r($vals);

$myclass = new sqlobj($bdd);  

$str1 = "SELECT * FROM posts";
// var_dump($vals);
// die();
$stmt= $bdd->prepare("INSERT INTO `posts` (`title`, `content`, `creator`) VALUES (:title, :content, '1')");
// $stmt->bindParam(':title',$vals[0]);
// $stmt->bindParam(':content',$vals[1]);

$stmt->execute([
    ":title" => $vals[0],
    ":content" => $vals[1]
]);
echo "complete";
?>
