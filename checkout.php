<?php
   require('connection.inc.php');
   require('functions.inc.php');
   $sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
   $sql1="select * from social_links";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
header('location:product');
die();
}
	
$cart_total=0;

if(isset($_POST['submit'])){
   $first_name=get_safe_value($con,$_POST['first_name']);
   $last_name=get_safe_value($con,$_POST['last_name']);
   $state=get_safe_value($con,$_POST['state']);
	$city=get_safe_value($con,$_POST['city']);
	$pincode=get_safe_value($con,$_POST['pincode']);
   $address=get_safe_value($con,$_POST['address']);
   $email=get_safe_value($con,$_POST['email']);
   $phone=get_safe_value($con,$_POST['phone']);
	$payment_type=get_safe_value($con,$_POST['payment_type']);
   if(isset($_SESSION['USER_LOGIN']))
   {
	$user_id=$_SESSION['USER_ID'];
   }
   else
   {
      $user_id=rand(11111,99999);
   }
	foreach($_SESSION['cart'] as $key=>$val)
   {
		$productArr=get_product($con,'',$key);
		$price=$productArr[0]['actual_price'];
		$qty=$val['qty'];
		$cart_total=($price*$qty);
	}
	$payment_status='pending';
	$order_status='1';
	$added_on=date('Y-m-d h:i:s');
	$total_price=$price*$qty;
   if(isset($_SESSION['COUPON_ID'])){
      $coupon_id = $_SESSION['COUPON_ID'];
      $coupon_value = $_SESSION['COUPON_VALUE'];
      $coupon_code = $_SESSION['COUPON_CODE'];
      $total_price=$total_price-$coupon_value;
      unset($_SESSION['COUPON_ID']);
      unset($_SESSION['COUPON_VALUE']);
      unset($_SESSION['COUPON_CODE']);
   }else{
      $coupon_id = '';
      $coupon_value = '';
      $coupon_code = '';
   }
   $txn_my_id = substr(hash('sha256',mt_rand() . microtime()),0,20);
	mysqli_query($con,"insert into `order`(first_name,last_name,state,city,pincode,address,email,phone,payment_type,payment_status,order_status,coupon_id,coupon_value,coupon_code,added_on,total_price,user_id,txnid) values('$first_name','$last_name','$state','$city','$pincode','$address','$email','$phone','$payment_type','$payment_status','$order_status','$coupon_id','$coupon_value','$coupon_code','$added_on','$total_price','$user_id','$txn_my_id')");
	$order_id=mysqli_insert_id($con);
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'',$key);
		$price=$productArr[0]['actual_price'];
		$qty=$val['qty'];
		mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,price,order_txn_id) values('$order_id','$key','$qty','$price','$txn_my_id')");
	}
	unset($_SESSION['cart']);
   if($payment_type=='Paytm'){
      header("Pragma: no-cache");
      header("Cache-Control: no-cache");
      header("Expires: 0");
      $html = '<form method="post" action="pgRedirect" name="frmPayment" style="display:none;">
            <input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                        name="ORDER_ID" autocomplete="off"
                        value="'.$txn_my_id.'"><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="'.$user_id.'"><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"><input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB"><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="'.$total_price.'"><input value="CheckOut" type="submit"></form><script type="text/javascript">document.frmPayment.submit();</script>';
         echo $html;
   }
	
}

?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <title>Checkout | Swipe Right</title>
      <meta charset="UTF-8">
      <meta name="author" content="AKMP Tutorials | Swipe Right">
      <link rel="dns-prefetch" href="//s.w.org">
      <link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Feed" href="/feed/">
      <link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Comments Feed" href="/comments/feed/">
      <script>
         window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"httpsbarcode.akmp.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.9"}};
         !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
      </script>
      <style>img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <link rel="stylesheet" id="wp-block-library-css" href="wp-includes/css/dist/block-library/style.min.css?ver=5.5.9" media="all">
      <link rel="stylesheet" id="hello-elementor-css" href="wp-content/themes/hello-elementor/style.min.css?ver=2.6.1" media="all">
      <link rel="stylesheet" id="hello-elementor-theme-style-css" href="wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1" media="all">
      <link rel="stylesheet" id="elementor-frontend-css" href="wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.7.0" media="all">
      <link rel="stylesheet" id="elementor-post-5-css" href="wp-content/uploads/elementor/css/post-5.css?ver=1660386820" media="all">
      <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=2.6.3" media="all">
      <link rel="stylesheet" id="elementor-icons-css" href="wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0" media="all">
      <link rel="stylesheet" id="elementor-global-css" href="wp-content/uploads/elementor/css/global.css?ver=1660388423" media="all">
      <link rel="stylesheet" id="elementor-post-497-css" href="wp-content/uploads/elementor/css/post-497.css?ver=1661752420" media="all">
      <link rel="stylesheet" id="ekit-widget-styles-css" href="wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.6.3" media="all">
      <link rel="stylesheet" id="ekit-responsive-css" href="wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.6.3" media="all">
      <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.5.9" media="all">
      <link rel="stylesheet" id="elementor-icons-shared-0-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
      <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
      <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all">
      <script src="wp-includes/js/jquery/jquery.js?ver=1.12.4-wp" id="jquery-core-js"></script>
      <link rel="https://api.w.org/" href="wp-json/">
      <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/497">
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd">
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml">
     
      <link rel="alternate" type="application/json+oembed" href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F">
      <link rel="alternate" type="text/xml+oembed" href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F&#038;format=xml">
      <link rel="icon" href="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" sizes="32x32">
      <meta name="msapplication-TileImage" content="httpsbarcode.akmp.in/wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-270x270.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   </head>
   <body class="home page-template page-template-elementor_canvas page page-id-497 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-497">
      <div data-elementor-type="wp-page" data-elementor-id="497" class="elementor elementor-497">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-7ed204f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7ed204f" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-859ef6d" data-id="859ef6d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-61263f3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="61263f3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5c85517" data-id="5c85517" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-547a045 elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="547a045" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                       <link rel="stylesheet" href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                       <ul class="elementor-icon-list-items elementor-inline-items">
                                       <li class="elementor-icon-list-item elementor-inline-item">
                                             <a href="tel:<?php echo $row['company_number'];?>">
                                             <span class="elementor-icon-list-icon">
                                             <i aria-hidden="true" class="icon icon-phone-handset"></i>						</span>
                                             <span class="elementor-icon-list-text"><?php echo $row[1];?>  |</span>
                                             </a>
                                          </li>
                                          
                                          <li class="elementor-icon-list-item elementor-inline-item">
                                              <a href="mailto:<?php echo $row['company_email'];?>">
                                             <span class="elementor-icon-list-icon">
                                             <i aria-hidden="true" class="icon icon-email1"></i>						</span>
                                             <span class="elementor-icon-list-text"><?php echo $row[2];?></span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-552786a" data-id="552786a" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-3af0e87 elementor-widget elementor-widget-elementskit-social-media" data-id="3af0e87" data-element_type="widget" data-widget_type="elementskit-social-media.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <ul class="ekit_social_media">
                                          <li class="elementor-repeater-item-5eb0945">
                                             <a href="<?php echo $row1[0]; ?>" class="facebook">
                                             <i aria-hidden="true" class="fasicon icon-facebook"></i>									
                                             </a>
                                          </li>
                                          <li class="elementor-repeater-item-404d637">
                                             <a href="<?php echo $row1[1]; ?>" class="twitter">
                                             <i aria-hidden="true" class="fasicon icon-twitter"></i>									
                                             </a>
                                          </li>
                                          <li class="elementor-repeater-item-98fdd10">
                                             <a href="<?php echo $row1[2]; ?>" class="linkedin">
                                             <i aria-hidden="true" class="fasicon icon-linkedin"></i>									
                                             </a>
                                          </li>
                                          <li class="elementor-repeater-item-e9f752e">
                                             <a href="<?php echo $row1[3]; ?>" class="youtube">
                                             <i aria-hidden="true" class="fab fa-youtube"></i>									
                                             </a>
                                          </li>
                                          <li class="elementor-repeater-item-e2aa959">
                                             <a href="<?php echo $row1[4]; ?>" class="instagram">
                                             <i aria-hidden="true" class="fab fa-instagram"></i>									
                                             </a>
                                          </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-cbcf0f4 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cbcf0f4" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a251a6a" data-id="a251a6a" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-0708c4d elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="0708c4d" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                       <style>/*! elementor - v3.7.0 - 08-08-2022 */
                                          .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
                                       </style>
                                       <img width="388" height="316" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 300w" sizes="(max-width: 388px) 100vw, 388px">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-26c5bd0" data-id="26c5bd0" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-cbf9c7d elementor-widget__width-auto elementor-widget elementor-widget-ekit-nav-menu" data-id="cbf9c7d" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon="icon icon-hamburger-2" data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">
                                          <button class="elementskit-menu-hamburger elementskit-menu-toggler">
                                          <i aria-hidden="true" class="ekit-menu-icon icon icon-hamburger-2"></i>            </button>
                                          <div id="ekit-megamenu-primary" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-no ekit-nav-dropdown-hover">
                                         <ul id="menu-primary" class="elementskit-navbar-nav elementskit-menu-po-right submenu-click-on-icon">
                                            <li id="menu-item-581" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-581 nav-item elementskit-mobile-builder-content active" data-vertical-menu="750px"><a href="index" class="ekit-menu-nav-link active">Home</a></li>
                                                <li id="menu-item-583" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-583 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="product" class="ekit-menu-nav-link">Our Product</a></li>
                                                <li id="menu-item-583" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-583 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="about_us" class="ekit-menu-nav-link">About Us</a></li>
                                                <li id="menu-item-583" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-583 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="blog" class="ekit-menu-nav-link">Blogs</a></li>
                                                <li id="menu-item-582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-582 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="checkout" class="ekit-menu-nav-link">Checkout</a></li>
                                                <?php if(isset($_SESSION['ADMIN_LOGIN'])){ ?>
                                                <li id="menu-item-582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-582 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="admin/index" class="ekit-menu-nav-link">Hey <?php echo $_SESSION['ADMIN_USERNAME']; ?></a></li>
                                                <?php } ?>
                                                <?php //if(isset($_SESSION['USER_LOGIN'])){
                                            //     echo'
                                            //  <li id="menu-item-582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-582 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="logout" class="ekit-menu-nav-link">Logout</a></li>';}
                                            //  else{
                                            //     echo'
                                            //  <li id="menu-item-582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-582 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="login" class="ekit-menu-nav-link">Login</a></li>';
                                            //  echo'
                                            //  <li id="menu-item-582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-582 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="user_register" class="ekit-menu-nav-link">Register</a></li>';
                                            //  }
                                             ?>
                                             </ul>
                                             <div class="elementskit-nav-identity-panel">
                                                <div class="elementskit-site-title">
                                                   <a class="elementskit-nav-logo" href="/" target="_self" rel="">
                                                   <img width="388" height="316" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-full size-full" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w,/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 300w" sizes="(max-width: 388px) 100vw, 388px"></a> 
                                                </div>
                                                <button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button>
                                             </div>
                                          </div>
                                          <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div>
                                       </div>
                                    </div>
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-b0568a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b0568a7" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                            <?php
                                 foreach($_SESSION['cart'] as $key=>$val){
									$productArr=get_product($con,'',$key);
									$pname=$productArr[0]['product_title_black'].' '.$productArr[0]['product_title_blue'];
									$price=$productArr[0]['actual_price'];
									$image=$productArr[0]['image'];
									$qty=$val['qty'];
                            ?>
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d525ea" data-id="1d525ea" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-7905d9a elementor-widget elementor-widget-image" data-id="7905d9a" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                           <img width="800" height="800" src="wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" class="attachment-large size-large" alt="" loading="lazy" srcset="wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$image?> 1024w,wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$image?> 300w, wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$image?> 150w,wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$image?> 768w, wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$image?> 1536w, wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$image?> 1600w" sizes="(max-width: 800px) 100vw, 800px">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e10da90" data-id="e10da90" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-792d29c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="792d29c" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0fed112" data-id="0fed112" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-3cbaca9 elementor-widget elementor-widget-elementskit-heading" data-id="3cbaca9" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                             <h2 class="ekit-heading--title elementskit-section-title ">
                                             <?php echo $pname; ?>
                                             </h2>
                                             <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                                <div class="elementskit-border-divider"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-1831c85 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1831c85" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7f560ab" data-id="7f560ab" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-fe64733 elementor-widget elementor-widget-heading" data-id="fe64733" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <style>/*! elementor - v3.7.0 - 08-08-2022 */
                                          .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                                       </style>
                                       <h4 class="elementor-heading-title elementor-size-default">Price :</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-603467c" data-id="603467c" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-48393ba elementor-widget elementor-widget-heading" data-id="48393ba" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                    <?php $total_price=$qty*$price; ?>
                                       <h2 class="elementor-heading-title elementor-size-default">₹<?php echo $price;?></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                    
                                                     
                                                   
                     
                     
                     
                     
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-079c2f9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="079c2f9" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-47f92ff" data-id="47f92ff" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-0180268 elementor-widget elementor-widget-heading" data-id="0180268" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h4 class="elementor-heading-title elementor-size-default">Quantity:</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-57a6aa2" data-id="57a6aa2" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-af789df elementor-widget elementor-widget-heading" data-id="af789df" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default"><?php echo $qty;?></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-1bfaca0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1bfaca0" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0921e48" data-id="0921e48" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-0605462 elementor-widget elementor-widget-heading" data-id="0605462" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h4 class="elementor-heading-title elementor-size-default" id="coupon_box" style="display:none;">Coupon Value:</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-06353a1" data-id="06353a1" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-83e22d0 elementor-widget elementor-widget-heading" data-id="83e22d0" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default" style=""><span id="coupon_price"></span></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-13cb4ed elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="13cb4ed" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5dd6fe5" data-id="5dd6fe5" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-4620401 elementor-widget elementor-widget-heading" data-id="4620401" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h4 class="elementor-heading-title elementor-size-default">Total :</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-584a7e8" data-id="584a7e8" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ffcec9c elementor-widget elementor-widget-heading" data-id="ffcec9c" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default">₹<span id="order_total_price"><?php echo $total_price;?></span></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <div class="elementor-element elementor-element-b1b932d elementor-widget elementor-widget-text-editor" data-id="b1b932d" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.7.0 - 08-08-2022 */
                              .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
                           </style>
                           <p><strong><span id="coupon_result"></span></strong></p>
                           <p><strong><span id="coupon_res"></span></strong></p>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-f1760fb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f1760fb" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0e9a4e8" data-id="0e9a4e8" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-2bc8a49 ekit_wpForms_container-form-button-custom elementor-widget elementor-widget-elementskit-wp-forms" data-id="2bc8a49" data-element_type="widget" data-widget_type="elementskit-wp-forms.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con ekit_wpForms_container">
                              <div class="wpforms-container wpforms-container-full" id="wpforms-503">
                                 <form id="checkout-form" class="wpforms-validate" method="post">
                                    <noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>
                                    <div class="wpforms-field-container">
                                       <div id="wpforms-503-field_4-container" class="wpforms-field wpforms-field-name" data-field-id="4">  
                                          <div class="wpforms-field-row wpforms-field-medium">
                                             <div class="wpforms-field-row-block wpforms-first wpforms-one-half">
                                                <input type="text" id="wpforms-503-field_4" class="wpforms-field-name-first wpforms-field-required" name="first_name" placeholder="First Name" required>
                                             </div>
                                 </br>
                                             <div class="wpforms-field-row-block wpforms-one-half">
                                                <input type="text" id="wpforms-503-field_4-last" class="wpforms-field-name-last wpforms-field-required" name="last_name" placeholder="Last Name" required>
                                             </div>
                                          </div>
                                       </div></br>
                                       <div id="wpforms-503-field_11-container" class="wpforms-field wpforms-field-name" data-field-id="11">
                                          
                                          <div class="wpforms-field-row wpforms-field-medium">
                                                 <div class="wpforms-field-row-block wpforms-first wpforms-one-half">
                                                 <select name="state" id="state" class="form-control" required>
                                                     <option value="">Select State</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    </select> 
                                                </div>
                                                </br>
                                             <div class="wpforms-field-row-block wpforms-one-half">
                                                <input type="text" id="wpforms-503-field_11-last" class="wpforms-field-name-last wpforms-field-required" name="city" placeholder="City" required>
                                             </div></br>
                                          </div>
                                       </div>
                                       <div id="wpforms-503-field_8-container" class="wpforms-field wpforms-field-number" data-field-id="8">
                                          <input type="number" id="wpforms-503-field_8" class="wpforms-field-medium wpforms-field-required" name="pincode" placeholder="Pincode" required>
                                       </div></br>
                                       <div id="wpforms-503-field_13-container" class="wpforms-field wpforms-field-name" data-field-id="13">
                                          <input type="text" id="wpforms-503-field_13" class="wpforms-field-medium wpforms-field-required" name="address" placeholder="Address" required>
                                       </div></br>
                                       <div id="wpforms-503-field_14-container" class="wpforms-field wpforms-field-number" data-field-id="14">
                                          <input type="email" id="wpforms-503-field_14" class="wpforms-field-medium wpforms-field-required" name="email" placeholder="Email" required>
                                       </div></br>
                                       <div id="wpforms-503-field_14-container" class="wpforms-field wpforms-field-number" data-field-id="14">
                                          <input type="number" id="wpforms-503-field_14" class="wpforms-field-medium wpforms-field-required" name="phone" placeholder="phone" required>
                                       </div></br>
                                       <div id="wpforms-503-field_14-container" class="wpforms-field wpforms-field-number" data-field-id="14">
                                          Pay With Paytm
                                          <input type="radio" checked id="wpforms-503-field_14" class="wpforms-field-medium wpforms-field-required" name="payment_type" value="Paytm" placeholder="Pay using paytm" required>
                                       </div>
                                    </div></br>
                                    <div class="wpforms-submit-container">
                                    <button  style="width:100%;text-align:center;" type="submit" name="submit"  class="wpforms-submit">Place your order</button></div>
                                 </form>
                              </div>
                              <!-- .wpforms-container -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3f2e713" data-id="3f2e713" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-7ad13d5 elementor-widget elementor-widget-heading" data-id="7ad13d5" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h4 class="elementor-heading-title elementor-size-default">Have a promo code?</h4>
                        </div>
                     </div>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-35494da elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="35494da" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fbb76a9" data-id="fbb76a9" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-7e16a02 ekit_wpForms_container-form-button-custom elementor-widget elementor-widget-elementskit-wp-forms" data-id="7e16a02" data-element_type="widget" data-widget_type="elementskit-wp-forms.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con ekit_wpForms_container">
                                          <div class="wpforms-container wpforms-container-full" id="wpforms-664">
                                          <form id="promo_form" class="wpforms-validate"  method="post">
   <div class="wpforms-field-container"><div id="wpforms-664-field_1-container" class="wpforms-field wpforms-field-text" data-field-id="1">
   <label class="wpforms-field-label wpforms-label-hide" for="wpforms-664-field_1"> <span class="wpforms-required-label"></span></label>
   <input type="text" id="promo_code" class="wpforms-field-medium wpforms-field-required" name="promo_code" placeholder="Enter promo code" required><div id="promo_error">
   </div></div></div></br>
   <div class="wpforms-submit-container">
  <a href="#coupon_result"> <button type="button" onclick="set_coupon()" name="promo_btn" id="promo_btn" class="wpforms-submit">Apply</button></a></div></form>
                                          </div>
                                          <!-- .wpforms-container -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-9e058f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9e058f5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-60e7af1" data-id="60e7af1" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-827a6af elementor-widget elementor-widget-image" data-id="827a6af" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                          
                           <img width="176" height="50" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-full size-full" alt="" loading="lazy">
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-8277d4c elementor-widget elementor-widget-text-editor" data-id="8277d4c" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p>Founder by sneaker fanatics, Swipe Right aims at keeping your sneakers as good as new - just like you unboxed them on day 1! With Swipe Right, we bring to the sneaker community a sneaker cleaning product which is protable, accessible, and provides a hassle-free cleaning experience.</p>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-5870d6b elementor-widget elementor-widget-elementskit-social-media" data-id="5870d6b" data-element_type="widget" data-widget_type="elementskit-social-media.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <ul class="ekit_social_media">
                              <li class="elementor-repeater-item-da8f4de">
                           <a href="<?php echo $row1[0]; ?>" class="facebook">
                           <i aria-hidden="true" class="fasicon icon-facebook"></i>									
                           </a>
                        </li>
                        <li class="elementor-repeater-item-1399011">
                           <a href="<?php echo $row1[1]; ?>" class="twitter">
                           <i aria-hidden="true" class="fasicon icon-twitter"></i>									
                           </a>
                        </li>
                        <li class="elementor-repeater-item-8f886e8">
                           <a href="<?php echo $row1[2]; ?>" class="linkedin">
                           <i aria-hidden="true" class="fasicon icon-linkedin"></i>									
                           </a>
                        </li>
                        <li class="elementor-repeater-item-048c536">
                           <a href="<?php echo $row1[3]; ?>" class="youtube">
                           <i aria-hidden="true" class="fasicon icon-youtube"></i>									
                           </a>
                        </li>
                        <li class="elementor-repeater-item-c8596be">
                           <a href="<?php echo $row1[4]; ?>" class="2">
                           <i aria-hidden="true" class="fasicon icon-instagram-2"></i>									
                           </a>
                        </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e64de47" data-id="e64de47" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-3e7e090 elementor-widget elementor-widget-heading" data-id="3e7e090" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Useful Links</h2>
                        </div>
                     </div>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-cf6ef42 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cf6ef42" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1a1e6fd" data-id="1a1e6fd" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-c19ab22 elementor-widget elementor-widget-elementskit-page-list" data-id="c19ab22" data-element_type="widget" data-widget_type="elementskit-page-list.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <div class="elementor-icon-list-items ">
                                              <div class="elementor-icon-list-item   ">
                                                <a href="index" class="elementor-repeater-item-01d06f0 ekit_badge_left">
                                                   <div class="ekit_page_list_content">
                                                      <span class="elementor-icon-list-text">
                                                      <span class="ekit_page_list_title_title">Home</span>
                                                      </span>
                                                   </div>
                                                </a>
                                             </div>
                                              <div class="elementor-icon-list-item   ">
                                                <a href="product" class="elementor-repeater-item-01d06f0 ekit_badge_left">
                                                   <div class="ekit_page_list_content">
                                                      <span class="elementor-icon-list-text">
                                                      <span class="ekit_page_list_title_title">Our Product</span>
                                                      </span>
                                                   </div>
                                                </a>
                                             </div>
                                              <div class="elementor-icon-list-item   ">
                                                <a href="about" class="elementor-repeater-item-01d06f0 ekit_badge_left">
                                                   <div class="ekit_page_list_content">
                                                      <span class="elementor-icon-list-text">
                                                      <span class="ekit_page_list_title_title">About Us</span>
                                                      </span>
                                                   </div>
                                                </a>
                                             </div>
                                              <div class="elementor-icon-list-item   ">
                                                <a href="blog" class="elementor-repeater-item-01d06f0 ekit_badge_left">
                                                   <div class="ekit_page_list_content">
                                                      <span class="elementor-icon-list-text">
                                                      <span class="ekit_page_list_title_title">Blogs</span>
                                                      </span>
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="elementor-icon-list-item   ">
                                                <a href="terms_and_conditions" class="elementor-repeater-item-01d06f0 ekit_badge_left">
                                                   <div class="ekit_page_list_content">
                                                      <span class="elementor-icon-list-text">
                                                      <span class="ekit_page_list_title_title">T&C</span>
                                                      </span>
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="elementor-icon-list-item   ">
                                                <a href="privacy_policy" class="elementor-repeater-item-01d06f0 ekit_badge_left">
                                                   <div class="ekit_page_list_content">
                                                      <span class="elementor-icon-list-text">
                                                      <span class="ekit_page_list_title_title">Privacy Policy</span>
                                                      </span>
                                                   </div>
                                                </a>
                                             </div>
                                             <div class="elementor-icon-list-item   ">
                                                <a href="disclaimer" class="elementor-repeater-item-01d06f0 ekit_badge_left">
                                                   <div class="ekit_page_list_content">
                                                      <span class="elementor-icon-list-text">
                                                      <span class="ekit_page_list_title_title">Disclaimer</span>
                                                      </span>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
               </div>
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d7070c1" data-id="d7070c1" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-b644b94 elementor-widget elementor-widget-heading" data-id="b644b94" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Subscribe Now</h2>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-8cba57d elementor-widget elementor-widget-text-editor" data-id="8cba57d" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p>Don’t miss our future updates! Get Subscribed Today!</p>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-642416b elementor-widget elementor-widget-elementskit-mail-chimp" data-id="642416b" data-element_type="widget" data-widget_type="elementskit-mail-chimp.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <div class="ekit-mail-chimp">
                              <form method="post" id="email_register_subs" class="ekit-mailChimpForm" data-listed="" data-success-message="Successfully listed this email" data-success-opt-in-message="">
                                    <div class="ekit-mail-message"></div>
                                    <input type="hidden" name="double_opt_in" value="no">
                                    <div class="elementskit_form_wraper elementskit_inline_form">
                                       <div class="ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container">
                                          <div class="elementskit_form_group">
                                             <div class="elementskit_input_element_container ">
                                                <input type="email" id="email_footer" name="email" class="ekit_mail_email ekit_form_control " placeholder="Enter your email id." required>
                                                <div style="color:#fff;" id="email_error_footer"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="ekit_submit_input_holder elementskit_input_wraper">
                                          <button type="button" onclick="email_register_footer()" class="ekit-mail-submit" name="ekit_mail_chimp"> 
                                          <i aria-hidden="true" class="icon icon-message-1"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-463e891 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="463e891" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b18538b" data-id="b18538b" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-906384c elementor-widget elementor-widget-elementskit-heading" data-id="906384c" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-text_center">
                                 <p class="ekit-heading--title elementskit-section-title ">
                                 <?php echo $row[3];?>
                                 </p>
                                 <p class="ekit-heading--title elementskit-section-title ">
                                 Designed & developed by <a href="https://instagram.com/akmp_tutorials">AKMP Web Developers</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <link rel="stylesheet" id="wpforms-full-css" href="./../wp-content/plugins/wpforms-lite/assets/css/wpforms-full.min.css?ver=1.7.5.5" media="all">
      <script src="./../wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0" id="hello-theme-frontend-js"></script><script src="./../wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=2.6.3" id="elementskit-framework-js-frontend-js"></script><script id="elementskit-framework-js-frontend-js-after">
         var elementskit = {
         	resturl: './wp-json/elementskit/v1/',
         }
         
         
      </script><script src="./../wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=2.6.3" id="ekit-widget-scripts-js"></script><script src="./../wp-includes/js/wp-embed.min.js?ver=5.5.9" id="wp-embed-js"></script><script src="./../wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.7.0" id="elementor-webpack-runtime-js"></script><script src="./../wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.7.0" id="elementor-frontend-modules-js"></script><script src="./../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script><script src="./../wp-includes/js/jquery/ui/position.min.js?ver=1.11.4" id="jquery-ui-position-js"></script><script id="elementor-frontend-js-before">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.7.0","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"e_import_export":true,"e_hidden_wordpress_widgets":true,"hello-theme-header-footer":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":".\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":497,"title":"Checkout%20%E2%80%93%20My%20Blog","excerpt":"","featuredImage":false}};
      </script><script src="./../wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.7.0" id="elementor-frontend-js"></script><script src="./../wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js?ver=2.6.3" id="animate-circle-js"></script><script id="elementskit-elementor-js-extra">
         var ekit_config = {"ajaxurl":".\/wp-admin\/admin-ajax.php","nonce":"94cd69fc8a"};
      </script><script src="./../wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=2.6.3" id="elementskit-elementor-js"></script><script src="./../wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=2.6.3" id="swiper-js"></script><script src="./../wp-includes/js/underscore.min.js?ver=1.8.3" id="underscore-js"></script><script id="wp-util-js-extra">
         var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
      </script><script src="./../wp-includes/js/wp-util.min.js?ver=5.5.9" id="wp-util-js"></script><script id="wpforms-elementor-js-extra">
         var wpformsElementorVars = {"captcha_provider":"recaptcha","recaptcha_type":"v2"};
      </script><script src="./../wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.7.5.5" id="wpforms-elementor-js"></script><script src="./../wp-content/plugins/wpforms-lite/assets/lib/jquery.validate.min.js?ver=1.19.4" id="wpforms-validation-js"></script><script src="./../wp-content/plugins/wpforms-lite/assets/js/wpforms.min.js?ver=1.7.5.5" id="wpforms-js"></script><script type="text/javascript">
         /* <![CDATA[ */
         var wpforms_settings = {"val_required":"This field is required.","val_email":"Please enter a valid email address.","val_email_suggestion":"Did you mean {suggestion}?","val_email_suggestion_title":"Click to accept this suggestion.","val_email_restricted":"This email address is not allowed.","val_number":"Please enter a valid number.","val_number_positive":"Please enter a valid positive number.","val_confirm":"Field values do not match.","val_checklimit":"You have exceeded the number of allowed selections: {#}.","val_limit_characters":"{count} of {limit} max characters.","val_limit_words":"{count} of {limit} max words.","val_recaptcha_fail_msg":"Google reCAPTCHA verification failed, please try again later.","val_empty_blanks":"Please fill out all blanks.","uuid_cookie":"","locale":"en","wpforms_plugin_url":".\/wp-content\/plugins\/wpforms-lite\/","gdpr":"","ajaxurl":".\/wp-admin\/admin-ajax.php","mailcheck_enabled":"1","mailcheck_domains":[],"mailcheck_toplevel_domains":["dev"],"is_ssl":"1"}
         /* ]]> */
      </script>
      <!-- jquery latest version -->
<script src="admin/assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="assets/js/plugins.js"></script>
    <script src="admin/assets/js/slick.min.js"></script>
    <script src="admin/assets/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="admin/assets/js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="admin/assets/js/main.js"></script>
    <script src="admin/assets/js/coupon.js"></script>
    <?php
    if(isset($_SESSION['COUPON_ID'])){
      unset($_SESSION['COUPON_ID']);
      unset($_SESSION['COUPON_VALUE']);
      unset($_SESSION['COUPON_CODE']);
   }
   ?>
   </body>
</html>