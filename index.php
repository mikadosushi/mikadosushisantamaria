<!DOCTYPE html>
<html>
<head>
<title>Sushi and Japanese Food Restaurant--Eat Authentic Coastal Cuisine in Santa Maria, CA|Mikado Sushi</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/960.css" /> 
<link rel="stylesheet" href="css/site_style.css" /> 
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css"/>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jqFancyTransitions.1.8.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>

</head>
<body>
<?php 
	$galleryContent = "<div id='galleryImages' class='grid_16'><div id='galleryContainer'></div><img id='orchid' src='images/orchid.png'/></div>";
	$buttonsContent = "<!--<div class=\"push_4 grid_3 galleryButton css3button\" onclick=\"restart('proxy.php')\">Mikado Gallery</div>
				<div class=\"push_5 grid_3 galleryButton css3button\" onclick=\"restart('proxy.php?page=UserGallery')\">Customer Gallery</div>-->
";
	$leftContent = "<h2>Upload Pictures!</h2>
						  		<img src='images/slash.png' style='width:210px;position:relative;top:-20px'/>
						  		<p>Having a good time at Mikado?  Upload your pics and show everyone!</p>						  		
						  		<a id='uploadLink' class='iframe' href='upload.php'><button type='button' name='' value='' class='css3button'>Click Here To Upload</button></a>
						  		<div id='newPic'>YOUR PICTURE HERE</div>";
	$centerContent = "<div id='centerTitle'>
					<h2>Welcome To Mikado Sushi!</h2>
					<img src='images/slash.png' style='width:340px;position:relative;top:-20px'/>
					</div>
					Mikado Japanese Restaurant is Santa Maria, California's stop for the freshest sushi and authentic Japanese cuisine!  Click on our menu or just stop on by to see
					what we're serving up today!
					
					<h1 style='text-align:center;font-size:2.1em;color:#FFFF88;text-decoration:underline;cursor:pointer' onclick=\"window.location='index.php?page=Menu'\">Click For Full Menu!!</h1>
					<h1 style='text-align:center;font-size:2.1em;color:#FFFF88;text-decoration:underline;cursor:pointer' onclick=\"window.location='index.php?page=Specials'\">Click For Specials!!<br/><img class='menuPic' style='width:100px;height:120px' src='./images/menu/ymenu.jpg'/><img class='menuPic' style='width:100px;height:120px' src='./images/blue1.jpg'/></h1>
					";
	$rightContent = "<h2>Visit Our Location</h2>
						  		<img src='images/slash.png' style='width:210px;position:relative;top:-20px'/>
								<p>
									We're here in the heart of the Santa Maria Town Center, in the same shopping center as Big 5, right across from the Santa Maria Mall.  Click the image below to get directions!
								</p>
								
								<img onclick=\"window.location='index.php?page=Contact'\" src='images/mainPage_09_08.png' style='width:230px;cursor:pointer'/>
						 		<div style='font-size15px;position:relative;top:-55px;left:10px;text-align:left'>
						  			209 Town Center East<br/>
						  			Santa Maria, CA 93458<br/>
						  			Phone:(805) 928-1455
						  		</div>";
	$scriptContent = "<script type=\"text/javascript\" src=\"scripts/gallery_scripts.js\"></script>";

		switch($_GET["page"]){
			case "Menu":
			$buttonsContent = "";
			$galleryContent = "<style type=\"text/css\">.menuPic{width:910px}</style>
							<img src='images/slash.png' style='width:900px;height:10px;position:relative;left:20px;top:10px'/>
								<ul style=\"list-style:none;margin-left:-25px;width:940px;margin-top:0px\">
							  <li><img class=\"menuPic\" src=\"./images/menu/Appetizers.jpg\" ></li>
							  <li><img class=\"menuPic\" src=\"./images/menu/lunch.jpg\"></li>
							  <li><img class=\"menuPic\" src=\"./images/menu/Rolls1.jpg\"></li>
							  <li><img class=\"menuPic\" src=\"./images/menu/Rolls2.jpg\"></li>
							  <li><img class=\"menuPic\" src=\"./images/menu/dinner.jpg\"></li>
								<li><img class=\"menuPic\" src=\"./images/menu/drinks.jpg\" ></li>
							  </ul>";
			$leftContent = "";
			$rightContent = "";
			$centerContent = "<div id='menuHolder' style='height:500px;overflow:auto'>
							  
			
			
							</div>";
			$scriptContent = "<script type='text/javascript'>$('.socialLink, .contentContainer').hide()</script>";
			break;
			case "Specials":
			$buttonsContent = "";
			$galleryContent = "<style type=\"text/css\">.menuPic{width:910px}</style>
							<img src='images/slash.png' style='width:900px;height:10px;position:relative;left:20px;top:10px'/>
								<ul style=\"list-style:none;margin-left:-25px;width:940px;margin-top:0px\">
							  <li><img class='menuPic' style='border:5px white solid' src='./images/menu/ymenu.jpg'/></li>
<li><img class='menuPic' style='border:5px white solid' src='./images/blue1.jpg'/></li>
<li><img class='menuPic' style='border:5px white solid' src='./images/blue2.jpg'/></li>
							  </ul>";
			$leftContent = "";
			$rightContent = "";
			$centerContent = "<div id='menuHolder' style='height:500px;overflow:auto'>
							  
			
			
							</div>";
			$scriptContent = "<script type='text/javascript'>$('.socialLink, .contentContainer').hide()</script>";
			break;
			case "Restaurant":
			$buttonsContent = "";
			$galleryContent = "<div id='galleryImages' class='grid_16'>
								<div id='galleryContainer'>
								<img class='galleryImage' id='restaurantPic' src='images/restaurant_2_big.jpg' href='images/restaurant_2_big.jpg'/>
								</div>
								<img id='orchid' src='images/orchid.png'/></div>";
			$leftContent = "<img src='images/restaurant_1.jpg' style='width:220px'/>";
			$scriptContent = "<script type='text/javascript'>$('#restaurantPic').fancybox()</script>";
			$centerContent = "<div id='centerTitle'>
								<h2 style='font-size:21pt'>Dine In With Us!</h2>
								<img src='images/slash.png' style='width:340px;position:relative;top:-20px'/>
								</div>
				Our dining room seats 67, perfect for small parties or a night out! We have a California liquor license, and server a variety of beer and wine.
				<br/><br/>
				You can dine at a table, or at our sushi bar and watch the sushi artists at work!
				<br/>
				
				<h2 style='text-align:center'><img src='images/slash.png' style='width:300px;'/> For seating availability, call: <br/>805-928-1455!</h2>";

			break;
			case "Services":
			$buttonsContent = "";
			echo"";
			break;
			case "Contact":
			$buttonsContent = "";
			$centerContent = "<div id='centerTitle'>
								<h1>Map</h1>
								<img src='images/slash.png' style='width:340px;position:relative;top:-20px'/>
							</div>
			<div id='map_canvas' style='margin-left:0px;width:340px;color:black;height:350px;'>&nbsp;</div>";
			
			$leftContent = "<h2>Phone Number:</h2>
								<img src='images/slash.png' style='width:200px;position:relative;top:-20px'/>
								<br/>							
								<p style='margin-top:-20px'>805-928-1455</p>
							<h2>Address:
							<br/>
							<img src='images/slash.png' style='width:200px;position:relative;top:-20px'/>
							</h2>
							<p style='margin-top:-40px'>
							209 Town Center<br/>Santa Maria, CA 93458
							</p>";
			
			$rightContent="<h2>Get Directions!</h2>
						  		<img src='images/slash.png' style='width:210px;position:relative;top:-20px'/>
								<table style='margin:auto' class='grid_4'>
   								<tr>
 								<td>From:&nbsp;</td>
 								</tr><tr>
  								 <td><input type='text' size='25' id='fromAddress' name='from' value='Santa Maria, CA'/></td>
   								</tr><tr>
  						 		<td align='left'>To: Mikado Sushi, Santa Maria<input type='hidden' size='25' id='toAddress' name='to'
   						  	value='209 Town Center Santa Maria, CA 93458' /> <button name='submit' type='submit' value='Get Directions' style='margin-top:10px' class='css3button' onclick='calcRoute()'>Get Directions</button></td></tr>
  				 			</table>
  				 			<div id='directions' style='height:280px;width:220px;overflow:auto'>&nbsp;</div>";
  				 			
			$scriptContent = "<script type='text/javascript'>$(document).ready(function(){setTimeout(makeMap, 100)});</script>
								<script type=\"text/javascript\" src=\"scripts/gallery_scripts.js\"></script>";
			break;
			default:
				
			break;
			}
			
			
			?>
<div class="container_16">

		<div class="grid_5 menuRow omega" style="background:url('images/site_template_960_01.png');width:290px" onclick="window.location='index.php'">&nbsp;</div>
		<div class="grid_2 menuRow menuLink alpha omega" style="background:url('images/site_template_960_02.png');width:120px" onclick="window.location='index.php?page=Menu'">&nbsp;</div>
		<div class="grid_3 menuRow menuLink alpha omega" style="background:url('images/site_template_960_03.png');width:180px" onclick="window.location='index.php?page=Restaurant'">&nbsp;</div>
		<div class="grid_3 menuRow menuLink alpha omega" style="background:url('images/site_template_960_04.png');width:180px" onclick="window.location='index.php?page=Services'">&nbsp;</div>
		<div class="grid_3 menuRow menuLink alpha omega" style="background:url('images/site_template_960_05.png');width:170px" onclick="window.location='index.php?page=Contact'">&nbsp;</div>
		
		<div class="grid_16" style="position:relative;background:url('images/site_template_960_07.png') repeat-y">
		<div id="socialLinks">
			<div id="facebookLink" class="socialLink" onclick="window.location='http://www.facebook.com/pages/Mikado-Sushi-and-Japanese-Restaurant/208810929131541'">&nbsp;</div>
			<div id="googleLink" class="socialLink" onclick="window.location='http://maps.google.com/maps/place?hl=en&safe=off&bav=on.2,or.r_gc.r_pw.&biw=1920&bih=1061&um=1&ie=UTF-8&q=sushi+santa+maria&fb=1&gl=us&hq=sushi+santa+maria&hnear=0x80ec0faa0c54c609:0xbfd52658a5a348e,Santa+Maria,+CA&cid=9656718264740910182&sa=X&ei=zsbhTc6MKIrhiALa1NyYBg&ved=0CGIQ3Q4'">&nbsp;</div>
			<div id="yahooLink" class="socialLink" onclick="window.location='http://local.yahoo.com/info-41950816-mikado-japanese-restaurant-santa-maria'">&nbsp;</div>
		</div>		
			<div class="container_16 alpha omega" style="background:url('images/site_template_960_06.png') no-repeat;min-height:725px;margin-top:0px">
				<?echo $galleryContent;?>
		        <div class="clear"></div>
		        <div class="container_16" style="padding-left:10px">
		        <?echo $buttonsContent;?>
		        
				</div>
				<div class="clear"></div>
		       	<div class="container_16" style="padding-left:15px;padding-top:10px">
				<div id="leftContainer" class="grid_4 contentContainer">
				<?echo $leftContent;?>	
				</div>
				<div class="grid_6 contentContainer">
				<?echo $centerContent;?>					
				</div>
				<div class="grid_4 contentContainer">
				<?echo $rightContent;?>			
				</div>
				</div>
		</div>
		</div>
		<div class="grid_16 omega" style="background:url('images/site_template_960_08.png');background-position:0 -30px;height:18px">
</div>
<?echo $scriptContent;?>
</body>
</html>