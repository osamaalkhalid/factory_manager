<link rel="icon" href="uploadImage/Logo/logo.png" type="image/x-icon">
<link href="files/assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">


<link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@600&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">

<link rel="stylesheet" href="popup_style.css">
</head>
<!-- Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer
-->

 <body>

<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
</div>
</div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">

<a href="home.php">

  <div class="text-center"><br>
<span><a href="#" style="color:black;font-family: 'Noto Sans Mono', monospace;font-size:30px">Afak Company</a></span>
</div>
</a>
<a class="mobile-options">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
 <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
<input type="text" class="form-control">
<span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="feather icon-maximize full-screen"></i>
</a>
</li>
</ul>
<ul class="nav-right">
 <li class="header-notification">
<div class="dropdown-primary dropdown">
<!-- <div class="dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-bell"></i>
<span class="badge bg-c-pink">5</span>
</div> -->
<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<h6></h6>
<label class="label label-danger"></label>
</li>
<li>
<div class="media">
<img class="d-flex align-self-center img-radius" src="files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user"><?php
      if(isset ($_SESSION['username']))
        {
             echo $_SESSION['username'];

          }
          else
            {
                     echo 'Admin';
              }

              ?></h5>
<p class="notification-msg"></p>
<span class="notification-time"></span>
</div>
</div>
</li>
</ul>
</div>
</li> 
<li class="user-profile header-notification" >
<div class="dropdown-primary dropdown">

<div class="dropdown-toggle" data-toggle="dropdown">  
      
<a href="#" ><img src="uploadImage/Profile/profile.jpg" class="img-radius" alt="User-Profile-Image"/></a><span>
</span>


</div>


<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <li>
<a href="setting.php">
<i class="feather icon-settings"></i> الاعدادات
</a>
</li>
<li>
  <?php if(isset($_SESSION['username'])){ ?>
<a href="profile.php">
<i class="feather icon-user"></i> الملف الشخصي
</a>
</li>
<li>
<a href="changepassword.php">
<i class="feather icon-edit"></i> تغير الرقم السري
</a>
</li>
<li>
<a href="logout.php">
<i class="feather icon-log-out"></i> تسجيل خروج+
</a>
</li>
<?php } ?>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

  

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigatio-lavel">القائمة</div>
<ul class="pcoded-item pcoded-left-item">
  <?php if($_SESSION['username']=='ndbhalerao91@gmail.com'){ ?>
    <li class="">
<a href="home.php">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">لوحة التحكم</span>
</a>
</li>
 

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">ادارة المستخدمين</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="group.php">
<span class="pcoded-mtext">ادارة المجموعات</span>
</a>
</li>
<li class="">
<a href="users.php">
<span class="pcoded-mtext">ادارة المستخدم</span>
</a>
</li>
</ul>
</li>
    
    <li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">تقرير العمال</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="group.php">
<span class="pcoded-mtext"> رواتب العمال اليومية</span>
</a>
</li>
<li class="">
<a href="users.php">
<span class="pcoded-mtext">رواتب العمال الشهرية</span>
</a>
</li>
    <li class="">
<a href="users.php">
<span class="pcoded-mtext">رواتب العمال حسب التاريخ</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="categories.php">
<span class="pcoded-micon"><i class="feather icon-book"></i></span>
<span class="pcoded-mtext">التصنيفات</span>
</a>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
<span class="pcoded-mtext">إدارة المنتجات</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="product.php">
<span class="pcoded-mtext">جميع المنتجات</span>
</a>
</li>
<li class="">
<a href="addproduct.php">
<span class="pcoded-mtext">اضافة منتج</span>
</a>
</li>
</ul>
</li>

<li class="">
<a href="media.php">
<span class="pcoded-micon"><i class="feather icon-stop-circle"></i></span>
<span class="pcoded-mtext">صور المنتجات</span>
</a>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-user"></i></span>
<span class="pcoded-mtext">إدارة المبيعات</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="sales.php">
<span class="pcoded-mtext">جميع المبيعات</span>
</a>
</li>
<li class="">
<a href="addsales.php">
<span class="pcoded-mtext">اضف بيع جديد</span>
</a>
</li>
</ul>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)">
<span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
<span class="pcoded-mtext">تقرير المبيعات</span>
</a>
<ul class="pcoded-submenu">
  <li class="">
<a href="salesdatereport.php">
<span class="pcoded-mtext">المبيعات حسب التاريخ</span>
</a>
</li>
<li class="">
<a href="monthly_sales.php">
<span class="pcoded-mtext">المبيعات الشهرية</span>
</a>
</li>
<li class="">
<a href="dailyreport.php">
<span class="pcoded-mtext">المبيعات اليومية</span>
</a>
</li>
</ul>
</li>

<?php } ?>
<li class="">
<a href="logout.php">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">تسجيل خروج</span>
</a>
</li>
</ul>
</li>
     
</ul>
</div>
    
</nav>
    
