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
  color:black;
  }
  .bg
  {
  background : url('img/44.jpg') no-repeat;
 
  width:100%;
  height:100%;
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
        <h1>Sign Up</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
            </div>
        <div class="form-group">
            <label for="exampleInputEmail1" name="password">Password</label>
            <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">

            </div>
            <div class="form-group" name=confpass">
            <label for="exampleInputEmail1">Confirm Password</label>
            <input type="password" name ="confpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button class="btn btn-success btn-block" name="submit" type="submit">Sign Up</button>

            <?php
            if(isset($_POST['submit'])){
              $email=$_POST['email'];
            $password=$_POST['password'];
          $conformpassword=$_POST['confpass'];

            $a="insert into signup(email,password,email_confrmpass)values('".$email."','".$password."','".$conformpassword."');";

            if($email==''){
              echo "<script>alert('please enter the field');</script>";
            }
            if($password==''){
            echo "<script>alert('please enter the field');</script>";
            }
            if($conformpassword==''){
              echo "<script>alert('please enter the field');</script>";
            }
             
             if($password==$conformpassword){
            $query=mysqli_query($conn,$a);

            if($query==true){

              echo "<script>alert'registration successfully';</script>";

            }

          }
          else
          {
            echo "record is not inserted";
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
