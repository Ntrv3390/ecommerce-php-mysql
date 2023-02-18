<?php
   require('connection.inc.php');
   require('functions.inc.php');
   $sql="select * from settings";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($res);
   $sqli="select * from product";
   $result=mysqli_query($con,$sqli);
   $rows=mysqli_fetch_array($result);
   $sql1="select * from social_links";
   $res1=mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($res1);
   $sqlacc="select * from accordian";
   $resacc=mysqli_query($con,$sqlacc);
   $rowacc=mysqli_fetch_array($resacc);
   ?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
   <meta name="description" content=<?php echo $rows[1]; ?>>
      <meta name="keywords" content=<?php echo $rows[2]; ?>>
      <title><?php echo $rows[1].' '.$rows[2]; ?> | Swipe Right</title>
      <meta charset="UTF-8">
      <meta name="author" content="AKMP Tutorials | Swipe Right">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="dns-prefetch" href="//s.w.org">
      <link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Feed" href="./../feed/index.html">
      <link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Comments Feed" href="./../comments/feed/index.html">
      <link rel="stylesheet" id="wp-block-library-css" href="wp-includes/css/dist/block-library/style.min.css?ver=5.5.9" media="all">
      <link rel="stylesheet" href="wp-includes/css/dist/block-library/custom.css">
      <link rel="stylesheet" id="hello-elementor-css" href="wp-content/themes/hello-elementor/style.min.css?ver=2.6.1" media="all">
      <link rel="stylesheet" id="hello-elementor-theme-style-css" href="wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1" media="all">
      <link rel="stylesheet" id="elementor-frontend-css" href="wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.7.0" media="all">
      <link rel="stylesheet" id="elementor-post-5-css" href="wp-content/uploads/elementor/css/post-5.css?ver=1660386820" media="all">
      <link rel="stylesheet" id="elementor-icons-ekiticons-css" href="wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=2.6.3" media="all">
      <link rel="icon" href="/swipe/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>">
      <link rel="stylesheet" id="elementor-icons-css" href="wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0" media="all">
      <link rel="stylesheet" id="elementor-global-css" href="wp-content/uploads/elementor/css/global.css?ver=1660388423" media="all">
      <link rel="stylesheet" id="elementor-post-439-css" href="wp-content/uploads/elementor/css/post-439.css?ver=1660648698" media="all">
      <link rel="stylesheet" id="ekit-widget-styles-css" href="wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.6.3" media="all">
      <link rel="stylesheet" id="ekit-responsive-css" href="wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.6.3" media="all">
      <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CArchivo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.5.9" media="all">
      <link rel="stylesheet" id="elementor-icons-shared-0-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
      <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
      <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all">
      <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3" media="all">
      <script src="wp-includes/js/jquery/jquery.js?ver=1.12.4-wp" id="jquery-core-js"></script>
      <link rel="https://api.w.org/" href="wp-json/index.html">
      <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/439/index.html">
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd">
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml">
      <link rel="canonical" href="./index.html">
      <link rel="shortlink" href=".index.html?p=439">
      <link rel="alternate" type="application/json+oembed" href=".wp-json/oembed/1.0/embed/index.html?url=https%3A%2F%2F%2Fsingle-product%2F">
      <link rel="alternate" type="text/xml+oembed" href=".wp-json/oembed/1.0/embed/index.html?url=https%3A%2F%2F%2Fsingle-product%2F&#038;format=xml">
      <link rel="icon" href="wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-32x32.png" sizes="32x32">
      <link rel="icon" href="wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-192x192.png" sizes="192x192">
      <link rel="apple-touch-icon" href="wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-180x180.png">
      <meta name="msapplication-TileImage" content="wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-270x270.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   </head>
   <body class="page-template page-template-elementor_canvas page page-id-439 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-439">
      <div data-elementor-type="wp-page" data-elementor-id="439" class="elementor elementor-439">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-6d079fa elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6d079fa" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0bc20c4" data-id="0bc20c4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-f3c7a32 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f3c7a32" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5c14754" data-id="5c14754" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-0fd27ae elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="0fd27ae" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                       <link rel="stylesheet" href="./../wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                       <ul class="elementor-icon-list-items elementor-inline-items">
                                          <li class="elementor-icon-list-item elementor-inline-item">
                                             <a href="tel:<?php echo $row['company_number'];?>">
                                             <span class="elementor-icon-list-icon">
                                             <i aria-hidden="true" class="icon icon-phone-handset"></i>						</span>
                                             <span class="elementor-icon-list-text"><?php echo $row[1];?> |</span>
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
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d95deec" data-id="d95deec" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-752d8d4 elementor-widget elementor-widget-elementskit-social-media" data-id="752d8d4" data-element_type="widget" data-widget_type="elementskit-social-media.default">
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
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-beace42 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="beace42" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bd3710e" data-id="bd3710e" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-25a5904 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="25a5904" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                       <style>/*! elementor - v3.7.0 - 08-08-2022 */
                                          .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
                                       </style>
                                       <img width="388" height="316" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 300w" sizes="(max-width: 388px) 100vw, 388px">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4c773fa" data-id="4c773fa" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-f7352d3 elementor-widget__width-auto elementor-widget elementor-widget-ekit-nav-menu" data-id="f7352d3" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
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
                                                   <a class="elementskit-nav-logo" href="./../index.html" target="_self" rel="">
                                                   <img width="388" height="316" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 300w" sizes="(max-width: 388px) 100vw, 388px"></a> 
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
         <section class="elementor-section elementor-top-section elementor-element elementor-element-b2a468f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b2a468f" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0d55c3c" data-id="0d55c3c" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-e6abcfa elementor-widget elementor-widget-image" data-id="e6abcfa" data-element_type="widget" data-widget_type="image.default">
                     <div class="elementor-widget-container">
                           <img width="800" height="800" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rows['image']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rows['image']?>, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rows['image']?>, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rows['image']?>, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rows['image']?>, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rows['image']?>, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rows['image']?>" sizes="(max-width: 800px) 100vw, 800px">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-86e0eb1" data-id="86e0eb1" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-3338f72 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3338f72" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-25db1ed" data-id="25db1ed" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-98ce4c6 elementor-widget elementor-widget-elementskit-heading" data-id="98ce4c6" data-element_type="widget" data-widget_type="elementskit-heading.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                             <h2 class="ekit-heading--title elementskit-section-title ">
                                             <?php echo $rows[1];?> <span><span><?php echo $rows[2];?></span></span>
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
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-dfe8d6f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfe8d6f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-65237cd" data-id="65237cd" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-4560020 elementor-widget elementor-widget-heading" data-id="4560020" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <style>/*! elementor - v3.7.0 - 08-08-2022 */
                                          .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                                       </style>
                                       <h4 class="elementor-heading-title elementor-size-default">Price :</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7b53099" data-id="7b53099" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-53bee37 elementor-widget elementor-widget-heading" data-id="53bee37" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default"><?php echo '₹'.$rows[6];?></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9cf0954" data-id="9cf0954" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-939328f elementor-widget elementor-widget-heading" data-id="939328f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h2 class="elementor-heading-title elementor-size-default"><?php echo '₹'.$rows[5];?></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-c8af628 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c8af628" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-621f305" data-id="621f305" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-11dab15 elementor-widget elementor-widget-heading" data-id="11dab15" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                       <h4 class="elementor-heading-title elementor-size-default">Availability :</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1fa5b36" data-id="1fa5b36" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-6f15973 elementor-widget elementor-widget-heading" data-id="6f15973" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                    <?php $hide = $rows[7];?>
                                       <h2 class="elementor-heading-title elementor-size-default"><?php if($hide>=1){
									echo "In Stock";
								   }else{
                              echo "Currently Not Available!";
                              }?></h2>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-ccbeb30 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ccbeb30" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ce8be18" data-id="ce8be18" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-4c16e99 ekit_wpForms_container-form-button-custom elementor-widget elementor-widget-elementskit-wp-forms" data-id="4c16e99" data-element_type="widget" data-widget_type="elementskit-wp-forms.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con ekit_wpForms_container">
                                          <div class="wpforms-container wpforms-container-full" id="wpforms-643">
                                             <form id="manage_cart" class="wpforms-validate" method="post">
                                                <noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>
                                              <?php if($hide>0){ ?>
                                                <div class="wpforms-field-container">
                                                   <div id="wpforms-643-field_1-container" class="wpforms-field wpforms-field-select wpforms-field-select-style-classic" data-field-id="1">
                                                      Select Quantity
                                                     
                                                      <select id="qty" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" required="required">
                                                        <?php if($hide>=1){ ?>
                                                         <option value="1">1</option>
                                                         <?php if($hide>=2){ ?>
                                                         <option value="2">2</option>
                                                         <?php if($hide>=3){ ?>
                                                         <option value="3">3</option>
                                                         <?php if($hide>=4){ ?>
                                                         <option value="4">4</option>
                                                         <?php if($hide>=5){ ?>
                                                         <option value="5">5</option>
                                                         <?php if($hide>=6){ ?>
                                                         <option value="6">6</option>
                                                         <?php if($hide>=7){ ?>
                                                         <option value="7">7</option>
                                                         <?php if($hide>=8){ ?>
                                                         <option value="8">8</option>
                                                         <?php if($hide>=9){ ?>
                                                         <option value="9">9</option>
                                                         <?php if($hide>=10){ ?>
                                                         <option value="10">10</option>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                         <?php } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <?php } ?>
                                                </br>
                                                </br>
                                                <div class="wpforms-submit-container">
                                                   <button type="button"
                                                   onclick="manage_cart('<?php echo $rows['id']?>','add')" name="wpforms[submit]" id="add_to_cart" class="wpforms-submit"  value="wpforms-submit">Submit</button>
                                                </div>
                                                
                                             </form>
                                          </div>
                                          <!-- .wpforms-container -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-01027db" data-id="01027db" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-2fe4dce elementor-widget elementor-widget-elementskit-button" data-id="2fe4dce" data-element_type="widget" data-widget_type="elementskit-button.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <div class="ekit-btn-wraper">
                                             <?php if($hide>=1){ ?>
                                             <a href="javascript:void(0)" onclick="manage_cart('<?php echo $rows['id']?>','add')" name="wpforms[submit]" id="add_to_cart" class="elementskit-btn  whitespace--normal">
                                             Buy Now				</a>
                                             <?php }?>
                                          </div>
                                          <div class="htc__qua"><p></p></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <div class="elementor-element elementor-element-b7419e2 elementor-widget elementor-widget-text-editor" data-id="b7419e2" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.7.0 - 08-08-2022 */
                              .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
                           </style>
                           </br>
                           </br>
                           
                           <h4><span style="text-decoration: underline;">Description.</span></h4>
                           <p><?php echo $rows[4];?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-e31a22a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e31a22a" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-525e2ee" data-id="525e2ee" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-af65b84 elementor-widget elementor-widget-text-editor" data-id="af65b84" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p><strong><span class="JsGRdQ">                        <span style="text-decoration: underline;">Why Sneaker Wipes?</span></span></strong></p>
                           <ul>
                           <?php echo $rows[11];?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0751edb" data-id="0751edb" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-3a34239 elementor-widget elementor-widget-text-editor" data-id="3a34239" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p><strong><span class="JsGRdQ">                      <span style="text-decoration: underline;">Direction of Use</span></span></strong></p>
                           <ul>
                           <?php echo $rows[12];?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6bcafa1" data-id="6bcafa1" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-6babff4 elementor-widget elementor-widget-text-editor" data-id="6babff4" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p><strong><span class="JsGRdQ">                                    <span style="text-decoration: underline;">Warning!</span></span></strong></p>
                           <ul>
                           <?php echo $rows[13];?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-2798a1d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2798a1d0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;clouds&quot;,&quot;shape_divider_bottom&quot;:&quot;wave-brush&quot;}">
            <div class="elementor-shape elementor-shape-top" data-negative="false">
               <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 283.5 27.8" preserveaspectratio="xMidYMax slice">
                  <path class="elementor-shape-fill" d="M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z"></path>
               </svg>
            </div>
            <div class="elementor-shape elementor-shape-bottom" data-negative="false">
               <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 283.5 27.8" preserveaspectratio="none">
                  <path class="elementor-shape-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7	s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7	c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3	c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6	c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7	C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5	c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1	c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7	c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6	C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8	c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2	C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3	C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1	z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1	c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path>
                  <path class="elementor-shape-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C267.7,18.8,269.7,18,269.6,18z"></path>
                  <path class="elementor-shape-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2	S227.6,9.9,227.4,9.8z"></path>
                  <path class="elementor-shape-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4	C206.4,12.9,204.6,13.5,204.5,13.4z"></path>
                  <path class="elementor-shape-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6	S201,10.7,201,10.6z"></path>
                  <path class="elementor-shape-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3	C152.6,27.5,154.6,26.8,154.5,26.7z"></path>
                  <path class="elementor-shape-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6	c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path>
                  <path class="elementor-shape-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0	C76.9,11.5,75.3,12.5,75.5,12.6z"></path>
                  <path class="elementor-shape-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4	C19.9,13.7,15.7,13.3,15.6,13.2z"></path>
               </svg>
            </div>
            
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4af05aa5" data-id="4af05aa5" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-1fde9aa4 ekit-image-accordion-horizontal ekit-image-accordion-click elementor-widget elementor-widget-elementskit-image-accordion" data-id="1fde9aa4" data-element_type="widget" data-widget_type="elementskit-image-accordion.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <div class="ekit-image-accordion elementskit-image-accordion-wraper">
                                 <input type="radio" name="ekit_ia_1fde9aa4" id="ekit_ia_1fde9aa4_0" class="elementskit-single-image-accordion--input" hidden><label for="ekit_ia_1fde9aa4_0" class="elementskit-single-image-accordion ekit-image-accordion-item" style="background-image: url(/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rowacc['img1']?>)">
                                 <span class="elementskit-accordion-content">
                                 <span class="elementskit-accordion-title-wraper">
                                 <span class="elementskit-accordion-title ">
                                 Easy To Use
                                 </span>
                                 </span>
                                 
                                 </span>
                                 </label>
                                 <input type="radio" name="ekit_ia_1fde9aa4" id="ekit_ia_1fde9aa4_1" class="elementskit-single-image-accordion--input" hidden><label for="ekit_ia_1fde9aa4_1" class="elementskit-single-image-accordion ekit-image-accordion-item" style="background-image: url(/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rowacc['img2']?>)">
                                 <span class="elementskit-accordion-content">
                                 <span class="elementskit-accordion-title-wraper">
                                 <span class="elementskit-accordion-title ">
                                 Best Quality
                                 </span>
                                 </span>
                                
                                 </span>
                                 </label>
                                 <input type="radio" name="ekit_ia_1fde9aa4" id="ekit_ia_1fde9aa4_2" class="elementskit-single-image-accordion--input" checked hidden><label for="ekit_ia_1fde9aa4_2" class="elementskit-single-image-accordion ekit-image-accordion-item" style="background-image: url(/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rowacc['img3']?>)">
                                 <span class="elementskit-accordion-content">
                                 <span class="elementskit-accordion-title-wraper">
                                 <span class="elementskit-accordion-title ">
                                 Leave No Dirt
                                 </span>
                                 </span>
                                 
                                 </span>
                                 </label>
                                 <input type="radio" name="ekit_ia_1fde9aa4" id="ekit_ia_1fde9aa4_3" class="elementskit-single-image-accordion--input" hidden><label for="ekit_ia_1fde9aa4_3" class="elementskit-single-image-accordion ekit-image-accordion-item" style="background-image: url(/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$rowacc['img4']?>)">
                                 <span class="elementskit-accordion-content">
                                 <span class="elementskit-accordion-title-wraper">
                                 <span class="elementskit-accordion-title ">
                                 Easy To Carry
                                 </span>
                                 </span>
                                 
                                 </span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-7911eda3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7911eda3" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-20cf2ff3" data-id="20cf2ff3" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-4a66fc74 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a66fc74" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7dd97fc6" data-id="7dd97fc6" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-1bcc1d06 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="1bcc1d06" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <!-- link opening -->
                                          <!-- end link opening -->
                                          <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media gradient-active image-active hover_from_left">
                                             <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                   <i aria-hidden="true" class="elementkit-infobox-icon icon icon-truck-2"></i>
                                                </div>
                                             </div>
                                             <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                   Fast Delivery                
                                                </h3>
                                                <p>Get it delivered to your places hassle free.</p>
                                             </div>
                                             <figure class="image-hover"><img width="1200" height="1078" src="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg" class="attachment- size-" alt="" loading="lazy" srcset="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg 1200w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-300x270.jpg 300w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-1024x920.jpg 1024w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-768x690.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e30fad4" data-id="3e30fad4" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-226fa2e4 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="226fa2e4" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <!-- link opening -->
                                          <!-- end link opening -->
                                          <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media gradient-active image-active hover_from_left">
                                             <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                   <i aria-hidden="true" class="elementkit-infobox-icon icon icon-checked"></i>
                                                </div>
                                             </div>
                                             <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                   Best Quality                
                                                </h3>
                                                <p>We won't let you down, our quality is the best!</p>
                                             </div>
                                             <figure class="image-hover"><img width="1200" height="1078" src="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg" class="attachment- size-" alt="" loading="lazy" srcset="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg 1200w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-300x270.jpg 300w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-1024x920.jpg 1024w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-768x690.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ad72e75" data-id="ad72e75" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-41907e98 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="41907e98" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <!-- link opening -->
                                          <!-- end link opening -->
                                          <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media gradient-active image-active hover_from_left">
                                             <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                   <i aria-hidden="true" class="elementkit-infobox-icon icon icon-lock"></i>
                                                </div>
                                             </div>
                                             <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                   Secured Checkout                
                                                </h3>
                                                <p>We use SSL encryption at checkout and paytm as our gateway, so to keep your details secured!</p>
                                             </div>
                                             <figure class="image-hover"><img width="1200" height="1078" src="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg" class="attachment- size-" alt="" loading="lazy" srcset="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg 1200w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-300x270.jpg 300w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-1024x920.jpg 1024w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-768x690.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-6378fd8c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6378fd8c" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5970d105" data-id="5970d105" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-5a25a839 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="5a25a839" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <!-- link opening -->
                                          <!-- end link opening -->
                                          <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media gradient-active image-active hover_from_left">
                                             <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                   <i aria-hidden="true" class="elementkit-infobox-icon icon icon-credit-card"></i>
                                                </div>
                                             </div>
                                             <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                   Online Payments                
                                                </h3>
                                                <p>Pay cashless via paytm wallet, upi, credit/debit cards.</p>
                                             </div>
                                             <figure class="image-hover"><img width="1200" height="1078" src="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg" class="attachment- size-" alt="" loading="lazy" srcset="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg 1200w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-300x270.jpg 300w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-1024x920.jpg 1024w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-768x690.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fe12d0b" data-id="fe12d0b" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-dce7141 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="dce7141" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <!-- link opening -->
                                          <!-- end link opening -->
                                          <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media gradient-active image-active hover_from_left">
                                             <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                   <i aria-hidden="true" class="elementkit-infobox-icon far fa-check-circle"></i>
                                                </div>
                                             </div>
                                             <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                   Easy To Use                
                                                </h3>
                                                <p>Our product is desinged to give you an easy to use experience and hassle free carrying.</p>
                                             </div>
                                             <figure class="image-hover"><img width="1200" height="1078" src="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg" class="attachment- size-" alt="" loading="lazy" srcset="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg 1200w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-300x270.jpg 300w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-1024x920.jpg 1024w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-768x690.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6aca9e0" data-id="6aca9e0" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-1ff49d8 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="1ff49d8" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <!-- link opening -->
                                          <!-- end link opening -->
                                          <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media gradient-active image-active hover_from_left">
                                             <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  text-center">
                                                   <i aria-hidden="true" class="elementkit-infobox-icon icon icon-brands"></i>
                                                </div>
                                             </div>
                                             <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                   Discounts                
                                                </h3>
                                                <p>Get amazing disounts on our wipes, go and grab now!</p>
                                             </div>
                                             <figure class="image-hover"><img width="1200" height="1078" src="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg" class="attachment- size-" alt="" loading="lazy" srcset="./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ.jpg 1200w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-300x270.jpg 300w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-1024x920.jpg 1024w, ./wp-content/uploads/2022/08/D06Ydp9WkAEuODJ-768x690.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
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
            </div>
         </section>

         
         <section class="elementor-section elementor-top-section elementor-element elementor-element-5d2a315 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d2a315" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-bbc2052" data-id="bbc2052" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-e419ec0 elementor-widget elementor-widget-image" data-id="e419ec0" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                           
                           <img width="176" height="50" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-full size-full" alt="" loading="lazy">
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-f92b9f4 elementor-widget elementor-widget-text-editor" data-id="f92b9f4" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p>Founder by sneaker fanatics, Swipe Right aims at keeping your sneakers as good as new - just like you unboxed them on day 1! With Swipe Right, we bring to the sneaker community a sneaker cleaning product which is protable, accessible, and provides a hassle-free cleaning experience.</p>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-be1a474 elementor-widget elementor-widget-elementskit-social-media" data-id="be1a474" data-element_type="widget" data-widget_type="elementskit-social-media.default">
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
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fb033f7" data-id="fb033f7" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-4979601 elementor-widget elementor-widget-heading" data-id="4979601" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Useful Links</h2>
                        </div>
                     </div>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-430107e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="430107e" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5b144ca" data-id="5b144ca" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-1988360 elementor-widget elementor-widget-elementskit-page-list" data-id="1988360" data-element_type="widget" data-widget_type="elementskit-page-list.default">
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
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7667386" data-id="7667386" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-5fa56c6 elementor-widget elementor-widget-heading" data-id="5fa56c6" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Subscribe Now</h2>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-5574a4f elementor-widget elementor-widget-text-editor" data-id="5574a4f" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p>Don’t miss our future updates! Get Subscribed Today!</p>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-cc7cd18 elementor-widget elementor-widget-elementskit-mail-chimp" data-id="cc7cd18" data-element_type="widget" data-widget_type="elementskit-mail-chimp.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <div class="ekit-mail-chimp">
                              <form method="post" id="email_register_subs" class="ekit-mailChimpForm">
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
         <section class="elementor-section elementor-top-section elementor-element elementor-element-2a8e91a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2a8e91a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b035eb5" data-id="b035eb5" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-190ca10 elementor-widget elementor-widget-elementskit-heading" data-id="190ca10" data-element_type="widget" data-widget_type="elementskit-heading.default">
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
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.7.0","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"e_import_export":true,"e_hidden_wordpress_widgets":true,"hello-theme-header-footer":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":".\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":439,"title":"Single-product%20%E2%80%93%20My%20Blog","excerpt":"","featuredImage":false}};
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
    <script src="admin/assets/js/plugins.js"></script>
    <script src="admin/assets/js/slick.min.js"></script>
    <script src="admin/assets/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="admin/assets/js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="admin/assets/js/main.js"></script>
   </body>
</html>