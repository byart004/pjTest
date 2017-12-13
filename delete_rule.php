<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  
 <?php

     include "connect.php";
     $id=$_REQUEST['id'];


  $delete="delete from rule where id='$id' ";
  $result=mysqli_query($conn,$delete);
  if(!$result){
    echo "<script>alert('ลบไม่ได้!'); </script>";
    echo "<script> window.history.back();</script>";
  }else {
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>location.href='table_rule.php';</script>";
  }
  ?>

 </body>
</html>
