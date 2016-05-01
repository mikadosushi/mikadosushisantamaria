<html>
<head>
<title>Mikado Sushi, Santa Maria California</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
		<div class="grid_16" style="background:url('images/site_template_960_06.png') no-repeat;min-height:725px;">
		<div class="grid_15 omega" style="padding:20px">
		<?php 
			switch($_GET["page"]){
			case "Menu":
			echo"<img src='images/menu_1.png' style='position:absolute;margin-left:160px;margin-top:75px' alt=''>";
			break;
			case "Restaurant":
			echo"<div style='width:900px;height:800px; position:absolute;margin-left:25px;margin-top:75px' alt=''>
					<div style='width:300px;float:left;clear:left'><h1 style='text-decoration:underline'>Dine In With Us!</h1>Our dining room seats</div><img src='images/restaurant_1.jpg' style='clear:right;float:right'/>
				</div>";

			break;
			case "Services":
			echo"<div style='width:940px;height:770px; position:absolute;margin-left:10px;margin-top:75px' alt=''>
					<img src='images/mainPage_09.png'/>
				</div>";
			break;
			case "Contact":
			echo"
					<script type='text/javascript'>
					$(document).ready(function(){setTimeout(makeMap, 100)});
					</script>
					
					
					<div style='width:940px;height:770px; position:absolute;margin-left:10px;margin-top:75px;text-align:center' alt=''>
					<h1><u>Phone Number</u>: 805-928-1455</h1>
					<h1><u>Address</u>: 209 Town Center East<br/>Santa Maria, CA 93458</h1>
					<table style='margin:auto'>

   							<tr><td>From:&nbsp;</td>

  						 <td><input type='text' size='25' id='fromAddress' name='from'
    					 value='Santa Maria, CA'/></td>
   
  						 <td align='right'>To: Mikado Sushi, Santa Maria<input type='hidden' size='25' id='toAddress' name='to'
   						  value='209 Town Center East Santa Maria, CA 93458' /> <input name='submit' type='submit' value='Get Directions' onclick='calcRoute()'/></td></tr>
		
  				 </table>
					<table style='margin:auto'>
					<tr>
    				<td valign='top'><h1><u>Map</u></h1><div id='map_canvas' style='margin-left:25px;width:300px; height:300px;margin-top:25px'>&nbsp;</div></td>
					<td valign='top'><h1><u>Directions</u></h1><div id='directions' style=width:300px; height:auto'>&nbsp;</div></td>
					</tr>
					</table>
				</div>";
			break;
			default:
			echo"<div style='width:940px;height:770px; position:absolute;margin-left:10px;margin-top:75px' alt=''>
					<img src='images/mainPage_09.png'/>
				</div>";
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