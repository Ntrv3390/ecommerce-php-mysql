<?php
   require('connection.inc.php');
   require('functions.inc.php');
    $sql="select * from settings";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res);
    $sql1="select * from social_links";
    $res1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_array($res1);
    ?>


<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
     <title>Privacy Policy | Swipe Right - Sneaker Wipes</title>
      <meta name="description" content="This is the privacy policy of our website - Swipe Right">
        <meta name="keywords" content="swipe right, swipe right sneakers wipes, best sneaker wipes, sneaker wipes india">
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
      <link rel="stylesheet" id="elementor-post-740-css" href="wp-content/uploads/elementor/css/post-740.css?ver=1661406500" media="all">
      <link rel="stylesheet" id="ekit-widget-styles-css" href="wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.6.3" media="all">
      <link rel="stylesheet" id="ekit-responsive-css" href="wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.6.3" media="all">
      <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.5.9" media="all">
      <link rel="stylesheet" id="elementor-icons-shared-0-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
      <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
      <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all">
      <script src="wp-includes/js/jquery/jquery.js?ver=1.12.4-wp" id="jquery-core-js"></script>
      <link rel="https://api.w.org/" href="wp-json/">
      <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/740">
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd">
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml">
      <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F">
      <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F&#038;format=xml">
      <link rel="icon" href="./wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-32x32.png" sizes="32x32">
      <link rel="icon" href="./wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-192x192.png" sizes="192x192">
      <link rel="apple-touch-icon" href="./wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-180x180.png">
      <meta name="msapplication-TileImage" content="./wp-content/uploads/2022/08/cropped-photo1660568483-removebg-preview-270x270.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   </head>
   <body class="home page-template page-template-elementor_canvas page page-id-740 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-740">
      <div data-elementor-type="wp-page" data-elementor-id="740" class="elementor elementor-740">
         <section class="elementor-section elementor-top-section elementor-element elementor-element-df371e3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="df371e3" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ba6b411" data-id="ba6b411" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-e6fba30 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e6fba30" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d5ee171" data-id="d5ee171" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-3e1b901 elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3e1b901" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                       <link rel="stylesheet" href="../../wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                       <ul class="elementor-icon-list-items elementor-inline-items">
                                       <li class="elementor-icon-list-item elementor-inline-item">
                                             <a href="tel:<?php echo $row['company_number'];?>">
                                             <span class="elementor-icon-list-icon">
                                             <i aria-hidden="true" class="icon icon-phone-handset"></i>						</span>
                                             <span class="elementor-icon-list-text"><?php echo $row['company_number'];?>  |</span>
                                             </a>
                                          </li>
                                          <li class="elementor-icon-list-item elementor-inline-item">
                                              <a href="mailto:<?php echo $row['company_email'];?>">
                                             <span class="elementor-icon-list-icon">
                                             <i aria-hidden="true" class="icon icon-email1"></i>						</span>
                                             <span class="elementor-icon-list-text"><?php echo $row['company_email'];?></span></a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-473dd95" data-id="473dd95" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-293268a elementor-widget elementor-widget-elementskit-social-media" data-id="293268a" data-element_type="widget" data-widget_type="elementskit-social-media.default">
                                    <div class="elementor-widget-container">
                                       <div class="ekit-wid-con">
                                          <ul class="ekit_social_media">
                                          <li class="elementor-repeater-item-5eb0945">
                                                <a href="<?php echo $row1['facebook'];?>" class="facebook">
                                                <i aria-hidden="true" class="fasicon icon-facebook"></i>									
                                                </a>
                                             </li>
                                             <li class="elementor-repeater-item-404d637">
                                                <a href="<?php echo $row1['twitter'];?>" class="twitter">
                                                <i aria-hidden="true" class="fasicon icon-twitter"></i>									
                                                </a>
                                             </li>
                                             <li class="elementor-repeater-item-98fdd10">
                                                <a href="<?php echo $row1['linkedin'];?>" class="linkedin">
                                                <i aria-hidden="true" class="fasicon icon-linkedin"></i>									
                                                </a>
                                             </li>
                                             <li class="elementor-repeater-item-e9f752e">
                                                <a href="<?php echo $row1['youtube'];?>" class="dribbble">
                                                <i aria-hidden="true" class="fab fa-youtube"></i>									
                                                </a>
                                             </li>
                                             <li class="elementor-repeater-item-e2aa959">
                                                <a href="<?php echo $row1['instagram'];?>" class="instagram">
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
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-7a48802 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7a48802" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-703c004" data-id="703c004" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-7b4e50e elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="7b4e50e" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                       <style>/*! elementor - v3.7.0 - 08-08-2022 */
                                          .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
                                       </style>
                                        <img width="388" height="316" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 300w" sizes="(max-width: 388px) 100vw, 388px">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-87034b1" data-id="87034b1" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-d76ab85 elementor-widget__width-auto elementor-widget elementor-widget-ekit-nav-menu" data-id="d76ab85" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
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
                                                   <img width="388" height="316" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-full size-full" alt="" loading="lazy" srcset="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 388w, /wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?> 300w" sizes="(max-width: 388px) 100vw, 388px"></a> 
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
         <section class="elementor-section elementor-top-section elementor-element elementor-element-5b70cfe3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5b70cfe3" data-element_type="section" id="xs_blog_light_post_img_5" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce33fd5" data-id="ce33fd5" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-5f1f8cdd elementor-widget elementor-widget-elementskit-heading" data-id="5f1f8cdd" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <div class="ekit-heading elementskit-section-title-wraper center   ekit_heading_tablet-   ekit_heading_mobile-">
                                 <h2 class="ekit-heading--title elementskit-section-title ">
                                    Privacy <span>Policy</span>
                                 </h2>
                                 <div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider">
                                    <div class="elementskit-border-divider"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div></section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-76dc252 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="76dc252" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-647200a" data-id="647200a" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-a4dae4e elementor-widget elementor-widget-text-editor" data-id="a4dae4e" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <style>/*! elementor - v3.7.0 - 08-08-2022 */
                              .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
                           </style>
                           <p>At Swipe Right, accessible from https://swiperight.in, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Swipe Right and how we use it.</p>

<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Swipe Right. This policy is not applicable to any information collected offline or via channels other than this website.</p>

<h2>Consent</h2>

<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

<h2>Information we collect</h2>

<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>

<h2>How we use your information</h2>

<p>We use the information we collect in various ways, including to:</p>

<ul>
<li>Provide, operate, and maintain our website</li>
<li>Improve, personalize, and expand our website</li>
<li>Understand and analyze how you use our website</li>
<li>Develop new products, services, features, and functionality</li>
<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
<li>Send you emails</li>
<li>Find and prevent fraud</li>
</ul>

<h2>Log Files</h2>

<p>Swipe Right follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>

<h2>Cookies and Web Beacons</h2>

<p>Like any other website, Swipe Right uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>



<h2>Advertising Partners Privacy Policies</h2>

<P>You may consult this list to find the Privacy Policy for each of the advertising partners of Swipe Right.</p>

<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Swipe Right, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

<p>Note that Swipe Right has no access to or control over these cookies that are used by third-party advertisers.</p>

<h2>Third Party Privacy Policies</h2>

<p>Swipe Right's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>

<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>

<p>Under the CCPA, among other rights, California consumers have the right to:</p>
<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
<p>Request that a business delete any personal data about the consumer that a business has collected.</p>
<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>GDPR Data Protection Rights</h2>

<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

<h2>Children's Information</h2>

<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

<p>Swipe Right does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="elementor-section elementor-top-section elementor-element elementor-element-6350fa2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6350fa2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c11a706" data-id="c11a706" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-74b6cfa elementor-widget elementor-widget-image" data-id="74b6cfa" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                           
                           <img width="176" height="50" src="/wp-content/uploads/2022/08/<?php echo PRODUCT_IMAGE_SITE_PATH.$row['company_logo']?>" class="attachment-full size-full" alt="" loading="lazy">
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-8c80827 elementor-widget elementor-widget-text-editor" data-id="8c80827" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p>Founder by sneaker fanatics, Swipe Right aims at keeping your sneakers as good as new - just like you unboxed them on day 1! With Swipe Right, we bring to the sneaker community a sneaker cleaning product which is protable, accessible, and provides a hassle-free cleaning experience.</p>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-d22824e elementor-widget elementor-widget-elementskit-social-media" data-id="d22824e" data-element_type="widget" data-widget_type="elementskit-social-media.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <ul class="ekit_social_media">
                              <li class="elementor-repeater-item-da8f4de">
                                    <a href="<?php echo $row1['facebook'] ?>" class="facebook">
                                    <i aria-hidden="true" class="fasicon icon-facebook"></i>									
                                    </a>
                                 </li>
                                 <li class="elementor-repeater-item-1399011">
                                    <a href="<?php echo $row1['twitter'] ?>" class="twitter">
                                    <i aria-hidden="true" class="fasicon icon-twitter"></i>									
                                    </a>
                                 </li>
                                 <li class="elementor-repeater-item-8f886e8">
                                    <a href="<?php echo $row1['linkedin'] ?>" class="linkedin">
                                    <i aria-hidden="true" class="fasicon icon-linkedin"></i>									
                                    </a>
                                 </li>
                                 <li class="elementor-repeater-item-048c536">
                                    <a href="<?php echo $row1['youtube'] ?>" class="dribbble">
                                    <i aria-hidden="true" class="fasicon icon-youtube"></i>									
                                    </a>
                                 </li>
                                 <li class="elementor-repeater-item-c8596be">
                                    <a href="<?php echo $row1['instagram'] ?>" class="2">
                                    <i aria-hidden="true" class="fasicon icon-instagram-2"></i>									
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e53d405" data-id="e53d405" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-c67e7fe elementor-widget elementor-widget-heading" data-id="c67e7fe" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Useful Links</h2>
                        </div>
                     </div>
                     <section class="elementor-section elementor-inner-section elementor-element elementor-element-fab253b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fab253b" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                           <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8872876" data-id="8872876" data-element_type="column">
                              <div class="elementor-widget-wrap elementor-element-populated">
                                 <div class="elementor-element elementor-element-ac6313b elementor-widget elementor-widget-elementskit-page-list" data-id="ac6313b" data-element_type="widget" data-widget_type="elementskit-page-list.default">
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
               <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3ab7523" data-id="3ab7523" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-2480b36 elementor-widget elementor-widget-heading" data-id="2480b36" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title elementor-size-default">Subscribe Now</h2>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-cecd47a elementor-widget elementor-widget-text-editor" data-id="cecd47a" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           <p>Don’t miss our future updates! Get Subscribed Today!</p>
                        </div>
                     </div>
                     <div class="elementor-element elementor-element-48d08d4 elementor-widget elementor-widget-elementskit-mail-chimp" data-id="48d08d4" data-element_type="widget" data-widget_type="elementskit-mail-chimp.default">
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
         <section class="elementor-section elementor-top-section elementor-element elementor-element-7a1cf44 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7a1cf44" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
               <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dc04176" data-id="dc04176" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                     <div class="elementor-element elementor-element-2b36751 elementor-widget elementor-widget-elementskit-heading" data-id="2b36751" data-element_type="widget" data-widget_type="elementskit-heading.default">
                        <div class="elementor-widget-container">
                           <div class="ekit-wid-con">
                              <div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-text_center">
                                 <p class="ekit-heading--title elementskit-section-title ">
                                 <?php echo $row['copyright_msg']; ?>
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
      <script src="/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0" id="hello-theme-frontend-js"></script><script src="/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=2.6.3" id="elementskit-framework-js-frontend-js"></script><script id="elementskit-framework-js-frontend-js-after">
         var elementskit = {
         	resturl: 'httpsbarcode.akmp.in/wp-json/elementskit/v1/',
         }
         
         
      </script><script src="/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=2.6.3" id="ekit-widget-scripts-js"></script><script src="/wp-includes/js/wp-embed.min.js?ver=5.5.9" id="wp-embed-js"></script><script src="/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.7.0" id="elementor-webpack-runtime-js"></script><script src="/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.7.0" id="elementor-frontend-modules-js"></script><script src="/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script><script src="/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4" id="jquery-ui-position-js"></script><script id="elementor-frontend-js-before">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.7.0","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"e_import_export":true,"e_hidden_wordpress_widgets":true,"hello-theme-header-footer":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"httpsbarcode.akmp.in\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"title","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":740,"title":"My%20Blog%20%E2%80%93%20My%20WordPress%20Blog","excerpt":"","featuredImage":false}};
      </script><script src="/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.7.0" id="elementor-frontend-js"></script><script src="/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js?ver=2.6.3" id="animate-circle-js"></script><script id="elementskit-elementor-js-extra">
         var ekit_config = {"ajaxurl":"httpsbarcode.akmp.in\/wp-admin\/admin-ajax.php","nonce":"d01c19d56f"};
      </script><script src="/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=2.6.3" id="elementskit-elementor-js"></script><script src="/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=2.6.3" id="swiper-js"></script><script src="/wp-includes/js/underscore.min.js?ver=1.8.3" id="underscore-js"></script><script id="wp-util-js-extra">
         var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
      </script><script src="/wp-includes/js/wp-util.min.js?ver=5.5.9" id="wp-util-js"></script><script id="wpforms-elementor-js-extra">
         var wpformsElementorVars = {"captcha_provider":"recaptcha","recaptcha_type":"v2"};
      </script><script src="/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.7.5.5" id="wpforms-elementor-js"></script>
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
   </body>
</html>