<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Warning Expiring Dates</title>
<?php
session_start();
?>
<style type="text/css">
<!--
@import url("styletablenpwp.css");
-->
</style>
<link rel="shortcut icon" href="logobnilogo.jpg" />
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
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var SITE = SITE || {};
 
SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.button'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('File Chosen');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};
 
$(document).ready(function() {
  $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
});
</script>

<script>
 	function updateform(formku, aa) {
		//var usermu = document.getElementsByName("username")[0].value;
		var npwpidkuu = "npwpid" + aa;
		var namakuu = "nama" + aa;
		var bpidkuu = "bpid" + aa;
		var alamatkuu = "alamat" + aa;
		var npwpkuu = "npwp" + aa;
		var nppkpkuu = "nppkp" + aa;
		var selectbumnkuu = "selectbumn" + aa;

		var npwpidku = document.getElementsByName(npwpidkuu)[0].value;
		var namaku = document.getElementsByName(namakuu)[0].value;
		var bpidku = document.getElementsByName(bpidkuu)[0].value;
		var alamatku = document.getElementsByName(alamatkuu)[0].value;
		var npwpku = document.getElementsByName(npwpkuu)[0].value;
		var nppkpku = document.getElementsByName(nppkpkuu)[0].value;
		var selectbumnku = document.getElementsByName(selectbumnkuu)[0].value;
		if (namaku == null || namaku == "" || bpidku == null || bpidku == "" || alamatku == null || alamatku == "") {
			alert("Data ada yg kosong/invalid");
		}
		else {
			//window.open("registeruser.php",'_blank');
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				}
			}
		}			
		xmlhttp.open("GET","updatenpwpall.php?npwpid=" + npwpidku + "&nama=" + namaku + "&npwp=" + npwpku + "&alamat=" + alamatku + "&bpid=" + 
				bpidku + "&nppkp=" + nppkpku + "&statusbumn=" + selectbumnku ,true);
		xmlhttp.send();
		opener.location.reload();
		window.location.reload();
	}
	
function deletenpwp(formku, aa) {
		
	var npwpidku = "npwpid" + aa;
	var npwpidku = document.getElementsByName(npwpidku)[0].value;
	var con = confirm("Apakah anda yakin akan menghapus data ?");
	if (con ==true)
	{
			//window.open("registeruser.php",'_blank');
		if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","delnpwp.php?npwpid=" + npwpidku, true);
		xmlhttp.send();
		window.opener.location.reload();
		window.location.reload();
	}
}
</script>
<script>
function addnpwp() 
{
	window.open("addnpwpform.php", "_blank");

}
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
<style type="text/css">
.file-wrapper {
    position: relative;
    display: inline-block;
    overflow: hidden;
    cursor: pointer;
}
.file-wrapper input {
    position: absolute;
    top: 0;
    right: 0;
    filter: alpha(opacity=1);
    opacity: 0.01;
    -moz-opacity: 0.01;
    cursor: pointer;
}
.file-wrapper .button {
    color: #fff;
    background: #117300;
    padding: 4px 18px;
    margin-right: 5px;  
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    display: inline-block;
    font-weight: bold;
    cursor: pointer;
}
.file-holder{
    color: #000;
}
</style>

</head>
<body>

<?php

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

$db_hostname = 'localhost';
$db_database = 'fakturpajak';
$db_username = 'myuser';
$db_password = 'userku';

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
if (!isset($_POST["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];

if (!isset($_GET["perusahaan"])) {
	$perushid = 0;
	$perusstr = " ID>0";
}
else {
	$perushid = $_GET["perusahaan"];
	if ($perushid==0)
		$perusstr = " ID>0";
	else
		$perusstr = " ID=" . $perushid;
}

$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";

die();
	
}

#mysql_connect("localhost",$uname,$pwd);
# query the users table for name and surname 
$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$levelidku = $row['levelid'];
	}
}
 
$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']); 
		$_SESSION['statuslogin'] = 7;//session expired
?>
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
die;
	}
}

if ($row_cnt > 0) {
	$_SESSION['statuslogin'] = 0;
?>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<?php
}
else  {
	$_SESSION['statuslogin'] = 8; //user not found in database or unauthorized
?>
<meta http-equiv="refresh" content="0; url=login.php" />
<?php
}

$tahuniki = date("Y");
$sql0 = "SELECT * FROM npwp WHERE ID=" . $perushid . " ORDER BY nama ASC;";
$jmlr0 = 0;
$res0 = mysqli_query($link, $sql0);
if ($res0) {
/* determine number of rows result set */
	$jmlr0 = $res0->num_rows;
}
if ($jmlr0 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res0, MYSQLI_ASSOC)) {
		$i++;
		$namaku = $row['nama'];
	}
}

//$tahunoldest = date("Y-m-d", strtotime($tglinvo));
//print $tahunoldest;

?>


<table style="text-align: center; margin-left: auto; margin-right: auto;" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr height="60px"> 
		<td colspan="3">
			<table style="height: 70px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="1170px">
				<tbody>
					<tr height="70px" valign="top">
						<td style="padding-left: auto; text-align: left;" width="45%">
							<p><h2>Daftar NPWP</h2></p><br>
							<span style="font-size: 13"><b> Perusahaan : &nbsp;&nbsp; <em>
<?php
							if ($perushid == 0) {
								echo "-";
							}
							else {
								echo $namaku;
							}
?>
							</em></b></span><p></p>
						</td>
						<td style="padding-left: auto; text-align: left; padding-top: 50;" width="35%">
							<span style="font-size: 11"><em><FONT color="green"><a id="statustxt" name="statustxt"><FONT></em></span><p></p>
						</td>
						<td style="padding-right: auto; text-align: right; padding-top: 40;" width="20%">
							<a href="javascript:void(0)" target=_blank class="button green medium" onclick="addnpwp()";>Add</a>&nbsp;
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
					<th scope="col" width="30px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NO</b></FONT></th>
					<th scope="col" width="220px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NAMA</b></FONT></th>
					<th scope="col" width="100px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>BPID</b></FONT></th>
					<th scope="col" width="380px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>ALAMAT</b></FONT></th>
					<th scope="col" width="100px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NPWP</b></FONT></th>
					<th scope="col" width="100px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NPPKP</b></FONT></th>
					<th scope="col" width="80px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>JENIS</b></FONT></th>
					<th scope="col" width="70px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>UPDATE</b></FONT></th>
<?php
	if ($levelidku == 1) {
?>
					<th scope="col" width="70px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>DELETE</b></FONT></th>
<?php
	}
?>
					</tr>
				</thead>
				<tfoot>
					<tr>
					<!--td colspan="4">Give background color to the table cells to achieve seamless transition</td-->
					</tr>
				</tfoot>
				<tbody>

<?php
$sql1 = "SELECT * FROM npwp WHERE " . $perusstr . " ORDER BY nama ASC;";
$jmlr0 = 0;
$res1 = mysqli_query($link, $sql1);
if ($res1) {
/* determine number of rows result set */
	$jmlr1 = $res1->num_rows;
}
if ($jmlr1 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res1, MYSQLI_ASSOC)) {
		$i++;
		$idku = $row['ID'];
		$bpidku = $row['bpid'];
		$namaku = $row['nama'];
		$alamatku = $row['alamat'];
		$npwpku = $row['npwp'];
		$nppkpku = $row['nppkp'];
		$statusbumnku = $row['statusbumn'];
?>
				<form action="action_page.php" id="formpnpwp<?php echo $idku;?>" name="formnpwp<?php echo $idku;?>" method="submit">
					<input type="hidden" id="npwpid<?php print $idku;?>" name="npwpid<?php print $idku;?>" value="<?php print $idku;?>">
					<tr>
						<td style="padding-left: auto; text-align: center; font-size: 11;">
							<?php echo $i;?>
						</td>
						<td style="padding-left: auto; text-align: left; font-size: 11;">
							<INPUT type="text" id="nama<?php print $idku;?>" name="nama<?php print $idku;?>" size=29 value="<?php echo $namaku;?>">
						</td>
						<td style="padding-left: auto; text-align: left; font-size: 11;">
							<INPUT type="text" id="bpid<?php print $idku;?>" name="bpid<?php print $idku;?>" size=10 value="<?php echo $bpidku;?>">
						</td>
						<td style="padding-left: auto; text-align: left; font-size: 11;">
							<INPUT type="text" id="alamat<?php print $idku;?>" name="alamat<?php print $idku;?>" size=49 value="<?php echo $alamatku;?>">
						</td>
						<td style="padding-left: auto; text-align: left; font-size: 11;">
							<INPUT type="text" id="npwp<?php print $idku;?>" name="npwp<?php print $idku;?>" size=16 value="<?php echo $npwpku;?>">
						</td>
						<td style="padding-left: auto; text-align: left; font-size: 11;">
							<INPUT type="text" id="nppkp<?php print $idku;?>" name="nppkp<?php print $idku;?>" size=17 value="<?php echo $nppkpku;?>">
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 11;">
							<select id="selectbumn<?php print $idku;?>" name="selectbumn<?php print $idku;?>">
								<option value="0"<?php 
														if ($statusbumnku==0) {
															echo "selected";
														}
													?>>Non BUMN</option>
								<option value="1"<?php 
														if ($statusbumnku==1) {
															echo "selected";
														}
													?>>BUMN</option>
							</select>
					<?php 

						?>
						</td>
						<td style="padding-left: auto; text-align: center; font-size: 12;">
							<a class="button blue small" onclick="updateform(this.form,<?php print $idku;?>);">Update</a>
						</td>        
<?php
		if ($levelidku == 1) {
?>
						<td style="padding-left: auto; text-align: center; font-size: 12;">
							<a class="button red small" onclick="deletenpwp(this.form,<?php print $idku;?>);">Delete</a>
						</td>        
<?php
		}
?>
						</tr>
<?php
	}
}
?>
				</form>
			</tbody>
		</table>
	</td>
</tr>	
</table>
<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;



//*******************************************************************************************************
//			FUNCTIONS
//	
	
?>


</body>
</html>