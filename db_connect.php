<?php 
$connection;
   try{
       global $connection;
       $host='localhost';
       $user='root';
       $password='Yanis123';
       $db_name='db_pweb';
     $connection=mysqli_connect($host,$user,$password,$db_name);
   }
  catch(mysqli_sql_exception $e)
  {
    // echo 'connection error' ;
  }
?>