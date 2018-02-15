<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link rel="icon" type="image/png" href="assets/img/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/fonts/arial.ttf"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/animated.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" >
              <div class="col-xs-3"><img src="assets/img/logo.png" alt="logo" class="logo"></div>
              <div class="col-xs-9 h_title">Anik Blogs</div>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text"></i> Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
              </ul>
            </li>
            
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt"></i> Categorys <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">PHP</a></li>
                <li><a href="#">HTML</a></li>
              </ul>
            </li>
            <li><a href="contact us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1>Anik<span> Blogs</span></h1>
                <p>Lagest Online Bangla Blogs</p>
            </div>
        </div>
        <img src="assets/img/blog.jpg" alt="Top Blogs">
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="assets/img/slider/01.jpg" alt="Slider 1">
                          <!--div class="carousel-caption">
                            Slider
                          </div-->
                        </div>
                        <div class="item">
                          <img src="assets/img/slider/02.jpg" alt="...">
                        </div>
                         <div class="item">
                          <img src="assets/img/slider/03.jpg" alt="...">
                        </div>
                         <div class="item">
                          <img src="assets/img/slider/04.jpg" alt="...">
                          <div class="carousel-caption">
                            Slider
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day">15</div>
                                <div class="month">Fev</div>
                                <div class="year">2018</div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="#"><h4>This is demo heading for post one...</h4></a>
                                <p>Written by: <span>Sontus</span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="assets/img/profile/user-1.jpg" alt="Profile Picture" class="img-circle">
                            </div>
                        </div>
                        <a href="#"><img src="assets/img/post/post.jpg" alt="post"></a>
                        <p class="desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <a href="#" class="btn btn-primary">Read More..</a>
                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder" aria-hidden="true"></i><a href="#">
                             Category</a></span>|
                            <span class="secend"><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">
                            Comments</a></span>
                        </div>
                    </div>
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day">15</div>
                                <div class="month">Fev</div>
                                <div class="year">2018</div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="#"><h4>This is demo heading for post one...</h4></a>
                                <p>Written by: <span>Sontus</span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="assets/img/profile/user-1.jpg" alt="Profile Picture" class="img-circle">
                            </div>
                        </div>
                        <a href="#"><img src="assets/img/post/post.jpg" alt="post"></a>
                        <p class="desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <a href="#" class="btn btn-primary">Read More..</a>
                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder" aria-hidden="true"></i><a href="#">
                             Category</a></span>|
                            <span class="secend"><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">
                            Comments</a></span>
                        </div>
                    </div>
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day">15</div>
                                <div class="month">Fev</div>
                                <div class="year">2018</div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="#"><h4>This is demo heading for post one...</h4></a>
                                <p>Written by: <span>Sontus</span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="assets/img/profile/user-1.jpg" alt="Profile Picture" class="img-circle">
                            </div>
                        </div>
                        <a href="#"><img src="assets/img/post/post.jpg" alt="post"></a>
                        <p class="desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <a href="#" class="btn btn-primary">Read More..</a>
                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder" aria-hidden="true"></i><a href="#">
                             Category</a></span>|
                            <span class="secend"><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">
                            Comments</a></span>
                        </div>
                    </div>
                    
                    <nav id="pagination">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
                <div class="col-md-4">
                    <div class="widgets">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                              </span>
                            </div><!-- /input-group -->  
                        </div><!-- /Widgets Close -->
                        <div class="widgets">
                             <div class="popular">
                                <h4>Popular Posts</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/img/birds-1.jpg" alt="Birds"></a>
                                    </div>
                                    <div class="col-xs-8 details">
                                        <a href="#"><h4>This heading par post</h4></a>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 14 fev 2018</p>
                                    </div>
                                </div>
                                
                                   <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/img/birds-1.jpg" alt="Birds"></a>
                                    </div>
                                    <div class="col-xs-8 details">
                                        <a href="#"><h4>This heading par post</h4></a>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 14 fev 2018</p>
                                    </div>
                                </div>
                                
                                   <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                       <a href="#"><img src="assets/img/birds-1.jpg" alt="Birds"></a>
                                    </div>
                                    <div class="col-xs-8 details">
                                        <a href="#"><h4>This heading par post</h4></a>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 14 fev 2018</p>
                                    </div>
                                </div>
                            </div><!-- / Popular Post  Close-->
                        </div><!-- / Widgets Close -->
                        <div class="widgets">
                             <div class="popular">
                                <h4>Recent Posts</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/img/birds-1.jpg" alt="Birds"></a>
                                    </div>
                                    <div class="col-xs-8 details">
                                        <a href="#"><h4>This heading par post</h4></a>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 14 fev 2018</p>
                                    </div>
                                </div>
                                
                                   <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <a href="#"><img src="assets/img/birds-1.jpg" alt="Birds"></a>
                                    </div>
                                    <div class="col-xs-8 details">
                                        <a href="#"><h4>This heading par post</h4></a>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 14 fev 2018</p>
                                    </div>
                                </div>
                                
                                   <hr>
                                <div class="row">
                                    <div class="col-xs-4">
                                       <a href="#"><img src="assets/img/birds-1.jpg" alt="Birds"></a>
                                    </div>
                                    <div class="col-xs-8 details">
                                        <a href="#"><h4>This heading par post</h4></a>
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 14 fev 2018</p>
                                    </div>
                                </div>
                            </div><!-- / Recent post  Close-->
                        </div><!-- / Widgets Close -->
                        <div class="widgets">
                            <div class="popular">
                                <h4>Categorys</h4>
                                <hr>
                                  <div class="row">
                                    <div class="col-xs-6">
                                        <ul>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                          <ul>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                            <li><a href="">category</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- / Recent post -->
                          </div><!-- / Widgets Close -->
                    <div class="widgets">
                            <div class="social">
                                <h4>Social Icon</h4>
                                <hr>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <a href="#"><img src="assets/img/social/facebook.png" alt="facebook"></a>
                                     </div>
                                     <div class="col-xs-4">
                                         <a href="#"><img src="assets/img/social/twitter.png" alt="Twitter"></a>
                                     </div>
                                     <div class="col-xs-4">
                                         <a href="#"><img src="assets/img/social/Google-plus.png" alt="google+"></a>
                                     </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <a href="#"><img src="assets/img/social/linkedin.png" alt="linkedin"></a>
                                     </div>
                                     <div class="col-xs-4">
                                         <a href="#"><img src="assets/img/social/tumblr.png" alt="tumblr"></a>
                                     </div>
                                     <div class="col-xs-4">
                                         <a href="#"><img src="assets/img/social/Instagram.png" alt="Instagram"></a>
                                     </div>
                                 </div>
                            </div><!-- / Recent post -->
                          </div><!-- / Widgets Close -->
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            Copy Right By &copy; <a href="http:www.onlinepathshalabd.com">Sontus Chandra Anik</a>
            All Right Reserve
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="assets/js/jquery-3.3.1.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>
</body>
</html>