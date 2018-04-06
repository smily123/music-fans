<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="Utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.css" type='text/css' />
    <!-- //lined-icons -->
    <!-- Meters graphs -->
    <script src="js/jquery-2.1.4.js"></script>
   
    </script>
</head>

<body>
    <script src="https://code.jquery.com/jquery-1.10.2.js" integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <nav class="navbar navbar-default" style="background-color: #C7B253;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
       <h4 style="color:red;">MAKE MUSIC</h4>
      </a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <ul class="nav navbar-nav">
         <li class=""><a href="#">My Music<span class="sr-only">(current)</span></a></li>
         <li class=""><a href="#">Radio<span class="sr-only">(current)</span></a></li>
         
      </ul>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">LogIn</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="jumbotron back" style="margin-top:-20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group"  style="margin-top:50px;">
  <input type="text" class="form-control" placeholder="Search" style="width:500px;border-radius: 5px;" >
                </div>
            </div>
                <div class="col-lg-2">
                    <button class="btn btn-success" "><b>Surprise Me</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class=" tp-banner" style=" background-image: url('tp1.jpeg'); margin-top: -30px;">
       
        <div class="container">
            
            <div class="row">
                <div class="col-md-4">
                    <strong><p style="font-size:30px;">Welcome My Music</p></strong>
                
                </div>
                <br />
                <br /><br /><br /><br /><br /><br /><br /><br />
                <div class="col-md-4">
                </div>
                </div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <div class="input-group-btn">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2">
                                    <select style="height:35px; margin-left: 120px;background-color: grey;">
                                        <option class="active">+91</option>
                                        <option>+142</option>
                                        <option>+11</option>
                                        <option>+21</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <input class="line trans" type="text" aria-label="..." style="width:300px; border-radius: 5px; height:35px;">
                                </div>
                                <button class="btn btn-success" data-target="#loginModal" data-toggle="modal">TEXT ME</button>
<div class="modal" id="loginModal" tabindex="-1" >  
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">otp sent</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="control-label">OTP:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" >OK</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">close</button>
      </div>
    </div> 
  </div>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="container">
                	<div class="row space"></div>
                		<div class="row">
                		<div class="col-lg-2">	
                <div class="bt-glyphicons">
                    <i class="fa fa-3x fa-facebook-square"></i>
                    <i class="fa fa-3x fa-apple" style="margin-left:20px;"></i>
                    <i class="fa fa-3x fa-windows" style="margin-left:20px;"></i>

                </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="footer">
                <div class="footer-grid">
                    <h3>Navigation</h3>
                    <ul class="list1">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="radio.php">All Songs</a></li>
                        <li><a href="browse.php">Albums</a></li>
                        <li><a href="radio.php">New Collections</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <h3>Our Account</h3>
                    <ul class="list1">
                        <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Search Terms</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <h3>Our Support</h3>
                    <ul class="list1">
                        <li><a href="#">Search Terms</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                </div>
                <div class="footer-grid footer-grid_last">
                    <h3>About Us</h3>
                    <p class="f_text">Phone: &nbsp;&nbsp;&nbsp;7508092591</p>
                    <p class="f_text">Phone: &nbsp;&nbsp;&nbsp;9815400289</p>
                    <p class="email">Email : jadhavarpit100@gmail.com&nbsp;<span><a href="mailto:mail@example.com"></a></span></p>
                    <p class="email">Email : vanishakaler95@gmail.com&nbsp;<span><a href="mailto:mail@example.com"></a></span></p>
                </div>
                <div class="clearfix"> </div>
            </div>

</body>

</html>