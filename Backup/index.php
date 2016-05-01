<html>
<head>
<title>Mikado Sushi Santa Maria</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/site_style.css"/>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>


</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table id="Table_01" width="1020" height="1021" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="7">
			<img src="images/template_01.png" width="35" height="1020" alt=""></td>
		<td colspan="7">
			<img src="images/template_02.png" width="950" height="13" alt=""></td>
		<td rowspan="7">
			<img src="images/template_03.png" width="35" height="1020" alt=""></td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/template_04.png" width="950" height="38" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/template_05.png" width="280" height="117" alt="">
			</td>
		<td class="navMenu" width="110" height="117" style="background-image:url('images/template_06.png');" alt="" onclick="window.location='index.php?page=Menu'"></td>
		<td class="navMenu" width="190" height="117" style="background-image:url('images/template_07.png');" alt="" onclick="window.location='index.php?page=Restaurant'"></td>
		<td class="navMenu" width="155" height="117" style="background-image:url('images/template_08.png');" alt="" onclick="window.location='index.php?page=Services'"></td>
		<td class="navMenu" width="215" height="117" colspan="2" style="background-image:url('images/template_09.png');" alt="" onclick="window.location='index.php?page=Contact'"></td>
	</tr>
	<tr>
		<td colspan="7">
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
			<img src="images/template_10.png" width="950" height="69" alt=""></td>
	</tr>
	<tr>
		<td colspan="7" width="950" height="735" style="background-image:url('images/template_11.png');">
			</td>
	</tr>
	<tr>
		<td colspan="7">
			<img src="images/template_12.png" width="950" height="50" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/template_13.png" width="29" height="45" alt=""></td>
		<td colspan="5">
			<img src="images/template_14.png" width="891" height="45" alt=""></td>
		<td>
			<img src="images/template_15.png" width="30" height="45" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="35" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="29" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="251" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="190" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="155" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="185" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="30" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="35" height="1" alt=""></td>
	</tr>
</table>
<script type='text/javascript'>
	

function makeMap(){//Google Maps

	
	var latlng = new google.maps.LatLng(34.951112, -120.43840399999999);
	var settings = {
		zoom: 15,
		center: latlng,
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP};

    directionsDisplay = new google.maps.DirectionsRenderer();
	var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directions"));

   
};

function calcRoute() {

	$('#directions').html('&nbsp');
    if ($('#fromAddress').val() == null) {
    	alert("Need Address to Route From");
      return;
    };
    
    var request = {
        origin: $('#fromAddress').val(),
        destination: "209 Town Center East Santa Maria, CA 93458",
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService = new google.maps.DirectionsService();
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
	  
	  	directionsDisplay.setDirections(response);
	  }
	  
    });
    
   
    directionsVisible = true;
  };
	$('.navMenu').hover(function(){
				$(this).css({'background-position':'0px 0px','cursor':'pointer'})
	
				},
				function(){
				$(this).css({'background-position':'0px -117px','cursor':'pointer'})
	
				})
	
</script>
</body>
</html>