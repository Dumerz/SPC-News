<?php
session_start(); 
include("db.php");
include("functions.php");
?>
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

<?php
if(isset($_GET['log_out']))
{
session_destroy();
?>
<meta HTTP-EQUIV="REFRESH" content="0; url=login.php">
<?php
}
?>
<html>
    <head>
      <title>SPC Info Office</title>
      <link rel="stylesheet" type="text/css" href="../css/style.css">      
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
			  <br>
              <a href="index.html">
              <h1>
              <img src="../img/logo.png"/>
              </h1>
              </a>
              </div>
         <div class="ban"></div>
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
		<script src="../../js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>                                    
          </div>
            <div class="inner-container">
            <div class="left" style="height: 800px;">
            <h2>SPC ChatRum</font></h2>


<!--adding topic-->
<?php 
if(isset($_POST['add_topic']))
{
$topic_title = $_POST['add_topic_title'];
$topic_content = $_POST['add_topic_content'];
$date = date('y-m-d');
mysql_query("INSERT INTO topics VALUES ('','".$topic_title."','".$topic_content."','".$date."','".$user_id."')");
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">';
}
?>
<!--adding topic-->


<!--adding comment-->
<?php 
if(isset($_POST['post_comment']))
{
$comment = $_POST['comment'];
$topic_id = $_GET['topic_id'];
$date = date('y-m-d');
mysql_query("INSERT INTO comments VALUES ('','".$topic_id."','".$user_id."','".$comment."','".$date."')");
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=#box">';
}
?>
<!--adding comment-->


<!--selecting data-->
<form action="#" method="post">
<?php if(isset($_GET['topic_id']) or isset($_GET['register']) or isset($_GET['log_in']))
{?>
<a href="index.php" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><strong>Back to topic Index </strong></a>
<?php }?>

<?php if(isset($user))
{?>
<strong><a style="color:#3B5998;font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><?php if(isset($_GET['topic_id'])){?>-<?php }?><?php if(!isset($_GET['topic_id'])){?><a href="index.php?new_topic" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><strong> - Create new Topic</strong></a><?php }?><a href="index.php?log_out" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;"><strong> - Log out</strong></a><br />
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

<?php

if(isset($_GET['register']))
{
?>
<br />
<div style="padding-left:130px;">
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
<?php
}
else if(isset($_GET['topic_id']))
{
$topic_id = $_GET['topic_id'];
$query_comments = mysql_query("SELECT * FROM comments WHERE topic_id='".$topic_id."' ");
$count_comments = mysql_num_rows($query_comments);

$query_topic_content = mysql_query("SELECT * FROM topics WHERE topic_id='".$topic_id."' ");
$fetch_topic_content = mysql_fetch_assoc($query_topic_content);
$user_topic = $fetch_topic_content['user_id'];
$query_topic_user = mysql_query("SELECT * FROM users WHERE user_id='".$user_topic."' ");
$fetch_topic_user = mysql_fetch_assoc($query_topic_user );
?>

<table width="500px;">
<tr>
<td height="100"  width="100%">
<table width="500px;" style="font-family:Tahoma, Geneva, sans-serif; font-size:11px;">
  <tr>
  <th colspan="2" >
<strong style="font-size:13px;color:#3B5998;">  Topic Title :</strong> <u><?php echo $fetch_topic_content['topic_title'];?></u>
  </th>
  </tr>
  <tr>
    <th rowspan="2" scope="row" width="40"><img src="user_images/<?php echo $fetch_topic_user['user_image'];?>" width="50" height="50"></th>
    <td><strong style="color:#3B5998;"><?php echo $fetch_topic_user['full_name'];?></strong> </td>
  </tr>
  <tr>
    <td style="color:#666;"><?php echo $fetch_topic_content['topic_content'];?></td>
  </tr>
</table>
</td>
</tr>
<tr>
<td height="20" bgcolor="#DDE4E8" style="font-family:Tahoma, Geneva, sans-serif; font-size:11px;"><strong style="color:#3B5998; padding-left:5px;"><?php echo $count_comments;?> <?php if($count_comments<=1){?>Comment<?php }else{?>Comments<?php }?></strong>
</td>
</tr>
<?php
if($count_comments <= 0)
{
?>
<tr>
<td  bgcolor="#DDE4E8" height="50" style=" text-align:center; font-family:Tahoma, Geneva, sans-serif; font-size:13px;">There are no comments yet on this topic..
</td>
</tr>	
<?php
}
else
{
while($fetch_comments = mysql_fetch_assoc($query_comments))	
{
$user_id = $fetch_comments['user_id'];
$query_user = mysql_query("SELECT * FROM users WHERE user_id='".$user_id."' ");
$fetch_user = mysql_fetch_assoc($query_user);
?>
<tr  bgcolor="#DDE4E8"><td>
<table width="500px;" style="font-family:Tahoma, Geneva, sans-serif; font-size:11px;">
  <tr>
    <th rowspan="2" scope="row" width="40"><img src="user_images/<?php echo $fetch_user['user_image'];?>" width="50" height="50"></th>
    <td><strong style="color:#3B5998;"><?php echo $fetch_user['full_name'];?></strong> <span style="color:#666;">(<?php echo $fetch_comments['date'];?>)</span></td>
  </tr>
  <tr>
    <td style="color:#666;"> <?php $str = $fetch_comments['comment'];
	 $chars = array(':)',':-)',':-D',';-)',';-)',';-p',';-b',':o',':-|',':-/','>///<','(-_-)');
	 $icons = array('<img src="smileys/smile.gif">','<img src="smileys/smile.gif">','<img src="smileys/grin.gif">','<img src="smileys/wink.gif">','<img src="smileys/toungue_laugh.gif">','<img src="smileys/tongue_laugh.gif">','<img src="smileys/shade_cheese.gif">','<img src="smileys/gulp.gif">','<img src="smileys/confused.gif">','<img src="smileys/shuteye.gif">','<img src="smileys/downer.gif">',);
	 $new_str = str_ireplace($chars, $icons, $str);
	 $bad = array('fuck','damn','bullshit','motherfucker','penis','vagina','sex','cum','ejaculation','erection', 'ass', 'douchebag', 'dumbass', 'sex', 'porn');
	 $fill = array('love','love','good point','I love my Mother','body','body','dog', 'cat', 'mouse', 'parrot', 'heart','incredible', 'pray', 'phone');
	 $new_str1 = str_ireplace($bad, $fill, $new_str);	 
	 echo $new_str1;	 
	 ?></td>
  </tr>
</table>
</td></tr>
<?php
}
}
?>
</table>


<?php
if(isset($user))
{
?>
<table width="500px;" bgcolor="#DDE4E8">
<tr><td height="50" width="40">
<img src="user_images/<?php echo $user_image;?>" style="height:40px; width:40px;"/>
</td>
<td>
<form action="#box" method="post" id="box"><input type="text" id="box" name="comment" style="color:#666;height:50px; width:99%;" placeholder="Write your comment here... ">
<input type="submit" name="post_comment" style="display:none"/></form>
</td></tr></table>
<?php 
}
else
{
?>
<?php
}
?>
<strong><a href="index.php" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; text-decoration:none;">Back to Topic Index</a></strong>
<?php
}
else
{
?>
<table width="500px;">
<tr>
<td>
<strong style="font-family:Tahoma, Geneva, sans-serif; font-size:20px; color:#333;">Forum Topics </strong>
</td>
</tr>
<?php
//eto code para kunin ung mga data na nasa database. ang out put nito ay ung lahat ng topics sa forums.
$query_topics = mysql_query("SELECT * FROM topics");
while($fetch_topics = mysql_fetch_assoc($query_topics))
{
$user_id_topic = $fetch_topics['user_id'];
$query_user_topic = mysql_query("SELECT * FROM users WHERE user_id='".$user_id_topic."' ");
$fetch_user_topic = mysql_fetch_assoc($query_user_topic);
?>
<tr><td width="100%" style="padding-bottom:10px; padding-top:10px; background: #CCC;">

<a href="index.php?topic_id=<?php echo $fetch_topics['topic_id'];?>" style="font-family:Tahoma, Geneva, sans-serif; font-size:12px;" ><strong style="color:#3B5998;"><?php echo $fetch_user_topic['full_name'];?></strong> : <?php echo $fetch_topics['topic_title'];?></a><br>

</td></tr>
<?php
}
?>
</table>
<br />
<?php 
if(isset($_GET['new_topic']))
{
?><table width="500px;">
<tr>
<td >
<strong style="font-family:Tahoma, Geneva, sans-serif; font-size:20px; color:#333;">Add Topic </strong><br />
<form action="index.php" method="post"><input  required="required" type="text" value="" name="add_topic_title" placeholder="Topic Title" style=" color:#666;width:99%;"/><br /><textarea placeholder="Topic Content" name="add_topic_content" style="color:#666; height:200px;width:99%;"  required="required"/></textarea><div style="text-align:right; width:100%;"><input type="submit"  value="Add Topic" style="background:#72A2D6; border-radius: 10px 10px 10px 10px; color:white;" name="add_topic"/></div></form>
</td></tr>
</table>
<?php
}
}
?>
</form>           
            </div> 
<div class="right">
          		<iframe style="padding: 20px 20px; height: 300px;" src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/SPCnews&amp;width=285&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=258" scrolling="no" frameborder="0" allowtransparency="true"></iframe>                       
            </div>                       
            </div>
          </section>
        </div>
    </body>
</html>

