<?php 
include('config.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 <script src="jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  
  
   
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <style>
  *
  {
  color:#fff;
  }
  .bg
  {
  background : url('img/12.jpg') no-repeat;
 <!-- background-image:C:\Users\veenukaler\Desktop\COMPrac\bootstrap\12.jpg;-->
 
  width:100%;
  height:100vh;
  }
  .form-container
  {
  border:0px solid black;
  padding:50px 60px;
  margin-top:20vh;
  -webkit-box-shadow: 30px -24px 25px -10px rgba(36,29,36,0.96);
-moz-box-shadow: 30px -24px 25px -10px rgba(36,29,36,0.96);
box-shadow: 30px -24px 25px -10px rgba(36,29,36,0.96);
  }
  
  
  </style>
  </head>
  <body>
  
    <div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <form method="POST" class="form-container">
        <h1>Login</h1>
        <div class="form-group">
          <form method="POST">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <input type="submit" name="submit" class="btn btn-success btn-block">
          </form>
            <?php
          

          if(isset($_POST['submit'])){
              $email=$_POST['email'];
          $password=$_POST['password'];

          if($email==""){
            echo "<script>alert('enter the email id:');</script>";
          }
          if($password==""){
            echo "<script>alert('enter the password:');</script>";
          }

            $s="SELECT email,password FROM signup where email='$email' AND password='$password';" ;
            echo $s;
             $query=mysqli_query($conn,$s) or die("query is not working");

             if(!row==$query->fetch_assoc()){
              echo "not match";
             }
             else
             {
              header("location:index.php");
             }
           }        
          mysqli_close($conn);
          ?>
            </form>
            
            </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        </div> 
        </body>
        </html>

