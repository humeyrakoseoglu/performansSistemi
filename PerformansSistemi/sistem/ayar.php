<!--HÜMEYRA KÖSEOĞLU-->

<?php 
 session_start();
 ob_start();
 
  try { 
   $host   = "localhost";
	 $dbname = "oneri";
	 $kadi   = "root";
	 $sifre  = "";
	 $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8",$kadi,$sifre);
  }catch(PDOEXception $mesaj){
	  echo $mesaj->getmessage();
  }
  
    ?>