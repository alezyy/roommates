<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id='top'>
<header>
<div id="top-strip">
	<div class="container">
		<ul class="pull-left social-icons">
			<li><a href="#" class="fa fa-google-plus"></a></li>
			<li><a href="#" class="fa fa-twitter"></a></li>
			<li><a href="#" class="fa fa-pinterest"></a></li>
			<li><a href="#" class="fa fa-dribbble"></a></li>
			<li><a href="#" class="fa fa-linkedin"></a></li>
			<li><a href="#" class="fa fa-facebook"></a></li>
		</ul>
		<div id="login-box" class='pull-right'>
			<a href="login.php" class='fa fa-user'><span>Login</span></a>
			<a href="join.php" class='fa fa-pencil'><span>Register</span></a>
		</div>
	</div>
</div>
</header>
<!-- /Header -->
<div class="slider-section">
	<div id="premium-bar">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="sites/all/themes/splash_woly/img/logo.png" alt="logo"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="<?php print base_path();?>">Home</a></li>
						<li><a href="index.html">Our Services</a></li>
						<li><a href="index.html">News</a></li>
					        <li><a href="index.html">contact</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!-- Slider-Section -->
	<div class="main-flexslider">
		<ul class="slides">
			<li class='slides' id='slide-n1'><img src="sites/all/themes/splash_woly/img/slide-01.jpg" alt="slide 01">
			<div class="slide-box">
                            <div id="container"> 
                                  <div id="vertical"> 				
                         <h3 style="text-align:center;">Login - Register</h3>
              <form action="login.php">
                <fieldset> 
       
              <div> 
              <label>Username 
              <input id="email" name="email" type="email" placeholder="example@domain.com" required>
		</label> 
              <label>Password
              <input id="family-name" name="family-name" type="text" placeholder="Password" required autofocus> 
		     </label>
                             <button type=submit>Login</button>
                     </div>
    
  
                     </fieldset> 
  
                       
                   </form>            
                </div>               
           </div> 
                         
	 </p>
	<ul class="slide-item-features">
					 
    </ul>
				 
 </div>
</li>
			<li class='slides' id='slide-n2'><img src="sites/all/themes/splash_woly/img/slide-02.jpg" alt="slide">
			<div class="slide-box">
	  <div id="container"> 
                                  <div id="vertical"> 
	   
					
                         <h3 style="text-align:center;">Login - Register</h3>
              <form action="login.php">
                <fieldset> 
       
              <div> 
              <label>Username 
              <input id="email" name="email" type="email" placeholder="example@domain.com" required>
		</label> 
              <label>Password
              <input id="family-name" name="family-name" type="text" placeholder="Password" required autofocus> 
		     </label>
                             <button type=submit>Login</button>
                     </div>
    
  
                     </fieldset> 
  
                       
                   </form>            
                </div>               
           </div> 
                         
	 </p>
	<ul class="slide-item-features">
					 
    </ul>
			</div>
			</li>
			<li class='slides' id='slide-n3'><img src="sites/all/themes/splash_woly/img/slide-03.jpg" alt="slide">
			<div class="slide-box">
	     <div id="container"> 
                                  <div id="vertical"> 
	    				
                         <h3 style="text-align:center;">Login - Register</h3>
              <form action="login.php">
                <fieldset> 
       
              <div> 
              <label>Username 
              <input id="email" name="email" type="email" placeholder="example@domain.com" required>
		</label> 
              <label>Password
              <input id="family-name" name="family-name" type="text" placeholder="Password" required autofocus> 
		     </label>
                             <button type=submit>Login</button>
                     </div>
    
  
                     </fieldset> 
  
                       
                   </form>            
                </div>               
           </div> 
                         
	 </p>
	<ul class="slide-item-features">
					 
    </ul>
	</div>
</div>
<!-- Search-Section -->
<div class="search-section">
	<div class="container">
		<form>
			
		</form>
	</div>
</div>
<!-- Recent-Listings-Section -->

<!-- Agents-Section -->

<!-- Services-Section -->
<div class="services-section">
	<div class="container">
		<div class="title-box">
			<h3>our services</h3>
			<div class="bordered">
			</div>
		</div>
		<div class="services-wrapper">
			<div class="col-md-3 single-service">
				<div class="bordered top-bordered">
				</div>
				<h4>student Apt</h4>
				<p>
					 fully customizable
				</p>
				<div class="fa fa-flask icon-service">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'>+ read more</a>
			</div>
			<div class="col-md-3 single-service">
				<div class="bordered top-bordered">
				</div>
				<h4>Optimized sharing</h4>
				<p>
					 clean & well comented code
				</p>
				<div class="fa fa-clipboard icon-service">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'>+ read more</a>
			</div>
			<div class="col-md-3 single-service">
				<div class="bordered top-bordered">
				</div>
				<h4>Customs services </h4>
				<p>
					 optimized for search engines
				</p>
				<div class="fa fa-globe icon-service">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'>+ read more</a>
			</div>
			<div class="col-md-3 single-service">
				<div class="bordered top-bordered">
				</div>
				<h4>Connect Owner</h4>
				<p>
					 front-end services
				</p>
				<div class="fa fa-html5 icon-service">
				</div>
				<div class="bordered">
				</div>
				<a href="#" class='readmore'>+ read more</a>
			</div>
		</div>
	</div>
</div>
<!-- footer-section -->
<footer>
<div class="container">
	<div class="col-md-3 footer-about">
		<a class="logo" href="#"><img src="img/logof.png" alt="logo"></a>
		<p>
			 This is the official web site of RoommateCampus. A site dedicated to help students in Montreal to share apartment together.
		</p>
	</div>
	<div class="col-md-3 footer-recent-posts">
		<h3 class='footer-title'>recent posts</h3>
		<ul>
			<li><a href="#"><i class="fa fa-arrow-circle-right"></i> New Search Platform Update</a></li>
			<li><a href="#"><i class="fa fa-arrow-circle-right"></i> Envato's Most Wanted - $5,000 for Ghost Themes</a></li>
			<li><a href="#"><i class="fa fa-arrow-circle-right"></i> Update: WordPress Theme Submission Requirements</a></li>
		</ul>
	</div>
	<div class="col-md-3 footer-contact-info">
		<h3 class='footer-title'>contact info</h3>
		<p class="website-number">
			<i class="fa fa-phone"></i> 900 123 456 789
		</p>
		<p class="website-email">
			<i class="fa fa-envelope"></i> info@roommatescampus.com
		</p>
		<p class="website-fax">
			<i class="fa fa-print"></i> 900 123 456 789
		</p>
	</div>
	<div class="col-md-3 footer-newsletter">
		<h3 class='footer-title'>newsletter</h3>
		<p>
			 Roommates campus invite you to provide your submit your email for special news letter.
		</p>
		<form class='footer-search'>
			<input type="text" placeholder='e-mail'>
			<input type="submit">
		</form>
	</div>
</div>
</footer>
<div class="bottom-strip">
	<div class="container">
		<div class="col-md-4">
			<p class='pull-left'>
				 © 2014 Roommates campus, All Rights Reserved
			</p>
		</div>
		<div class="col-md-4 bottom-strip-middle">
			<a href="#top" class='fa fa-arrow-circle-up' id='backtop-btn'></a>
		</div>
		<div class="col-md-4">
			<ul class="social-icons">
				<li><a href="#" class="fa fa-google-plus"></a></li>
				<li><a href="#" class="fa fa-twitter"></a></li>
				<li><a href="#" class="fa fa-pinterest"></a></li>
				<li><a href="#" class="fa fa-dribbble"></a></li>
				<li><a href="#" class="fa fa-linkedin"></a></li>
				<li><a href="#" class="fa fa-facebook"></a></li>
			</ul>
		</div>
	</div>
</div>
<h2> woly login </h2>
 <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

<div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

