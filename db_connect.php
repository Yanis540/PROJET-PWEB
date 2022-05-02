<?php 
$connection;
   try{
       global $connection;
     $connection=mysqli_connect('localhost','root','Yanis123','db_pweb');
   }
  catch(mysqli_sql_exception $e)
  {
    // echo 'connection error' ;
  }
?>