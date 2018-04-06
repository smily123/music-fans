<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
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
    <script type="text/javascript">
    $(function() {
        $('#audio-player').mediaelementplayer({
            alwaysShowControls: true,
            features: ['playpause', 'progress', 'volume'],
            audioVolume: 'horizontal',
            iPadUseNativeControls: true,
            iPhoneUseNativeControls: true,
            AndroidUseNativeControls: true
        });
    });
    </script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
    </script>
    <!-- search-scripts -->
    <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <!-- //search-scripts -->
    <!---->
</head>
<!-- /w3layouts-agile -->

<body class="sticky-header left-side-collapsed" onload="initMap()">
    <section>
        <!-- left side start-->
        <div class="left-side sticky-left-side">
            <!--logo and iconic logo start-->
            <div class="logo">
                <h1><a href="index.html"><span><img  src=https://www.makemusic.com/wp-content/themes/makemusic/images/background/logo.png height="30px"></span></a></h1>
            </div>
            <div class="logo-icon text-center">
                <a href="index.html">M </a>
            </div>
            <!-- /w3l-agile -->
            <!--logo and iconic logo end-->
            <div class="left-side-inner">
                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked custom-nav ">
                    <li class="active"><a href="index.php"><i class="lnr lnr-home"></i><span>Home</span></a></li>
                    <li class="active"><a href="radio.php"><i class="camera"></i> <span>Radio</span></a></li>
                    <li class="active"><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-th"></i><span>Mail Box </span></a></li>
                    <li class="active"><a href="radio.php"><i class="lnr lnr-users"></i> <span>Artists</span></a></li>
                    <li class="active"><a href="browse.php"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>
                    <li class="active"><a href="browse.php"><i class="lnr lnr-indent-increase"></i> <span>Browser</span></a>
                    </li>
                    <li class="active"><a href="#"><i class="lnr lnr-heart"></i>  <span>My Favourities</span></a>
                    </li>
                    <li class="active"><a href="contact.php"><i class="fas fa-thumb-tack"></i><span>Contact</span></a>
                    </li>
            
                </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- /w3layouts-agile -->
        <!-- app-->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog facebook" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="app-grids">
                            <div class="app">
                                <div class="col-md-5 app-left mpl">
                                    <p>Download and Avail Special Songs Videos and Audios.</p>
                                    <div class="app-devices">
                                        <h5>Gets the app from</h5>
                                        <a href="#"><img src="images/1.png" alt=""></a>
                                        <a href="#"><img src="images/2.png" alt=""></a>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-7 app-image">
                                    <img src="images/apps.png" alt="">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //app-->
        <!-- /w3l-agile -->
        <!-- signup -->
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="sign-grids">
                            <div class="sign">
                                <div class="sign-left">
                                    <ul>
                                        <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                                        <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
                                        <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                                    </ul>
                                </div>
                                <div class="sign-right">
                                    <form action="#" method="post">
                                        <h3>Create your account </h3>
                                        <input type="text" name="Name"   required="">
                                        <input type="text" name="Mobilenumber" required="">
                                        <input type="text" name="Emailid" required="">
                                        <input type="password" name="Password" >
                                        <input type="submit" value="CREATE ACCOUNT">
                                    </form>


                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //signup -->
        <!-- /w3l-agile -->
        <!-- left side end-->
        <!-- main content start-->
        <div class="main-content">
            <!-- header-starts -->
            <div class="header-section">
                <!--toggle button start-->
                <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
                <!--toggle button end-->
                <!--notification menu start -->
                <div class="menu-right">
                    <div class="profile_details">
                        <div class="col-md-4 serch-part">
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search for Songs Artists & More" style="width:250px; margin-top:8px;">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 player">
                            <div class="audio-player">
                                <audio id="audio-player" controls="controls">
                                     
                                    <source src="media/hindisongs.mp3" type="audio/mpeg"></source>
                                   
                                    <source src="media/indian_ringtone.mp3" type="audio/mpeg"></source>
                                    <source src="media/Georgia.ogg" type="audio/ogg"></source>
                                    <source src="media/Georgia.mp3" type="audio/mpeg"></source>
                                </audio>
                            </div>
                            <!---->
                            <!--audio-->
                            <link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
                            <script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
                            <!---->
                            <!--//-->
                            <ul class="next-top">
                                <li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
                                <li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 login-pop">
                            <div id="loginpop"> <a href="#" id="loginButton"><span>MailBox <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-sign-in"></i></a>
                                <div id="loginBox">
                                    <form action="" method="POST" id="loginForm">
                                        <fieldset id="body">
                                            <fieldset>
                                                <label for="name">Name</label>
                                                <input type="text" name="name" id="name">
                                            </fieldset>
                                            <fieldset>
                                                <label for="email">Email</label>
                                                <input type="text" name="email" id="email">
                                            </fieldset>
                                            <fieldset>
                                                <label for="contact">Contact</label>
                                                <input type="contact" name="contact" id="contact">
                                            </fieldset>
                                            <input type="submit" id="login" value="submit" name="submit">
                                           
                                        </fieldset>
                                        
                                    </form>
                                    <?php 
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $reg=$_POST['password'];
    


    $conn=mysqli_connect("localhost","root","","login");

    if(!$conn)
    {
        echo "connection is not created";
    }

    $a="insert into loginbox(email_address,email_password)values('".$email."','".$reg."');";
  
    $query=mysqli_query($conn,$a);

    if($query==true)
    {
        echo "<script>alert('registration successfully');</script>";
    }
    else
    {
        echo "<script>alert('record is not inserted')</script>";
    }
    mysqli_close($conn);
}
?>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!-------->
                </div>
                <div class="clearfix"></div>
            </div>
            <!--notification menu end -->
            <!-- //header-ends -->
            <!-- /w3l-agileits -->
            <!-- //header-ends -->
            <div id="page-wrapper">
                <div class="inner-content">
                    <div class="music-left">
                        <!--banner-section-->
                        <div class="banner-section">
                            <div class="banner">
                                <div class="callbacks_container">
                                    <ul class="rslides callbacks callbacks1" id="slider4">
                                        <li>
                                            <div class="banner-img">
                                                <img src="images/j1.jpeg" class="img-responsive" alt="" style="height:440px; width:100%;">
                                            </div>
                                            <div class="banner-info">
                                                <h3>Feel The Music</h3>
                                               
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner-img">
                                                <img src="images/j2.jpg" class="img-responsive" alt="">
                                                <div class="banner-info">
                                                    <h3>Feel The Music</h3>
                                                    
                                                </div>
                                        </li>
                                        <li>
                                            <div class="banner-img">
                                                <img src="images/j3.jpg" class="img-responsive" alt="" style="height:440px; width:100%;">
                                            </div>
                                            <div class="banner-info">
											<h3>Feel The Music</h3>
                                            </div>
                                            <!-- /w3layouts-agileits -->
                                        </li>
                                         <li>
                                            <div class="banner-img">
                                                <img src="images/j4.jpg" class="img-responsive" alt="" style="height:440px; width:100%;">
                                            </div>
                                            <div class="banner-info">
											<h3>Feel The Music</h3>
                                            </div>
                                            <!-- /w3layouts-agileits -->
                                        </li>
                                         <li>
                                            <div class="banner-img">
                                                <img src="images/j5.jpg" class="img-responsive" alt="" style="height:440px; width:100%;">
                                            </div>
                                            <div class="banner-info">
											<h3>Feel The Music</h3>
                                            </div>
                                            <!-- /w3layouts-agileits -->
                                        </li>
                                    </ul>
                                    </div>
                                    <!--banner-->
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <!--//End-banner-->
                            <!--albums-->
                            <!-- pop-up-box -->
                            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
                            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                            <script>
                            $(document).ready(function() {
                                $('.popup-with-zoom-anim').magnificPopup({
                                    type: 'inline',
                                    fixedContentPos: false,
                                    fixedBgPos: true,
                                    overflowY: 'auto',
                                    closeBtnInside: true,
                                    preloader: false,
                                    midClick: true,
                                    removalDelay: 300,
                                    mainClass: 'my-mfp-zoom-in'
                                });
                            });
                            </script>
                            <!--//pop-up-box -->
                            <div class="albums">
                                <div class="tittle-head">
                                    <h3 class="tittle">AUDIO EXPRESS <span class="new">Listen Now</span></h3>
                                    <a href="index.php"><h4 class="tittle">See all</h4></a>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y1.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Shape Of You</a>
                                </div>
                                <div id="small-dialog" class="mfp-hide">
                                    <iframe src="video/Tay Hai (Rustom) 1080p HD [tollyfun.com]"></iframe>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y2.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">The Breakup Song</a>
                                </div>
                                <div id="small-dialog" class="mfp-hide">
                                    <iframe src="video/Tay Hai (Rustom) 1080p HD [tollyfun.com]"></iframe>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y3.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Worth It</a>
                                </div>
                                <div class="col-md-3 content-grid last-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y4.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Haazarey wala munda</a>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y5.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Zindagi</a>
                                </div>
                                <div id="small-dialog" class="mfp-hide">
                                    <iframe src="video/Tay Hai (Rustom) 1080p HD [tollyfun.com]"></iframe>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y6.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Barfi</a>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y7.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Guitar Sikhda</a>
                                </div>
                                <div class="col-md-3 content-grid last-grid">
                                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/y8.jpg" title="allbum-name"></a>
                                    <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Despacito</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <!--//End-albums-->
                            <!--//discover-view-->
                            <div class="albums second">
                                <div class="tittle-head">
                                    <h3 class="tittle">VIDEO EXPRESS <span class="new">View</span></h3>
                                    <a href="index.php"><h4 class="tittle two">See all</h4></a>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a href="single.html"><img src="images/v11.jpg" title="allbum-name"></a>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a href="single.html"><img src="images/v22.jpg" title="allbum-name"></a>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a href="single.html"><img src="images/v33.jpg" title="allbum-name"></a>
                                </div>
                                <div class="col-md-3 content-grid last-grid">
                                    <a href="single.html"><img src="images/v44.jpg" title="allbum-name"></a>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a href="single.html"><img src="images/v55.jpg" title="allbum-name"></a>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a href="single.html"><img src="images/v66.jpg" title="allbum-name"></a>
                                </div>
                                <div class="col-md-3 content-grid">
                                    <a href="single.html"><img src="images/v11.jpg" title="allbum-name"></a>
                                </div>
                                <div class="col-md-3 content-grid last-grid">
                                    <a href="single.html"><img src="images/v22.jpg" title="allbum-name"></a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <!--//discover-view-->
                        </div>
                        <!--//music-left-->
                        <!--/music-right-->
                        <div class="music-right">
                            <!--/video-main-->
                            <div class="video-main">
                                <div class="video-record-list">
                                    <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
                                        <div class="jp-type-playlist">
                                            <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" src="video/play1.png" style="width: 480px; height: 270px; display: inline;">
                                                <video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;"></video>
                                            </div>
                                            <div class="jp-gui">
                                                <div class="jp-video-play" style="display: block;">
                                                    <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
                                                </div>
                                                <div class="jp-interface">
                                                    <div class="jp-progress">
                                                        <div class="jp-seek-bar" style="width: 100%;">
                                                            <div class="jp-play-bar" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="jp-current-time" role="timer" aria-label="time">00:00</div>
                                                    <div class="jp-duration" role="timer" aria-label="duration">00:18</div>
                                                    <div class="jp-controls-holder">
                                                        <div class="jp-controls">
                                                            <button class="jp-previous" role="button" tabindex="0">previous</button>
                                                            <button class="jp-play" role="button" tabindex="0">play</button>
                                                        </div>
                                                        <div class="jp-volume-controls">
                                                            <button class="jp-mute" role="button" tabindex="0">mute</button>
                                                            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                                            <div class="jp-volume-bar">
                                                                <div class="jp-volume-bar-value" style="width: 100%;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="jp-toggles">
                                                            <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
                                                        </div>
                                                    </div>
                                                    <div class="jp-details" style="display: none;">
                                                        <div class="jp-title" aria-label="title">1. Ellie-Goulding</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp-playlist">
                                                <ul style="display: block;">
                                                    <li class="jp-playlist-current">
                                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">4. Maroon-Sugar <span class="jp-artist">by Pixar</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="jp-no-solution" style="display: none;">
                                                <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- script for play-list -->
                            <link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
                            <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
                            <script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
                            <script type="text/javascript">
                            //<![CDATA[
                            $(document).ready(function() {

                                new jPlayerPlaylist({
                                    jPlayer: "#jquery_jplayer_1",
                                    cssSelectorAncestor: "#jp_container_1"
                                }, [

                                    {
                                        title: "1. Ellie-Goulding",
                                        artist: "",
                                        mp4: "video/Ellie-Goulding.mp4",
                                        ogv: "video/Ellie-Goulding.ogv",
                                        webmv: "video/Ellie-Goulding.webm",
                                        poster: "video/play1.png"
                                    },
                                    {
                                        title: "2. Mark-Ronson-Uptown",
                                        artist: "",
                                        mp4: "video/Mark-Ronson-Uptown.mp4",
                                        ogv: "video/Mark-Ronson-Uptown.ogv",
                                        webmv: "video/Mark-Ronson-Uptown.webm",
                                        poster: "video/play2.png"
                                    },
                                    {
                                        title: "3. Ellie-Goulding",
                                        artist: "",
                                        mp4: "video/Ellie-Goulding.mp4",
                                        ogv: "video/Ellie-Goulding.ogv",
                                        webmv: "video/Ellie-Goulding.webm",
                                        poster: "video/play1.png"
                                    },
                                    {
                                        title: "4. Maroon-Sugar",
                                        artist: "",
                                        mp4: "video/Maroon-Sugar.mp4",
                                        ogv: "video/Maroon-Sugar.ogv",
                                        webmv: "video/Maroon-Sugar.webm",
                                        poster: "video/play4.png"
                                    },
                                    {
                                        title: "5. Pharrell-Williams",
                                        artist: "",
                                        mp4: "video/Pharrell-Williams.mp4",
                                        ogv: "video/Pharrell-Williams.ogv",
                                        webmv: "video/Pharrell-Williams.webm",
                                        poster: "video/play5.png"
                                    },
                                    {
                                        title: "6. Ellie-Goulding",
                                        artist: "",
                                        mp4: "video/Ellie-Goulding.mp4",
                                        ogv: "video/Ellie-Goulding.ogv",
                                        webmv: "video/Ellie-Goulding.webm",
                                        poster: "video/play1.png"
                                    },
                                    {
                                        title: "7. Pharrell-Williams",
                                        artist: "",
                                        mp4: "video/Pharrell-Williams.mp4",
                                        ogv: "video/Pharrell-Williams.ogv",
                                        webmv: "video/Pharrell-Williams.webm",
                                        poster: "video/play5.png"
                                    }
                                ], {
                                    swfPath: "../../dist/jplayer",
                                    supplied: "webmv,ogv,mp4",
                                    useStateClassSkin: true,
                                    autoBlur: false,
                                    smoothPlayBar: true,
                                    keyEnabled: true
                                });

                            });
                            //]]>
                            </script>
                           <br>
                           <br>
                            <div class="price-section">
                                <div class="pricing-inner">
                                    <h3 class="hd-tittle">View Guitar Chords</h3>
                                    <div class="pricing" >
                                        <img src="images/g1.jpg" style=" margin-right:10px;height:700px;"">
                                       </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <!--//end-pricing-tables-->
                            </div>
                        </div>
                        <!--//music-right-->
                        <div class="clearfix"></div>
                        <!-- /w3l-agile-its -->
                    </div>
                    <!--body wrapper start-->
                    <div class="review-slider">
                        <div class="tittle-head">
                            <h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
                            <div class="clearfix"> </div>
                        </div>
                        <ul id="flexiselDemo1">
                            <li>
                                <a href="single.html"><img src="images/x1.jpg" alt=""/></a>
                                <div class="slide-title">
                                    <h4>Tamasha </div>
									
								</li>
								<li>
									<a href="single.html"><img src="images/x2.jpg" alt=""/></a>
									<div class="slide-title"><h4>Shandaar</h4></div>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/x3.jpg" alt=""/></a>
                                <div class="slide-title">
                                    <h4>Suit</h4></div>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/x4.jpg" alt=""/></a>
                                <div class="slide-title">
                                    <h4>Judaa</h4></div>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/x5.jpg" alt=""/></a>
                                <div class="slide-title">
                                    <h4>Hindi Medium</h4></div>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/x6.jpg" alt=""/></a>
                                <div class="slide-title">
                                    <h4>Dear Zindagi </h4></div>
                            </li>
                            <li>
                                <a href="single.html"><img src="images/x7.jpeg" alt=""/></a>
                                <div class="slide-title">
                                    <h4>Raanjhnaa </h4></div>
                            </li>
                        </ul>
                        <script type="text/javascript">
                        $(window).load(function() {

                            $("#flexiselDemo1").flexisel({
                                visibleItems: 5,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: false,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 2
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 3
                                    },
                                    tablet: {
                                        changePoint: 800,
                                        visibleItems: 4
                                    }
                                }
                            });
                        });
                        </script>
                        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--body wrapper end-->
                <!-- /w3l-agile -->
            </div>
            <!--body wrapper end-->
            <div class="footer">
                <div class="footer-grid">
                    <h3>Navigation</h3>
                    <ul class="list1">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="radio.php">All Songs</a></li>
                        <li><a href="browse.php">Albums</a></li>
                        <li><a href="radio.php">New Collections</a></li>
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
                        <li><a href="contact.php">Contact Us</a></li>
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
        </div>
        <!--footer section start-->
        <footer>
        </footer>
    </section>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
</body>

</html>

