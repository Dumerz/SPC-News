<?php
include("db.php");
include("functions.php");
?>
<?php
session_start(); //code to para magkaroon ng user.. mag start ng session pag may nag login..

?>
<html>
    <head>
      <title>SPC Info Office</title>
      <link rel="stylesheet" type="text/css" href="../../css/style.css">
	  <link rel="stylesheet" type="text/css" href="../../js/engine1/style.css" media="screen" />
	  <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
	  <script src="../../js/facebox.js"></script>
	  <script>
          jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox({
              loadingImage : '../../img/thumbnails/facebox/loading.gif',
              closeImage   : '../../img/thumbnails/facebox/closelabel.png'
            }) })            
	  </script>
	</head>
    <body>
	<style>
    .row article{ font-size: 14px;}
    .cat-title{ margin-bottom: 10px;}
    h1 { font-family:Arial, Helvetica, sans-serif;
         color: #0C0;
         text-shadow: #666 1px 1px 1px;
    }
    td, .details{ font-family:Arial, Helvetica, sans-serif;}
    </style>    
    <div class="page">
      <header class="banner">
              <div id="name">
              <a href="../../index.html">
              <h1>
              <img src="../../img/logo.png"/>
              </h1>
              </a>
              </div>
          <img src="../../img/banner.jpg" width="745px" height="120"/>
          </header>
          <section class="container">
          	<div class="main">
              <nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li  id="home" style="background: linear-gradient(#F90, #FC0);">
							<a href="../../index.html">Home</a>
						</li>
						<li>
							<a href="#">News</a>
							<div class="cbp-hrsub" style="left: -165">
								<div class="cbp-hrsub-inner">
									<div style="width: 20%">
                                    	<img src="../../img/menu/current.jpg">
										<a href="../../news/current.html"><h4>Current News</h4></a>
                                    </div>
                                    <div style="width: 20%">
                                    	<img src="../../img/menu/advisory.jpg">                                    
										<a href="../../news/advisory.html"><h4>Municipal Advisory</h4></a>
									</div>
									<div style="width: 20%">
                                    	<img src="../../img/menu/business.jpg">                                         
										<a href="../../news/business.html"><h4>Business News</h4></a>
									</div>                                    
									<div style="width: 20%">
                                    	<img src="../../img/menu/agri.jpg">                                         
										<a href="../../news/agri.html"><h4>Agri News</h4></a>
									</div>
									<div style="width: 20%">
                                    	<img src="../../img/menu/tourism.jpg">                                         
										<a href="../../news/tourism.html"><h4>Tourism News</h4></a>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Goverment</a>
							<div class="cbp-hrsub" style="left: -330;">
								<div class="cbp-hrsub-inner"> 
									<div style="width: 20%; text-align: left;">
										<h4>San Pablo</h4>
										<ul>
											<li><a href="../../government/sanpablo/mayor.html">Mayor</a></li>
											<li><a href="../../government/sanpablo/vicemayor.html">Vice Mayor</a></li>
											<li><a href="../../government/sanpablo/councilors.html">Councilor</a></li>
                                            
										</ul>
                                    </div>									
                                    <div style="width: 20%; text-align: left;">
										<h4>Municipal</h4>
										<ul>
											<li><a href="../../government/municipal/offices.html">Offices</a></li>
											<li><a href="../../government/municipal/employees.html">Employees</a></li>
											<li><a href="../../government/municipal/hotlines.html">Hotlines</a></li>
                                            
										</ul>
                                    </div>
                                    <div style="width: 20%; text-align: left;">
										<h4>Barangays</h4>
										<ul>
											<li><a href="../../government/barangay/barangay-data.html">Barangay Data</a></li>
											<li><a href="../../government/barangay/barangay-history.html">History</a></li>
											<li><a href="../../government/barangay/barangay-chairmans.html">Chairmans</a></li>
											<li><a href="../../government/barangay/barangay-geography.html">Geography</a></li>
										</ul>
									</div>
									<div style="width: 20%; text-align: left;">
										<h4>History</h4>
										<ul>
											<li><a href="../../government/history/gobernadorcillo.html">Gobernadorcillo</a></li>
											<li><a href="../../government/history/mayor.html">Mayors</a></li>
											<li><a href="../../government/history/vicemayor.html">Vice Mayors</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Discover</a>
							<div class="cbp-hrsub" style="left: -495">
								<div class="cbp-hrsub-inner"> 
									<div style="width: 20%; text-align: left;">
										<h4>History</h4>
										<ul>
											<li><a href="../../discover/history/history-sanpablo.html">Origin of San Pablo</a></li>
											<li><a href="../../discover/history/legends-lakes.html">Seven Lakes</a></li>
											<li><a href="../../discover/history/history-government.html">Government</a></li>
											<li><a href="../../discover/history/history-barangay.html">Barangay</a></li>
										</ul>
                                    </div>
                                    <div style="width: 20%; text-align: left;">
										<h4>People</h4>
										<ul>
											<li><a href="../../discover/people/leaders.html">Leaders</a></li>
											<li><a href="../../discover/people/heroes.html">Heroes</a></li>
											<li><a href="../../discover/people/sanpablenos.html">San Pablenos</a></li>                                            
										</ul>
									</div>
									<div style="width: 20%; text-align: left;">
										<h4>Facts</h4>
										<ul>
											<li><a href="../../discover/facts/information.html">Information</a></li>
											<li><a href="../../discover/facts/lake.html">Seven Lakes</a></li>
											<li><a href="../../discover/facts/places.html">Places</a></li>
										</ul>
									</div>
									<div style="width: 20%; text-align: left;">
										<h4>Festival</h4>
										<ul>                                    
											<li><a href="../../discover/festival/coco-festival.html">Coco Festival</a></li>
											<li><a href="../../discover/festival/tilapia-festival.html">Tilapia Festival</a></li>
											<li><a href="../../discover/festival/rambutan-festival.html">Rambutan Festival</a></li>                                            
											<li><a href="../../discover/festival/products.html">Products</a></li>
											<li><a href="../../discover/festival/delicacies.html">Delicacies</a></li>
                                        </ul>
                                    </div>                                   
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">How?</a>
							<div class="cbp-hrsub" style=" left: -660">
								<div class="cbp-hrsub-inner"> 
									<div style="width: 20%; text-align: left;">
										<h4>Ask</h4>
										<ul>
											<li><a href="../../how/query.html">Query</a></li>
											<li><a href="../../how/services.html">Services</a></li>
											<li><a href="../../how/office.html">Office</a></li>
										</ul>
                                    </div>
                                    <div style="width: 20%; text-align: left;">
										<h4>One Stop</h4>
										<ul>
											<li><a href="../../how/one_stop/services.html">Services</a></li>
											<li><a href="../../how/one_stop/offices.html">Offices</a></li>
											<li><a href="../../how/one_stop/history.html">History</a></li>
										</ul>
									</div>
									<div style="width: 20%; text-align: left;">
										<h4>Municipal</h4>
										<ul>
											<li><a href="../../how/municipal/services.html">Services</a></li>
											<li><a href="../../how/municipal/offices.html">Offices</a></li>
										</ul>
									</div>
									<div style="width: 20%; text-align: left;">
										<h4>Directions</h4>
										<ul>
											<li><a href="../../how/directions/places.html">Places</a></li>
											<li><a href="../../how/directions/business.html">Business</a></li>
											<li><a href="../../how/directions/landmarks.html">Landmarks</a></li>
											<li><a href="../../how/directions/map.html">Map</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Forums</a>
						  <!-- /cbp-hrsub -->
						</li>                        
					</ul>
				</nav>
              </header>
		<script src="../../js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>                                    
          </div>
            <div class="inner-container">
            <div class="left" style="height: 800px;">
            <h2 style="font-size: 40px;">Forums</h2>
            <p style="font-size:16px;">Be a member and be a part of our talks ,ideas, and thoughts about San Pablo. We have members all over the world</p>
<!--log_in-->
<?php 
if(isset($_SESSION['user']))
{
$user = $_SESSION['user'];
$query_logged_in = mysql_query("SELECT * FROM users WHERE username= '".$user."' ");
$fetch_logged_in = mysql_fetch_assoc($query_logged_in);
$user_id = $fetch_logged_in['user_id'];
$user_image = $fetch_logged_in['user_image'];
$user_fullname =$fetch_logged_in['full_name'];
}
?>
<!--log_in-->

<!--log_in-->
<?php 
if(isset($_POST['log_in']))
{
?>
<style>

::-webkit-input-placeholder { /* WebKit browsers */
    color:    #FF7174;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:     #FF7174;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:     #FF7174;;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:     #FF7174;
}
</style>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

$query_username = mysql_query("SELECT * FROM users WHERE username='".$username."' ");
$fetch_username = mysql_fetch_assoc($query_username);
$count_username = mysql_num_rows($query_username);
$password1 = $fetch_username['password']; 
if($count_username <= 0)
{
$placeholder_username = "placeholder='Incorrect Username.!' ";	
$placeholder_password = "placeholder='password'";
}
else
{
	if($password != $password1 )
	{
	$placeholder_username = "placeholder='Username' ";	
	$placeholder_password = "placeholder='Incorrect Password.!'";
	}
	else
	{
		$_SESSION['user'] = $username;
	$placeholder_username = "placeholder='' ";	
	$placeholder_password = "placeholder=''";
	echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">';
	}
}

}
else
{
$placeholder_username = "placeholder='Username' ";
$placeholder_password = "placeholder='password'";
}
?>
<!--log_in-->

<form action="#" method="post">
<?php if(isset($_GET['topic_id']) or isset($_GET['register']) or isset($_GET['log_in']))
{?>
<a href="forums.php" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><strong>Back to topic Index</strong></a>
<?php }?>

<?php if(isset($user))
{?>
<strong><a style="color:#3B5998;font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><?php if(isset($_GET['topic_id'])){?>-<?php }?> Logged in as : <span style="color:#333;"><?php echo $user_fullname;?></span></a></strong><?php if(!isset($_GET['topic_id'])){?><a href="forums.php?new_topic" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><strong> - Create new Topic</strong></a><?php }?><a href="index.php?log_out" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><strong> - Log out</strong></a><br />
<?php }?>


<?php
if(!isset($user) and isset($_GET['topic_id']) )
{
	echo " - ";
}
if(isset($_GET['register']) or isset($_GET['log_in']) )
{
	echo " - ";
}
?>
<?php if(!isset($user)){?>
  <a href="register.php" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><strong>Create an Account</strong></a> -
<table>
<tr><td><label>Username : </label></td><td><input type="text" value="" required <?php echo $placeholder_username; ?>  name="username" title="Enter your Username" style="width:150px;"/></td>
</tr>
<tr><td>Password : </td><td><input type="password" value="" required <?php echo $placeholder_password; ?> style="width:150px;"  name="password" title="Enter your password"/></td>
</tr>
<tr><td></td><td><input type="submit" value=" Log in " name="log_in" style="background:#72A2D6; border-radius: 10px 10px 10px 10px; color:white;"/></td>
</tr>
</table>
</form>
<?php }?>


            </div>
            <div class="right">
          		<iframe style="padding: 20px 20px; height: 300px;" src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/SPCnews&amp;width=285&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" allowtransparency="true"></iframe>                       
            </div>            
            </div>           
          </section>
        </div>
    </body>
</html>

