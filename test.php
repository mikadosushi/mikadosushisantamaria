<!DOCTYPE html>
<html>
<head>
<title>Mikado Sushi, Santa Maria California</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 13 Sep 2002 16:12:00 GMT">
<link rel="stylesheet" href="css/960.css" /> 
<link rel="stylesheet" href="css/site_style.css" /> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<body>
<div class="container_16">

		<div class="grid_5 menuRow omega" style="background:url('images/site_template_960_01.png');width:290px">&nbsp;</div>
		<div class="grid_2 menuRow menuLink alpha omega" style="background:url('images/site_template_960_02.png');width:120px" onclick="window.location='index.php?page=Menu'">&nbsp;</div>
		<div class="grid_3 menuRow menuLink alpha omega" style="background:url('images/site_template_960_03.png');width:180px" onclick="window.location='index.php?page=Restaurant'">&nbsp;</div>
		<div class="grid_3 menuRow menuLink alpha omega" style="background:url('images/site_template_960_04.png');width:180px" onclick="window.location='index.php?page=Services'">&nbsp;</div>
		<div class="grid_3 menuRow menuLink alpha omega" style="background:url('images/site_template_960_05.png');width:170px" onclick="window.location='index.php?page=Contact'">&nbsp;</div>
		<div class="grid_16" style="background:url('images/site_template_960_06.png') no-repeat;height:725px">
		<div class="grid_15 omega" style="padding:20px;">
		<?php 
			switch($_GET["page"]){
			case "Menu":
			echo"<img src='images/menu_1.png'/ style='position:relative;left:170px;'/>";
			break;
			case "Restaurant":
			echo"<div class='grid_6'><h1>Dine In With Us!<br/><img src='images/slash.png' style='width:340px'/></h1>
				Our dining room seats 67, perfect for small parties or a night out! We have a California liquor license, and server a variety of beer and wine.
				<br/><br/>
				You can dine at a table, or at our sushi bar and watch the sushi artists at work!
				<br/><br/> For seating availability, call: 805-928-1455!</div>
				<div class='grid_8 push_1'><img src='images/restaurant_1.jpg'/>
				<img src='images/cclogos.png' style='clear:right;float:right;margin:5px'/></div>
				<div class='grid_15' id='restBig'>
				<img src='images/slash.png' style='width:800px;height:9px'/>
				<img src='images/restaurant_2_big.jpg' style='height:135px;width:880px'/>
				</div>
				";

			break;
			case "Services":
			echo"<img id='mainPagePic' src='images/mainPage_09.png'/>";
			break;
			case "Contact":
			echo"
					<script type='text/javascript'>
					$(document).ready(function(){setTimeout(makeMap, 100)});
					</script>
					
					
					<div style='width:940px;height:770px; position:absolute;margin-left:10px;margin-top:-50px;text-align:center' alt=''>
					<h1>Phone Number:<br/><img src='images/slash.png' style='width:340px;position:relative;top:-20px'/><br/> 805-928-1455</h1>
					<h1>Address:<br/> <img src='images/slash.png' style='width:280px;position:relative;top:-20px'/><br/>209 Town Center<br/>Santa Maria, CA 93458</h1>
					<table style='margin:auto'>

   							<tr><td>From:&nbsp;</td>

  						 <td><input type='text' size='25' id='fromAddress' name='from'
    					 value='Santa Maria, CA'/></td>
   
  						 <td align='right'>To: Mikado Sushi, Santa Maria<input type='hidden' size='25' id='toAddress' name='to'
   						  value='209 Town Center Santa Maria, CA 93458' /> <input name='submit' type='submit' value='Get Directions' onclick='calcRoute()'/></td></tr>
		
  				 </table>
					<table style='margin:auto'>
					<tr>
    				<td valign='top'><h1><u>Map</u></h1><div id='map_canvas' style='margin-left:25px;width:300px;color:black;height:300px;margin-top:25px'>&nbsp;</div></td>
					<td valign='top'><div id='directions' style=width:300px; height:400px;position:relative;top:-30px'>&nbsp;</div></td>
					</tr>
					</table>
				</div>";
			break;
			default:
					echo"<img id='mainPagePic' src='images/mainPage_09.png'/>";
			break;
			}
			
			
			?>
		</div>
		</div>
		<div class="grid_16 omega" style="background:url('images/site_template_960_07.png')">&nbsp;</div>
		<div class="grid_16 omega" style="background:url('images/site_template_960_08.png');height:55px">&nbsp;</div>
	</div>
</table>
</div>
</body>
</html>