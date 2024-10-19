<?php 
try {
	 $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=UTF8', 'root', '');
   } catch(Exception $e) {
       exit("Unable to connect to database.myiii mysql_error()");
    
  }
 
?>