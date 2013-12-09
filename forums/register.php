<?php
include("db.php");
include("functions.php");
?>
<html>
    <head>
      <title>SPC Info Office</title>
      <link rel="stylesheet" type="text/css" href="../css/style.css">
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
              <img src="../img/logo.png"/>
              </h1>
              </a>
              </div>
          <img src="../img/banner.jpg" width="745px" height="120"/>
          </header>
          <section class="container">
          	<div class="main">
              <nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li  id="home" style="background: linear-gradient(#F90, #FC0);">
							<a href="../index.html">Home</a>
						</li>
						<li>
							<a href="../news/current.html">News</a>
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
							<a href="../government/sanpablo/mayor.html">Government</a>
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
							<a href="../discover/facts/information.html">Discover</a>
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
							<a href="../how/one_stop/offices.html">How?</a>
							<div class="cbp-hrsub" style=" left: -660">
								<div class="cbp-hrsub-inner"> 
									<div style="width: 20%; text-align: left;">
										<h4>Ask</h4>
										<ul>
											<li><a href="../../how/ask/query.html">Query</a></li>
											<li><a href="../../how/ask/services.html">Services</a></li>
											<li><a href="../../how/ask/office.html">Office</a></li>
										</ul>
                                    </div>
                                    <div style="width: 20%; text-align: left;">
										<h4>One Stop</h4>
										<ul>
											<li><a href="../../how/one_stop/services.html">Services</a></li>
											<li><a href="../../how/one_stop/offices.htm">Offices</a></li>
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
							<div class="cbp-hrsub" style=" left: -825">
								<div class="cbp-hrsub-inner"> 
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
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
            <h2 style="font-size: 40px;">F<font style=" font-size: 34px;">orums</font></h2>
            <p style="font-size:16px;">Be a member and be a part of our talks ,ideas, and thoughts about San Pablo. We have members all over the world</p>
			<?php 
            if(isset($_POST['reg']))
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
            $full_name_reg = $_POST['full_name_reg'];
            $user_name_reg = $_POST['username_reg'];
            $user_pass_reg_min = strlen($_POST['password_reg']);
            $user_pass_reg = $_POST['password_reg'];
            $query_user_exist = mysql_query("SELECT * FROM users WHERE username='".$user_name_reg."' ");
            $count_user_exist = mysql_num_rows($query_user_exist);
            if($count_user_exist >= 1)
                {
                    $placeholder_user_reg = "Username Already Exist";
                    $name_reg = $user_name_reg;
                    $pass_reg = "";
                    $user_reg = "";
                    $placeholder_name_reg = "";
                    $placeholder_pass_reg = "";
                    $result = "";
                }
            else
                {
                    if($user_pass_reg_min <= 7)
                    {
                        $name_reg = $full_name_reg;
                        $user_reg = $user_name_reg;
                        $placeholder_pass_reg = "Password Must be 8 characters.";
                        $placeholder_user_reg = "";
                        $name_reg = $user_name_reg;
                        $pass_reg = "";
                        $result = "";
                        $placeholder_name_reg = "";
                    
                        
                        
                    }
                    else
                    {
                    $tempFile = $_FILES['image']['tmp_name'];                 	
                    $targetFile =  $_FILES['image']['name'];  
                    move_uploaded_file($tempFile,"user_images/".$targetFile); //6
                    mysql_query("INSERT INTO users VALUES ('','".$full_name_reg."','".$targetFile."','".$user_name_reg."','".$user_pass_reg."')");
                        $result = "You are now Successfully Registered. <a href=\"login.php\">[Log In]</a>";
                        $name_reg = "";
                        $user_reg = "";
                        $pass_reg = "";
                        $placeholder_name_reg = "";
                        $placeholder_pass_reg = "";
                        $placeholder_user_reg = "";
                    }
                }
            } 
            else
            {
            $result = "";
            $name_reg = "";
            $user_reg = "";
            $pass_reg = "";
            $placeholder_name_reg = "";
            $placeholder_user_reg = "";
            $placeholder_pass_reg = "";
            }
            ?>
            <!--register-->
            
            <form action="#" method="post" enctype="multipart/form-data">
            <table  width="80%">
            <tr>
            <td colspan="2" style="text-align:center;">
            <strong style="font-family:Tahoma, Geneva, sans-serif; font-size:20px; color:#333;">Creat your Account </strong><br />
            </tr>
            <tr>
            <td style="text-align:center;"><strong style="font-family:Tahoma, Geneva, sans-serif;">Full Name</strong></td> <td width="100"> <input type="text" value="<?php echo $name_reg;?>" name="full_name_reg" placeholder="<?php echo $placeholder_name_reg;?>"  style="  color:#666;width:98%;" required/>
            </td>
            </tr>
            <tr>
            <td style="text-align:center;"><strong style="font-family:Tahoma, Geneva, sans-serif;">Username</strong></td>   <td><input type="text" value="<?php echo  $user_reg;?>" name="username_reg" placeholder="<?php echo $placeholder_user_reg;?>" style=" color:#666;width:98%;" required/>
            </td>
            </tr>
            <tr>
            <td style="text-align:center;"><strong style="font-family:Tahoma, Geneva, sans-serif;">Password</strong></td> <td> <input type="password" value="<?php echo $pass_reg;?>" placeholder="<?php echo $placeholder_pass_reg;?>" name="password_reg" required style=" color:#666;width:98%;"/>
            </td>
            </tr>
            <tr>
            <td style="text-align:center;"><strong style="font-family:Tahoma, Geneva, sans-serif;">Photo</strong></td> <td> <input type="file"  name="image" required />
            </td>
            </tr>
            <tr>
            <td colspan="2" style="text-align:right;"><input type="submit"  name="reg" value=" Register " required style="background:#72A2D6; border-radius: 10px 10px 10px 10px; color:white;" />
            </td>
            </tr>
            </table>
            <div style=" color:#349717; width:70%; text-align:center;"><?php echo $result; ?></div>
            </form>
            
            </div>
            <div class="right" style="height: 490px;">
          		<iframe style="padding: 20px 20px; height: 300px;" src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/SPCnews&amp;width=285&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" allowtransparency="true"></iframe>                       
            </div>            
            </div>           
          </section>
        </div>
    </body>
</html>

