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
@import url("styletable.css");
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
 	function updateform(form, aa) {
		//var usermu = document.getElementsByName("username")[0].value;
		var fakturidku = "fakturid" + aa;
		var alamatku = "alamat" + aa;
		var selectnku = "selectnpwp" + aa;

		var fakturidme = document.getElementsByName(fakturidku)[0].value;
		var alamatme = document.getElementsByName(alamatku)[0].value;
		var selectnpwpme = document.getElementsByName(selectnku)[0].value;
		if (fakturidme == null || fakturidme == "" || alamatme == null || alamatme == "" || selectnpwpme == null || selectnpwpme == "") {
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
		xmlhttp.open("GET","updatenpwpalamat.php?fakturid=" + fakturidme + "&alamat=" + alamatme + "&npwp=" + selectnpwpme ,true);
		xmlhttp.send();
	}
	
 	function viewform(forme, aa, bb) {
		//var usermu = document.getElementsByName("username")[0].value;
		//var formus = document.forms[forme].name;
		var formname = "formpajak" + aa;
		//alert(document.forms.forme[bb].name);
		//alert(document.forms.[0]);
		//document.forms[formname].submit();
		window.open("fakturform.php?fakturid=" + aa, "_blank");
		//document.forms.submit();
	}
 	function cetakform(forme, aa, bb) {
		//var usermu = document.getElementsByName("username")[0].value;
		//var formus = document.forms[forme].name;
		var formname = "formpajak" + aa;
		//alert(document.forms.forme[bb].name);
		//alert(document.forms.[0]);
		//document.forms[formname].submit();
		window.open("printmeletter.php?fakturid=" + aa, "_blank");
		//document.forms.submit();
	}

 	function generatenofak() {

		var nofak1aku = document.getElementsByName("nofak1a")[0].value;
		var nofak1bku = document.getElementsByName("nofak1b")[0].value;
		var nofak1tahunku = document.getElementsByName("nofak1tahun")[0].value;
		var nofak1cku = document.getElementsByName("nofak1c")[0].value;
		var nofak1jmlku = document.getElementsByName("nofak1jml")[0].value;
		var nofak2aku = document.getElementsByName("nofak2a")[0].value;
		var nofak2bku = document.getElementsByName("nofak2b")[0].value;
		var nofak2tahunku = document.getElementsByName("nofak2tahun")[0].value;
		var nofak2cku = document.getElementsByName("nofak2c")[0].value;
		var nofak2jmlku = document.getElementsByName("nofak2jml")[0].value;
		
		if (nofak1aku == null || nofak1aku == "" || nofak1bku == null || nofak1bku == "" || nofak1tahunku == null || nofak1tahunku == "" ||
			nofak1cku == null || nofak1cku == "" || nofak1jmlku == null || nofak1jmlku == "") {
			alert("Data ada yg kosong/invalid");
		}
		else {

			if (nofak2aku == null || nofak2aku == "") {
				document.getElementsByName("nofak2a")[0].value = 0;
			}
			if (nofak2bku == null || nofak2bku == "") {
				document.getElementsByName("nofak2b")[0].value = 0;
			}	
			if (nofak2tahunku == null || nofak2tahunku == "") {
				document.getElementsByName("nofak2tahun")[0].value = 0;
			}
			if (nofak2cku == null || nofak2cku == "") {
				document.getElementsByName("nofak2c")[0].value = 0;
			}
			if (nofak2jmlku == null || nofak2jmlku == "") {
				document.getElementsByName("nofak2jml")[0].value = 0;
			}
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
			xmlhttp.open("POST","gennofaktur.php" ,true);
			xmlhttp.send();
		}
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
	
$perushid = 0;
$bulan = 0;
$tahun = 0;

if (!isset($_GET["bulan"])) {
	$bulan = 0;
	$bulanstr = "";
}
else {
	$bulan = $_GET["bulan"];
	if ($bulan==0) {
		$bulanstr = " AND MONTH(tglinvoice)>0";
	}
	else
		$bulanstr = " AND MONTH(tglinvoice)=" . $bulan;
}
if (!isset($_GET["tahun"])) {
	$tahun = 0;
	$tahunstr = "";
}
else {
	$tahun = $_GET["tahun"];
	if ($tahun==0) {
		$tahunstr = " AND YEAR(tglinvoice)>0";
	}
	else
		$tahunstr = " AND YEAR(tglinvoice)=" . $tahun;
}

if (!isset($_GET["perusahaan"])) {
	$perushid = 0;
	$perusstr = " ID>0";
}
else {
	$perushid = $_GET["perusahaan"];
	if ($perushid==0 || strlen($perushid)<3)
		$perusstr = " ID>0";
	else
		$perusstr = " bpid='" . $perushid . "' ";
}

$bulanarr = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

if ($bulan==0) {
	$periodestr = " ";
}
else {
	$periodestr = $bulanarr[$bulan-1] . " ";
}
if ($tahun==0) {
	$periodestr = $periodestr;
}
else {
	$periodestr = $periodestr . $tahun;
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
$sql0 = "SELECT * FROM fakturpajak ORDER BY tglinvoice DESC;";
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
		$tgli = $row['tglinvoice'];
	}
}

$sql0 = "SELECT * FROM fakturpajak WHERE bpid='" . $perushid . "';";
$jmlr0 = 0;
$namanduk = "-";
$res0 = mysqli_query($link, $sql0);
if ($res0) {
/* determine number of rows result set */
	$jmlr0 = $res0->num_rows;
}
if ($jmlr0 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res0, MYSQLI_ASSOC)) {
		$i++;
		$namanduk = $row['namabp'];
	}
}

//$tahunoldest = date("Y-m-d", strtotime($tglinvo));
//print $tahunoldest;
$sql0 = "SELECT * FROM npwp ORDER BY nama ASC;";
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
		$npwpidmu[$i] = $row['ID'];
		$npwpmu[$i] = $row['npwp'];
		$namamu[$i] = $row['nama'];
	}
}
$jmlnpwp = $i;

$tahuniki = date("Y");
$tahuniki2 = substr($tahuniki,2);

if (date("m")==1) {
	$tahuniki2 = $tahuniki2 - 1;
}

//Cek apakah nomor faktur sudah ada/diisi

$sql00 = "SELECT * FROM fakturpajak WHERE (MONTH(tglinvoice)=" . $bulan . " AND YEAR(tglinvoice)=" . $tahun . ");";
$jmlr0 = 0;
$statusnp = 1;
$res0 = mysqli_query($link, $sql00);
if ($res0) {
/* determine number of rows result set */
	$jmlr0 = $res0->num_rows;
}

if ($jmlr0 > 0) {
	while ($row = mysqli_fetch_array ($res0, MYSQLI_ASSOC)) {
		$i++;
		$npwpnduk = $row['npwpbp'];
		$lennpwp = strlen($npwpnduk);
		if ($lennpwp < 5) {
			$statusnp = 0;
		}
	}

}
?>


<table style="text-align: center; margin-left: auto; margin-right: auto;" width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr height="70px"> 
				<td colspan="3">
					<table style="height: 50px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="1300px">
						<tbody>
							<tr height="70px" valign="top">
								<form action="gennofaktur.php" id="genfaktur" name="genfaktur" target=_blank method="POST">
								<input type="hidden" id="bulan" name="bulan" value="<?php print $bulan;?>">
								<input type="hidden" id="tahun" name="tahun" value="<?php print $tahun;?>">
								<td style="padding-left: auto; text-align: left;" width="400px">
										<p><h2>Daftar Faktur Pajak</h2></p><p><br></p>
										<p><h1>Perusahaan <span style="padding-left:10"></span>:&nbsp;&nbsp;&nbsp;<?php echo $namanduk;?></h1></p>
										<p><h1>Periode <span style="padding-left:40"></span>:&nbsp;&nbsp;&nbsp;<?php print $periodestr;?></h1></p>
									</font>
								</td>
								<td style="padding-left: auto; text-align: center; padding-top: 10" width="400px">
								<?php
									if (($statusnp == 0) && ($bulan>0) && ($tahun>0)) {
								?>
									<FONT color="black">
									<table style="height: 70px; margin-left: auto; margin-top: 15;" border="0" cellspacing="0" cellpadding="0" width="400px">
										<tr height="30" valign="middle">
											<td style="padding-left: 10; padding-top: 5; text-align: center;">
												<b>Setting Nomor Faktur Pajak</b>
											</td>
										</tr>
										<tr height="20">
											<td style="padding-left: 0; padding-top: 5; text-align: center;">Harap Diisi &nbsp;&nbsp;&nbsp;&nbsp;
												<INPUT style="text-align: center;" type="text" id="nofak1a" name="nofak1a" size="1" maxlength="3" >-
												<INPUT style="text-align: center;" type="text" id="nofak1tahun" name="nofak1tahun" size="1" maxlength="2" value="<?php print $tahuniki2;?>">
												<INPUT style="text-align: center;" type="text" id="nofak1b" name="nofak1b" size="3" maxlength="6" >
												<INPUT style="text-align: center;" type="text" id="nofak1c" name="nofak1c" size="1" maxlength="3" >&nbsp;&nbsp;&nbsp;jumlah:
												<INPUT style="text-align: center;" type="text" id="nofak1jml" name="nofak1jml" size="1" maxlength="3" >
											</td>
										</tr>
										<tr height="20">
											<td style="padding-left: 0; padding-top: 5; text-align: center;">Diisi jika perlu
												<INPUT style="text-align: center;" type="text" id="nofak2a" name="nofak2a" size="1" maxlength="3" >-
												<INPUT style="text-align: center;" type="text" id="nofak2tahun" name="nofak2tahun" size="1" maxlength="2" value="<?php print $tahuniki2;?>">
												<INPUT style="text-align: center;" type="text" id="nofak2b" name="nofak2b" size="3" maxlength="6" >
												<INPUT style="text-align: center;" type="text" id="nofak2c" name="nofak2c" size="1" maxlength="3" >&nbsp;&nbsp;&nbsp;jumlah:
												<INPUT style="text-align: center;" type="text" id="nofak2jml" name="nofak2jml" size="1" maxlength="3" >
											</td>
										</tr>
									</table>
									</FONT>
									<?php 
										} 
									?>
								</td>
								<td style="padding-left: auto; text-align: left; padding-top: 55" width="100px">
								<?php
									if (($statusnp == 0) && ($bulan>0) && ($tahun>0)) {
								?>
										<a href="javascript:void(0)" target=_blank class="button green medium" onclick="generatenofak();">Generate Nomor Faktur</a>
								<?php
									}
								?>
								</td>							
								<td style="padding-left: 10; text-align: right; padding-top: 65" width="400px">
										<p><br></p><p><FONT color="black">Status Update: &nbsp;</FONT><em><FONT color="green"><a id="statustxt" name="statustxt"><FONT></em></p>
									</font>
								</td>
								</form>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
<tr >
	<td style="padding-left: auto; text-align: center">
		<table id="gradient-style" summary="Meeting Results" style="text-align: center; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="1300px">
			<thead height="40px">
				<tr>
					<th scope="col" width="50px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NO</b></FONT></th>
					<th scope="col" width="200px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NAMA BP</b></FONT></th>
					<th scope="col" width="80px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>BPID</b></FONT></th>
					<th scope="col" width="120px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NO FAKTUR</b></FONT></th>
					<th scope="col" width="300px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>ALAMAT</b></FONT></th>
					<th scope="col" width="150px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>NPWP</b></FONT></th>
					<th scope="col" width="100px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>AMOUNT (Rp)</b></FONT></th>
					<th scope="col" width="100px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>TGL INVOICE</b></FONT></th>
					<th scope="col" width="70px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>UPDATE</b></FONT></th>
					<th scope="col" width="65px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>VIEW</b></FONT></th>
					<th scope="col" width="65px" style="padding-left: auto; text-align: center; font-size: 16;"><FONT face="arial" color="black"><b>CETAK</b></FONT></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<!--td colspan="4">Give background color to the table cells to achieve seamless transition</td-->
				</tr>
			</tfoot>
			<tbody>

<?php
$sql1 = "SELECT * FROM fakturpajak WHERE " . $perusstr . $bulanstr . $tahunstr . " ORDER BY tglinvoice DESC, namabp ASC;";
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
		$tgliku = $row['tglinvoice'];
		$namaku = $row['namabp'];
		$alamatku = $row['alamatbp'];
		$nofakturku = $row['nomorfaktur'];
		$bpidku = $row['bpid'];
		$secaccku = $row['securityacc'];
		$npwpidku = $row['npwpid'];
		$npwpku = $row['npwpbp'];
		$totalku = $row['total'];
?>
			<form action="fakturform.php" id="formpajak<?php print $idku;?>" name="formpajak<?php print $idku;?>" target=_blank method="POST">
				<input type="hidden" id="fakturid<?php print $idku;?>" name="fakturid<?php print $idku;?>" value="<?php print $idku;?>">
				<input type="hidden" id="faktid[]" name="faktid[]" value="<?php print $idku;?>">
				<tr>
					<td width="50px" style="padding-left: auto; text-align: center; font-size: 11;">
						<?php echo $i;?>
					</td>
					<td width="200px" style="padding-left: 10; text-align: left; font-size: 11;">
						<?php echo $namaku;?>
					</td>
					<td width="100px" style="padding-left: auto; text-align: center; font-size: 11;">
						<input type="text" size="8" id="bpid<?php print $idku;?>" name="bpid<?php print $idku;?>" value="<?php echo $bpidku;?>">
					</td>
					<td width="100px" style="padding-left: auto; text-align: center; font-size: 11;">
						<?php echo $nofakturku;?>
					</td>
					<td width="300px" style="padding-left: auto; text-align: left; font-size: 11;">
						<input type="text" size="45" id="idalamat<?php print $idku;?>" name="alamat<?php print $idku;?>" value="<?php echo $alamatku;?>">
					</td>
					<td width="150px" style="padding-left: auto; text-align: center; font-size: 11;">
					<select id="idselectnpwp<?php print $idku;?>" name="selectnpwp<?php print $idku;?>" width="100" style="width: 140px">
						<option value="<?php echo $npwpidku;?>" selected><?php echo $npwpku;?></option>
<?php
						for ($d = 1; $d <= $jmlnpwp; $d++) {
?>
						<option value="<?php print $npwpidmu[$d];?>"><?php print $npwpmu[$d] . " - ";?><?php print $namamu[$d];?></option>
<?php
						}
?>
					</select>
						
					</td>
					<td width="100px" style="padding-left: auto; text-align: right; font-size: 11;">
						<?php echo $totalku;?>
					</td>
					<td width="100px" style="padding-left: auto; text-align: center; font-size: 11;">
						<?php echo date("d M Y", strtotime($tgliku));?>
					</td>
					<td width="70px" style="padding-left: auto; text-align: center; font-size: 12;">
						<a class="button orange small" onclick="updateform(this.form,<?php print $idku;?>);">Update</a>
					</td>        
					<td width="65px" style="padding-left: auto; text-align: center; font-size: 12;">
						<a href="javascript:void(0)" target=_blank class="button red small" onclick="viewform(this.form,<?php print $idku;?>,<?php print $i;?>);">View</a>
					</td>        
					<td width="65px" style="padding-left: auto; text-align: center; font-size: 12;">
						<a href="javascript:void(0)" target=_blank class="button blue small" onclick="cetakform(this.form,<?php print $idku;?>,<?php print $i;?>);">Cetak</a>
					</td>
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
	



//*******************************************************************************************************
//			FUNCTIONS
//	
	
?>


</body>
</html>