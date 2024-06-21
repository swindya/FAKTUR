<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Warning Expiring Dates</title>
<style type="text/css">
<!--
@import url("styletable.css");
-->
</style>
<link rel="stylesheet" type="text/css" href="./themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="./themes/icon.css">
<link rel="stylesheet" type="text/css" href="./demo/demo.css">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.easyui.min.js"></script>
<script src="jquery-1.3.2.min.js" language="javascript" type="text/javascript"></script>
<script src="jquery-blink.js" language="javscript" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function()
{
	$('.blink').blink();
});
</script>
<style>
#dark{
	background-color:#333;
	border:1px solid #000;
	padding:10px;
	margin-top:20px;}
	
#light{
	background-color:#FFF;
	border:1px solid #dedede;
	padding:10px;
	margin-top:20px;}	
	
li{ 
list-style:none;
	padding-top:10px;
	padding-bottom:10px;}	

.button, .button:visited {
	background: #222 url(overlay.png) repeat-x; 
	display: inline-block; 
	padding: 5px 10px 6px; 
	color: #fff; 
	text-decoration: none;
	-moz-border-radius: 6px; 
	-webkit-border-radius: 6px;
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
	border-bottom: 1px solid rgba(0,0,0,0.25);
	position: relative;
	cursor: pointer
}
 
	.button:hover							{ background-color: #111; color: #fff; }
	.button:active							{ top: 1px; }
	.small.button, .small.button:visited 			{ font-size: 11px}
	.button, .button:visited,
	.medium.button, .medium.button:visited 		{ font-size: 13px; 
												  font-weight: bold; 
												  line-height: 1; 
												  text-shadow: 0 -1px 1px rgba(0,0,0,0.25); 
												  }
												  
	.large.button, .large.button:visited 			{ font-size: 14px; 
													  padding: 8px 14px 9px; }
													  
	.super.button, .super.button:visited 			{ font-size: 34px; 
													  padding: 8px 14px 9px; }
	
	.pink.button, .magenta.button:visited		{ background-color: #e22092; }
	.pink.button:hover							{ background-color: #c81e82; }
	.green.button, .green.button:visited		{ background-color: #91bd09; }
	.green.button:hover						    { background-color: #749a02; }
	.red.button, .red.button:visited			{ background-color: #e62727; }
	.red.button:hover							{ background-color: #cf2525; }
	.orange.button, .orange.button:visited		{ background-color: #ff5c00; }
	.orange.button:hover						{ background-color: #d45500; }
	.blue.button, .blue.button:visited		    { background-color: #2981e4; }
	.blue.button:hover							{ background-color: #2575cf; }
	.yellow.button, .yellow.button:visited		{ background-color: #ffb515; }
	.yellow.button:hover						{ background-color: #fc9200; }
</style>
<style type="text/css">

/* button 
---------------------------------------------- */
.button {
	display: inline-block;
	zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
	*display: inline;
	vertical-align: baseline;
	margin: 0 2px;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
	text-decoration: none;
}
.button:active {
	position: relative;
	top: 1px;
}

.bigrounded {
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;
	border-radius: 2em;
}
.medium {
	font-size: 12px;
	padding: .4em 1.5em .42em;
}
.small {
	font-size: 11px;
	padding: .2em 1em .275em;
}

/* color styles 
---------------------------------------------- */

/* black */
.black {
	color: #d7d7d7;
	border: solid 1px #333;
	background: #333;
	background: -webkit-gradient(linear, left top, left bottom, from(#666), to(#000));
	background: -moz-linear-gradient(top,  #666,  #000);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#666666', endColorstr='#000000');
}
.black:hover {
	background: #000;
	background: -webkit-gradient(linear, left top, left bottom, from(#444), to(#000));
	background: -moz-linear-gradient(top,  #444,  #000);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#444444', endColorstr='#000000');
}
.black:active {
	color: #666;
	background: -webkit-gradient(linear, left top, left bottom, from(#000), to(#444));
	background: -moz-linear-gradient(top,  #000,  #444);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#666666');
}

/* gray */
.gray {
	color: #e9e9e9;
	border: solid 1px #555;
	background: #6e6e6e;
	background: -webkit-gradient(linear, left top, left bottom, from(#888), to(#575757));
	background: -moz-linear-gradient(top,  #888,  #575757);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#888888', endColorstr='#575757');
}
.gray:hover {
	background: #616161;
	background: -webkit-gradient(linear, left top, left bottom, from(#757575), to(#4b4b4b));
	background: -moz-linear-gradient(top,  #757575,  #4b4b4b);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#757575', endColorstr='#4b4b4b');
}
.gray:active {
	color: #afafaf;
	background: -webkit-gradient(linear, left top, left bottom, from(#575757), to(#888));
	background: -moz-linear-gradient(top,  #575757,  #888);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#575757', endColorstr='#888888');
}

/* white */
.white {
	color: #606060;
	border: solid 1px #b7b7b7;
	background: #fff;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));
	background: -moz-linear-gradient(top,  #fff,  #ededed);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');
}
.white:hover {
	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));
	background: -moz-linear-gradient(top,  #fff,  #dcdcdc);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');
}
.white:active {
	color: #999;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));
	background: -moz-linear-gradient(top,  #ededed,  #fff);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');
}

/* orange */
.orange {
	color: #fef4e9;
	border: solid 1px #da7c0c;
	background: #f78d1d;
	background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
	background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
.orange:hover {
	background: #f47c20;
	background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
	background: -moz-linear-gradient(top,  #f88e11,  #f06015);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
}
.orange:active {
	color: #fcd3a5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f47a20), to(#faa51a));
	background: -moz-linear-gradient(top,  #f47a20,  #faa51a);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f47a20', endColorstr='#faa51a');
}

/* red */
.red {
	color: #faddde;
	border: solid 1px #980c10;
	background: #d81b21;
	background: -webkit-gradient(linear, left top, left bottom, from(#ed1c24), to(#aa1317));
	background: -moz-linear-gradient(top,  #ed1c24,  #aa1317);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ed1c24', endColorstr='#aa1317');
}
.red:hover {
	background: #b61318;
	background: -webkit-gradient(linear, left top, left bottom, from(#c9151b), to(#a11115));
	background: -moz-linear-gradient(top,  #c9151b,  #a11115);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#c9151b', endColorstr='#a11115');
}
.red:active {
	color: #de898c;
	background: -webkit-gradient(linear, left top, left bottom, from(#aa1317), to(#ed1c24));
	background: -moz-linear-gradient(top,  #aa1317,  #ed1c24);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#aa1317', endColorstr='#ed1c24');
}

/* blue */
.blue {
	color: #d9eef7;
	border: solid 1px #0076a3;
	background: #0095cd;
	background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
	background: -moz-linear-gradient(top,  #00adee,  #0078a5);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
}
.blue:hover {
	background: #007ead;
	background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
	background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
}
.blue:active {
	color: #80bed6;
	background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
	background: -moz-linear-gradient(top,  #0078a5,  #00adee);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
}

/* rosy */
.rosy {
	color: #fae7e9;
	border: solid 1px #b73948;
	background: #da5867;
	background: -webkit-gradient(linear, left top, left bottom, from(#f16c7c), to(#bf404f));
	background: -moz-linear-gradient(top,  #f16c7c,  #bf404f);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f16c7c', endColorstr='#bf404f');
}
.rosy:hover {
	background: #ba4b58;
	background: -webkit-gradient(linear, left top, left bottom, from(#cf5d6a), to(#a53845));
	background: -moz-linear-gradient(top,  #cf5d6a,  #a53845);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#cf5d6a', endColorstr='#a53845');
}
.rosy:active {
	color: #dca4ab;
	background: -webkit-gradient(linear, left top, left bottom, from(#bf404f), to(#f16c7c));
	background: -moz-linear-gradient(top,  #bf404f,  #f16c7c);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#bf404f', endColorstr='#f16c7c');
}

/* green */
.green {
	color: #e8f0de;
	border: solid 1px #538312;
	background: #64991e;
	background: -webkit-gradient(linear, left top, left bottom, from(#7db72f), to(#4e7d0e));
	background: -moz-linear-gradient(top,  #7db72f,  #4e7d0e);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#7db72f', endColorstr='#4e7d0e');
}
.green:hover {
	background: #538018;
	background: -webkit-gradient(linear, left top, left bottom, from(#6b9d28), to(#436b0c));
	background: -moz-linear-gradient(top,  #6b9d28,  #436b0c);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#6b9d28', endColorstr='#436b0c');
}
.green:active {
	color: #a9c08c;
	background: -webkit-gradient(linear, left top, left bottom, from(#4e7d0e), to(#7db72f));
	background: -moz-linear-gradient(top,  #4e7d0e,  #7db72f);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#4e7d0e', endColorstr='#7db72f');
}

/* pink */
.pink {
	color: #feeef5;
	border: solid 1px #d2729e;
	background: #f895c2;
	background: -webkit-gradient(linear, left top, left bottom, from(#feb1d3), to(#f171ab));
	background: -moz-linear-gradient(top,  #feb1d3,  #f171ab);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#feb1d3', endColorstr='#f171ab');
}
.pink:hover {
	background: #d57ea5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f4aacb), to(#e86ca4));
	background: -moz-linear-gradient(top,  #f4aacb,  #e86ca4);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4aacb', endColorstr='#e86ca4');
}
.pink:active {
	color: #f3c3d9;
	background: -webkit-gradient(linear, left top, left bottom, from(#f171ab), to(#feb1d3));
	background: -moz-linear-gradient(top,  #f171ab,  #feb1d3);
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f171ab', endColorstr='#feb1d3');
}
</style>
</head>
<body>
<?php
//session_start();

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

$db_hostname = 'localhost';
$db_database = 'warnexpire';
$db_username = 'myuser';
$db_password = 'userku';
$uname = "myuser";
$pwd = "userku";
//if (!isset($_POST["username"])) {
//	$uname=$_SESSION["username"];
//}
//else
//	$uname=$_POST["username"];
//if (!isset($_POST["passwd"])) {
//	$pwd=$_SESSION["passwd"];
//}
//else
//	$pwd=$_POST["passwd"];
//
?>

<table style="text-align: center; margin-left: auto; margin-right: auto;" width="100%" border="1" cellspacing="0" cellpadding="0">
			<tr height="130px"> 
				<td colspan="3">
				<br>
				<table style="height: 95px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="320px">
				<tbody>
					<tr height="25">
						<td style="padding-left: auto; align: left; font-size: 16;" width="120px">
						<font face="arial" color="black"><small>Nama BP</small></font>
						</td>
						<td style="padding-left: auto; font-size: 16;" width="30px">
						<font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 16;" width="150px">
							<font face="arial" color="black" >
							<span style="padding-left:auto">
							<select id="bpid" name="bpid" style="width:150px; max-width:150px" OnChange="combochange();">
								<option value="0">0</option>
							</select>
						</td>
					</tr>
					<tr height="25">
						<td style="padding-left: auto; font-size: 16;" width="120px">
						<font face="arial" color="black"><small>Bulan-Tahun Invoice</small></font>
						</td>
						<td style="padding-left: auto; font-size: 16;" width="30px">
						<font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 16;" width="150px">
							<font face="arial" color="black" >
							<span style="padding-left:auto">
							<select id="bulan" name="bulan" style="width:90px;" OnChange="combochange();">
								<option value="0"></option>
								<option value="1">Januari</option>
								<option value="2">Februari</option>
							</select>
							<select id="tahun" name="tahun" style="width:60px;" OnChange="combochange();">
								<option value="0"></option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
							</select>
							</span>
							</font>
						</td>
					</tr>
					<tr height="45">
						<td colspan="3" style="padding-left: auto; text-align: center; font-size: 16;" width="120px">
						<font face="arial" color="black"><small>
							<a href="#" class="button orange medium">Cari/Filter</a>
						</small></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>
<tr >
	<td style="padding-left: auto; text-align: center">
		<table id="gradient-style" summary="Meeting Results" border="0" style="text-align: center; margin-left: auto; margin-right: auto;">
			<thead height="40px">
				<tr>
					<th scope="col" width="5%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NO</b></FONT></th>
					<th scope="col" width="22%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NAMA BP</b></FONT></th>
					<th scope="col" width="10%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>ID</b></FONT></th>
					<th scope="col" width="12%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>SECURITY ACC</b></FONT></th>
					<th scope="col" width="12%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NPWP</b></FONT></th>
					<th scope="col" width="10%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>AMOUNT (Rp)</b></FONT></th>
					<th scope="col" width="10%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>TGL INVOICE</b></FONT></th>
					<th scope="col" width="10%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>VIEW</b></FONT></th>
					<th scope="col" width="10%" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>CETAK</b></FONT></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<!--td colspan="4">Give background color to the table cells to achieve seamless transition</td-->
				</tr>
			</tfoot>
			<tbody>
				<form action="action_page.php" id="data1" name="data1">
				<tr>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						1
					</td>
					<td style="padding-left: 10; text-align: left; font-size: 11;">
						BAPERTARUM
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						BP12553468
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						11000647009
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						2721728064000
					</td>
					<td style="padding-left: auto; text-align: right; font-size: 11;">
						3.445.000
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						31 Okt 2014
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 12;">
						<a href="#" class="button red small">View</a>
					</td>        
					<td style="padding-left: auto; text-align: center; font-size: 12;">
						<a href="#" class="button blue small">Cetak</a>
					</td>
				</tr>
				</form>
				<form action="action_page.php" id="data2" name="data2">
				<tr>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						2
					</td>
					<td style="padding-left: 10; text-align: left; font-size: 11;">
						BPJS KETENAGAKERJAAN
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						BP12553468
						</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						11000647009
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						2721728064000
					</td>
					<td style="padding-left: auto; text-align: right; font-size: 11;">
						3.445.000
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						31 Okt 2014
					</td>
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						<a href="#" class="button gray small">View</a>
					</td>        
					<td style="padding-left: auto; text-align: center; font-size: 11;">
						<a href="#" class="button blue small">Cetak</a>
					</td>
				</tr>
				</form>
			</tbody>
		</table>
	</td>
</tr>	
</table>
<?php



//*******************************************************************************************************
//			FUNCTIONS
//*******************************************************************************************************

function replacecurdata($countk, $link, $row_cnt) {
	if ($row_cnt > 0) {
		$sql0 = "DELETE FROM curdata;";
		$result0 = mysqli_query($link, $sql0);
		$sql0 = "DELETE FROM curdatadate;";
		$result0 = mysqli_query($link, $sql0);	}
}


?>


</body>
</html>