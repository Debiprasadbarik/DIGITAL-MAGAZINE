<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css">
        
    </head>
    <body>
      <div class="top">
        <h1>Indira Gandhi Institute of Technology Sarang</h1>
      </div >
     <div class="login">
      
       <!-- <a class="btn" href="#">login</a> -->
       <form action="" method="POST">
        <!-- <input  class="btn" type="submit" value="Login"> -->
        <input type="hidden"  name="id" value="1"/>
        <button type="submit" name="submit" id="myBtn" >Login</button>
       </form>
     </div>
    </body>
</html>

<?php
  if(isset($_POST['submit'])){
      $id=$_POST['id'];
      $_SESSION['btn-clicked']=$id;
      header('location:page.php');
  }
?>