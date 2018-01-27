<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="../css/styleHeader.css"/>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
    <link href='//bizweb.dktcdn.net/100/178/647/themes/233989/assets/main.scss.css?1511881369182' rel='stylesheet' type='text/css' />
    

</head>
<body> 
    <div id="container">       
        <div id="header" class="header-3">
            <div class="header-top">
                <div class="wrapper">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 hidden-xs">
                        <div class="header-info">
                            <div class="description-header hidden-sm">Cửa hàng thực phẩm sạch</div>
                            <div class="color-primary"><a href="#">0123 4567 890</a>
                            </div>
                            <div class="color-primary hidden-xs">
                                <a href="#">khanh.ho@student.paserellesnumeriques.org</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <div class="pull-right left-acc clearfix">
                            <div class="top-acc">
                                <div class="dropdown">
                                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">    
                                        <li> <a href="#">Đăng nhập</a></li>
                                        <li> <a href="#">Đăng ký</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="top-search">
                                <form class="search-form form-inline">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm..." name="query" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="header-nav" id="navbar">

                <div class="wrapper">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 hidden-sm hidden-xs">
                        <a href="#"> <img src="../image/logo.png"></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 cart-block-r">
                        <div class="cart-block pull-right">
                            <a href="#" class="a-icon-cart">
                                <i class="flaticon-shopping-bag1 carti"></i>
                                <span class="cart-number">0</span>
                            </a>
                            <div class="cart-box">
                                <div class="cart-price top_cart_wrap pull-right">
                                    <a href="#">
                                        <span class="color-primary text-uppercase">Giỏ hàng</span>
                                        <div class="items-cart"><span class="cart-number">0</span> SP</div>
                                    </a>
                                    <div class="cart-small">
                                        <div class="top-cart-content" id="cart-info">
                                            <ul id="cart-sidebar" class="mini-products-list"></ul>
                                            <div class="fix-cart-mini cart-sidebar">
                                                <div class="top-subtotal">
                                                    <div class="price-total">
                                                        <span class="label-price-total">Tổng tiền: </span>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <button class="btn-checkout btn" type="button">
                                                        <span><i class="fa fa-check-square-o"></i> Thanh toán</span>
                                                    </button>
                                                    <button class="view-cart btn" type="button">
                                                        <span><i class="fa fa-cart-arrow-down"></i> Giỏ hàng</span>
                                                    </button>
                                                </div> <!-- end actions -->
                                            </div> <!-- end fix-cart-mini cart-sidebar -->
                                        </div> <!--  end top-cart-content -->
                                    </div> <!-- end cart-small -->
                                </div> <!-- end cart-price top_cart_wrap pull-right -->
                            </div> <!-- end cart-box -->
                        </div> <!-- end cart-block pull-right -->
                    </div> <!-- end col-lg-2 col-md-2 col-sm-3 col-xs-3 cart-block-r -->
                

                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 visible-sm visible-xs">
                        <a href="#" class="logo-ipad">
                            <img src="../image/logo.png"/>
                        </a>
                    </div>

                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm <span class="caret"></span></a>
                                <ul class="dropdown-menu">                          
                                    <li><a href="#">Đồ uống</a> </li>      
                                    <li><a href="#">Gia vị nấu ăn</a></li>
                                    <li><a href="#">Thực phẩm ăn liền</a></li>
                                    <li><a href="#">Rau củ</a></li>
                                    <li><a href="#">Trái cây</a></li>  
                                </ul>
                            </li> 
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Liên hệ</a></li>                      
                            <li><a href="#">Hệ thống cửa hàng</a></li>    
                        </ul>
                    </div> <!-- end collapse navbar-collapse" id="myNavbar -->
                </div> <!-- end wrapper -->
            </div> <!-- end header-nav -->
 

            <div id="slider">
              <img class="mySlides" src="../image/slider_1.jpg">
              <img class="mySlides" src="../image/slider_2.jpg">
              <img class="mySlides" src="../image/slider_3.jpg">
            </div>

          
           <!--  thanh menu cố định -->
            <script>
                window.onscroll = function() {myFunction()};

                var navbar = document.getElementById("navbar");
                var sticky = navbar.offsetTop;

                function myFunction() {
                  if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                  } else {
                    navbar.classList.remove("sticky");
                  }
                }
            </script>

            <!--  chạy slide -->
            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                       x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 9000);    
                }
            </script>
     
        </div> <!-- end header -->