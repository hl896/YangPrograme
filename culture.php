<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 13/07/2017
 * Time: 8:48 AM
 */


include ('session.php');

?>


<!DOCTYPE html>
<html>
<head>
    <title>Yang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstarp-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstarp-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <script src="http://www.5imoban.net/download/jquery/jquery-1.11.0.min.js"></script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!-- dropdown -->
    <script src="js/jquery.easydropdown.js"></script>
    <link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/scripts.js" type="text/javascript"></script>
    <!--js-->
    <!--/js-->
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- slider -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
            });
        });
    </script>
    <!-- slider -->
</head>
<body>
<div id="home" class="header">
    <div id="profile">
        <b id="Welcome">Welcome:<i><?php echo $login_session; ?></i></b><br>
        <b id="logout"><a href="logout.php">logout</a></b>
    </div>
    <div class="container">
        <div class="header-bottom">
            <!-- container -->

            <div class="head-logo">
                <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
            </div>
            <div class="logo-right">
                <img src="images/468x60.gif" class="img-responsive" alt="" />
            </div>
            <div class="clearfix"> </div>

            <!-- //container -->
        </div>
    </div>
    <!-- //header -->
    <!-- bg-banner -->
    <div class="container">
        <div class="bg-banner">
            <div class="banner-bottom-bg">
                <div class="banner-bg">

                    <!-- banner -->
                    <div class="banner">
                        <div class="banner-grids">
                            <div class="banner-top">
                                <span class="menu">MENU</span>
                                <ul class="nav banner-nav">
                                    <li class="dropdown1"><a href="index.php">Home</a></li>
                                    <li class="dropdown1"><a href="culture.php">Culture</a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="lifestyle.php">Lifestyle</a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="archives.php">Archives</a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="sports.php">Sport</a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="travel.php">Travel</a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="celebrity.php">Celebrity</a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="fullwidth.php">Full Width </a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="404.php">World News</a>
                                        <ul class="dropdown2">
                                            <li><a href="lifestyle.php">Lifestyle</a></li>
                                            <li><a href="archives.php">Archives</a></li>
                                            <li><a href="fullwidth.php">Fullwidth</a></li>
                                            <li><a href="404.php">Worldnews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown1"><a href="contact.php">Contact</a></li>
                                </ul>
                                <script>
                                    $("span.menu").click(function(){
                                        $(" ul.nav").slideToggle("slow" , function(){
                                        });
                                    });
                                </script>
                            </div>
                            <div class="banner-middle">
                                <!-- banner-bottom-grids -->
                                <div class="banner-bottom-grids">
                                    <!-- banner-bottom-left -->
                                    <div class="banner-bottom-left">
                                        <div class="banner-bottom-left-grids">
                                            <div class="col-md-4 banner-left-grid fullwidth-left-grid">
                                                <h3>Novum tation </h3>
                                                <a href="single.php"><img src="images/22.jpg" alt="" /></a>
                                                <h4><a href="single.php">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                <p class="text">Lorem ipsum ex vix illud nonummy,  content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum novum tation et his. At vix scripta patrioque scribentur...</p>
                                                <div class="blog-grids">
                                                    <div class="blog-grid-left">
                                                        <img src="images/5b.jpg" alt="" />
                                                    </div>
                                                    <div class="blog-grid-right">
                                                        <a href="single.php">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                                                        <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                                <div class="blog-grids">
                                                    <div class="blog-grid-left">
                                                        <img src="images/1b.jpg" alt="" />
                                                    </div>
                                                    <div class="blog-grid-right">
                                                        <a href="single.php">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                                                        <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 banner-left-grid fullwidth-left-grid">
                                                <h3>Ex vix illud</h3>
                                                <a href="single.php"><img src="images/24.jpg" alt="" /></a>
                                                <h4><a href="single.php">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                <p class="text">Lorem ipsum ex vix illud nonummy,  content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum novum tation et his. At vix scripta patrioque scribentur...</p>
                                                <div class="blog-grids">
                                                    <div class="blog-grid-left">
                                                        <img src="images/2b.jpg" alt="" />
                                                    </div>
                                                    <div class="blog-grid-right">
                                                        <a href="single.php">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                                                        <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                                <div class="blog-grids">
                                                    <div class="blog-grid-left">
                                                        <img src="images/4b.jpg" alt="" />
                                                    </div>
                                                    <div class="blog-grid-right">
                                                        <a href="single.php">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                                                        <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 banner-left-grid fullwidth-left-grid">
                                                <h3>Vix scripta</h3>
                                                <a href="single.php"><img src="images/20.jpg" alt="" /></a>
                                                <h4><a href="single.php">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                                <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                <p class="text">Lorem ipsum ex vix illud nonummy,  content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum novum tation et his. At vix scripta patrioque scribentur...</p>
                                                <div class="blog-grids">
                                                    <div class="blog-grid-left">
                                                        <img src="images/1b.jpg" alt="" />
                                                    </div>
                                                    <div class="blog-grid-right">
                                                        <a href="single.php">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                                                        <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                                <div class="blog-grids">
                                                    <div class="blog-grid-left">
                                                        <img src="images/3b.jpg" alt="" />
                                                    </div>
                                                    <div class="blog-grid-right">
                                                        <a href="single.php">Fly Fishers Serving as Transports for Noxious Little Invaders</a>
                                                        <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    </div>
                                                    <div class="clearfix"> </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>

                                        <!-- post -->
                                        <div class="post">
                                            <h3>Latest Posts</h3>
                                            <div class="post-grids">
                                                <div class="col-md-4 post-left">
                                                    <a href="single.php"><img src="images/23.jpg" alt="" /></a>
                                                </div>
                                                <div class="col-md-8 post-right fullwidth-left">
                                                    <h4><a href="single.php">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    <p class="text">Lorem ipsum ex vix McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked at at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin Hampden-Sydney College in Virginia, looked up one of the more obscure Latin up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sectio illud nonummy, novum tation et his. At vix scripta patrioque scribentur
                                                        Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="post-grids">
                                                <div class="col-md-4 post-left">
                                                    <a href="single.php"><img src="images/21.jpg" alt="" /></a>
                                                </div>
                                                <div class="col-md-8 post-right fullwidth-left">
                                                    <h4><a href="single.php">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta McClintock, a Latin at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sectio patrioque scribentur
                                                        Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin scribentur...</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="post-grids">
                                                <div class="col-md-4 post-left">
                                                    <a href="single.php"><img src="images/25.jpg" alt="" /></a>
                                                </div>
                                                <div class="col-md-8 post-right fullwidth-left">
                                                    <h4><a href="single.php">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>
                                                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix McClintock, a Latin professor at at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sectio scripta patrioque scribentur
                                                        Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin patrioque scribentur...</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                        <!-- //post -->
                                    </div>
                                    <!-- //banner-bottom-left -->

                                </div>
                                <!-- //banner-bottom-grids -->
                            </div>
                        </div>
                    </div>
                    <!-- //banner -->
                </div>
            </div>
        </div>
        <div class="up-arrow">
            <div class="up-arrow-left">
                <ul>
                    <li><a href="404.php">Elements</a></li> //
                    <li><a href="fullwidth.php">Full Width </a></li> //
                    <li><a href="archives.php">Archives</a></li> //
                    <li><a href="contact.php">Contact Form</a></li> //
                    <li><a href="404.php">Another 3.0 Menu</a></li>
                </ul>
            </div>
            <div class="up-arrow-right">
                <a class="scroll" href="#home">Back to Top</a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //bg-banner -->
        <div class="footer">
            <!-- container -->
            <div class="footer-grids">

                <div class="col-md-4 viewport">
                    <h3>关于<a href="http://www.5imoban.net/" target="_blank" title="响应式网页模板">我爱模板网</a></h3>
                    <p>我爱模板网存有是具有更多或更少的正常分布的字母，而不是使用
                        <span>许多桌面出版软件包和网页编辑器现在使用<a href="http://www.5imoban.net/" target="_blank" title="响应式网页模板">我爱模板网</a>存有作为默认的示范文本，并查找“Lorem存有”会发现很多网站仍处于起步阶段。各种版本将发现许多网站还处于起步阶段已经演变</span>
                        有可用的通道的Lorem存有许多变化，但大多数都以某种形式模型的文本出现变更，并。
                    </p>
                </div>
                <div class="col-md-4 recent-posts footer-left">
                    <h3>最新文章</h3>
                    <ul>
                        <li><a target="_blank" href="http://www.5imoban.net/yuanma/qiye/2013121323.html">蓝色风格大气企业站ASP源码</a></li>
                        <li><a target="_blank" href="http://www.5imoban.net/yuanma/qiye/20140325366.html">蓝色大气工作室网站模板dedecms源码</a></li>
                        <li><a target="_blank" href="http://www.5imoban.net/yuanma/qiye/20140221236.html">MYCOM企业网站管理系统</a></li>
                        <li><a target="_blank" href="http://www.5imoban.net/yuanma/qiye/20140221235.html">MetInfo企业网站管理系统</a></li>
                        <li><a target="_blank" href="http://www.5imoban.net/uploads/140214/1-140214150402629.jpg">大气蓝色企业网站织梦模版源码</a></li>
                        <li><a target="_blank" href="http://www.5imoban.net/yuanma/qiye/2013123198.html">蓝色+暗灰色印刷企业站dedecms模版</a></li>
                    </ul>
                </div>

                <div class="col-md-4 footer-flick">
                    <h3>Flickr Photostream</h3>
                    <div class="fb-page" data-href="https://www.facebook.com/网页模板" data-hide-cover="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/网页模板">Facebook</a></blockquote></div></div>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                </div>
                <div class="clearfix"> </div>
                <div class="copyright">
                    <p><a href="http://www.5imoban.net/" target="_blank" title="响应式网页模板">我爱模板网</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>






