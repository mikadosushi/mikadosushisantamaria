<head>
	<meta charset="utf-8">
	<title>Welcome to Michelin Rate Checker</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}
#title{margin:0px 0px -10px 0px;position:relative}
#title #titleText{
position:absolute;
border-bottom:1px #cfcfff solid;
padding-left:160px;
bottom:47px;
right:0px;
display:table-cell;
vertical-align:bottom;
font-size:1.9em

}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}
td{
text-align:center

}
#container{
width:960px;
margin:auto
}
#ID{
font-size:2.7em;
width:400px;
position:relative;
margin:auto;
border:5px solid #999999
}
#leftColumn{
display:inline-block;
width:470px
}
#rightColumn{
	display:inline-block;
	width:480px;
	padding-top:30px;
	vertical-align:top
}
#rightColumn h1{
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 24px;
 border:0px;
 margin:auto;
 padding:0px;
 text-align:center;
 border:1px #ababab solid

}

#rightColumn h2{
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 20px;
 margin:auto;
 padding:0px;
 display:inline

}

.A{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #ffffff;
	padding: 10px 20px;
	background: -moz-linear-gradient(
		top,
		#FF9999 0%,
		#bb5555);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#FF9999),
		to(#bb5555));
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border: 3px solid #ffffff;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);

}
.B{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #ffffff;
	padding: 10px 20px;
	background: -moz-linear-gradient(
		top,
		#faee00 0%,
		#b8a904);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#faee00),
		to(#b8a904));
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border: 3px solid #ffffff;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);

}
.C{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #ffffff;
	padding: 10px 20px;
	background: -moz-linear-gradient(
		top,
		#00fa00 0%,
		#00b800);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#00fa00),
		to(#00b800));
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border: 3px solid #ffffff;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);

}
.D{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #ffffff;
	padding: 10px 20px;
	background: -moz-linear-gradient(
		top,
		#fa00ee 0%,
		#b900aa);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#fa00ee),
		to(#b900aa));
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border: 3px solid #ffffff;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);

}
.scheduleResult{
color:#010101

}

.button {
cursor:pointer;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #ffffff;
	padding: 10px 20px;
	background-color:#0134C5;
	background: -moz-linear-gradient(
		top,
		#000dfa 0%,
		#7878ff);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#000dfa),
		to(#7878ff));
	border-radius: 2px;
	-moz-border-radius: 1px;
	-webkit-border-radius: 1px;
	border: 3px solid #ffffff;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 2px rgba(255,255,255,1);

}
.button:hover{
background: -moz-linear-gradient(
		top,
		#004dff 0%,
		#7878ff);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#004dff),
		to(#7878ff));
}
#vendorName{font-size:1.2em;margin-top:-30px;text-align:center;background:#676767;color:#FFFFFF;padding:1px 5px 2px 5px}
#vendorContainer{margin-bottom:10px}
#footer{color:#ababab;padding-top:300px;text-align:center}
</style>
</head>