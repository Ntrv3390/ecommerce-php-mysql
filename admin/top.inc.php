<?php
require('connection.inc.php');
require('functions.inc.php');
$sql="select * from admin";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
$sql1="select * from settings";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Panel | Swipe Right - Sneaker Wipes</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['company_logo']?>">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/normalize.css">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/themify-icons.css">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="<?php echo SITE_PATH ?>/admin/assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/index" > Dashboard</a>
                  </li>
                  
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/manage_orders/1" > Manage Orders</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/manage_blog" > Manage Blogs</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/newsletter" > Send Newsletters</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/coupon_manage" > Manage Coupon Code</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/product" > Manage Product</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/about_manage" > About Section Management</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/settings" > Settings</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/banner" > Banner Management</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/accordian" > Accordian Management</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/video_manage" > Manage Video Section</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/timer" > Offer (timer) Management</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/cta" > Call To Action Management</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/manage_testimonial" > Manage Testimonials</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/email_subscriber" >Newsletter Subscribers</a>
                  </li>
                   <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/social_media_links" > Manage Social Links</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/users" > Manage Users</a>
                  </li>
                 
                  <li class="menu-item-has-children dropdown">
                     <a href="<?php echo SITE_PATH ?>/admin/logout" > Logout</a>
                  </li>
                  
				  
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index"><img height="41px" width="68px" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row1['company_logo']?>" alt="Logo"></a>
                  
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $row['username']; ?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>