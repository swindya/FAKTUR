<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
	session_start();
	if(isset($_SESSION['statuslogin'])) {
		$statuslogin = $_SESSION['statuslogin'];
	}
	
?>
<html>
<head>
<link rel="shortcut icon" href="logobnilogo.jpg" />
<link rel="stylesheet" type="text/css" href="./themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="./themes/icon.css">
<link href='multi-line-button.css' rel='stylesheet' />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="./demo/demo.css">
<script type="text/javascript">
	
    function submitformbatas(){
		var bd = document.getElementsByName("batasdekat")[0].value;
		var bj = document.getElementsByName("batasjauh")[0].value;
		if ((bd == null) || (bd == 0) || (bj == null) || (bj == 0)) {
			alert("Data anda masih ada yg kosong. Harap pilih data dengan benar");
		}
		else {
			//window.open(url,'_blank');
			//document.forms["settingbatas"].submit();
			settingku(bd, bj);
		}
    }
	function submitview(){
		var bd = document.getElementsByName("batasdekat")[0].value;
		var bj = document.getElementsByName("batasjauh")[0].value;
		var params = "batasdekat=" + bd + "&batasjauh=" + bj;
		window.open("readfileexpiresetting.php?" + params,'_blank');
		document.getElementById("txtHint").value="";
    }
    function subcarifaktur(){
		var bulku = document.getElementsByName('bulan')[0].value;
		var tahku = document.getElementsByName('tahun')[0].value;
		var perusku = document.getElementsByName('perusahaan')[1].value;
		//alert(perusku);
		//document.forms["carifaktur"].submit();
		window.open("fakturlist.php?perusahaan=" + perusku + "&bulan=" + bulku + "&tahun=" + tahku, '_blank')
    }
    function subcarinpwp(){
		var perku = document.getElementsByName("perusahaan")[0].value;
		//alert(fn.value);
		//document.forms["carinpwp"].submit();
		window.open("npwplist.php?perusahaan=" + perku, '_blank')
    }
    function clearForm(){
        //$('#cari').form('clear');
		//$("#tahun option:first").attr("selected", true)
		//alert(document.getElementById('tahun').value);
		//document.getElementById("bulan").options.length = 0;
		//document.getElementById('tahun').reset();
		$('#cari')[0].selectedIndex = 0;
    }
	function resetForm() {
		var tahunmu = document.getElementsByName("tahun")[0].value;
		var bulanmu = document.getElementsByName("bulan")[0].value;
		var tah = eval(document.cari.tahun.value);
        var popup_message = "You selected: " + document.getElementById("tahunn").value;
        alert(popup_message);
		//alert(document.getElementById("tahun")[0].value);
		//alert(document.cari.tahun[0].value);
		//alert(tahunmu);
		//alert(bulanmu + "bulan");
		//alert(document.getElementById("tahun"));
		document.getElementsByName("tahun")[1].value = 0;
		document.getElementsByName("bulan")[1] = 0;
	}
	function checkIt()
	{
		if (document.upload.fileku[0].value=="" || document.upload.fileku[0].value.length<4 || 
		document.upload.fileku[1].value=="" || document.upload.fileku[1].value.length<4 || 
		document.upload.fileku[2].value=="" || document.upload.fileku[2].value.length<4)
		{
			alert("Masukkan nama file dengan benar");
			//document.form1.fileku.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
	function settingku(bd, bj) {
		var params = "batasdekat=" + bd + "&batasjauh=" + bj;
		//if (str=="") {
		//	document.getElementById("txtHint").innerHTML="";
		//	return;
		//} 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","updatesetting.php?" + params,true);
		xmlhttp.send(params);
	}
	function CheckIt() {
		if ((document.upload.fileku.value=="") || (document.upload.fileku.value.length < 4))
		{
			alert("Masukkan nama file dengan benar");
			//document.form1.fileku.focus();
			return false;
		}
		else
		{
			return true;
			//var params = "namafile=" + document.getElementsByName("fileku")[0].value;;
			//window.open("uploadfile.php?" + params,'_blank');
		}
	}
//document.getElementById("batasdekat").onchange = function() {
//alert("OKE");
//   setActiveStyleSheet(this.value);
//  alert(this.value)
//   return false
//};

	function combochange() {
		document.getElementById("txtHint").innerHTML="";
	}
	function logoutme() {
		destroy_session();
		//history.go(0);
		//window.location.href = "http://localhost/expirewarning/login.php";
		window.location.href = "login.php";
	}
	function destroy_session(){
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","destroy_session.php",true);
		xmlhttp.send();
	}
		
    </script>
<style>

* {
    margin: 0;
    padding: 0;
  	-moz-box-sizing: border-box;
		-o-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	body {
		width: 100%;
		height: 100%;
		font-family: "helvetica neue", helvetica, arial, sans-serif;
		font-size: 13px;
		text-align: center;
		//background: #333 url('http://subtlepatterns.subtlepatterns.netdna-cdn.com/patterns/low_contrast_linen.png');
	}

	ul {
		margin: 30px auto;
		text-align: center;
	}

	li {
		list-style: none;
		position: relative;
		display: inline-block;
		width: 100px;
		height: 100px;
	}

	@-moz-keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	@-webkit-keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	@-o-keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	@keyframes rotate {
		0% {transform: rotate(0deg);}
		100% {transform: rotate(-360deg);}
	}

	.round {
		display: block;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		padding-top: 30px;		
		text-decoration: none;		
		text-align: center;
		font-size: 25px;		
		text-shadow: 0 1px 0 rgba(255,255,255,.7);
		letter-spacing: -.065em;
		font-family: "Hammersmith One", sans-serif;		
		-webkit-transition: all .25s ease-in-out;
		-o-transition: all .25s ease-in-out;
		-moz-transition: all .25s ease-in-out;
		transition: all .25s ease-in-out;
		box-shadow: 2px 2px 7px rgba(0,0,0,.2);
		border-radius: 300px;
		z-index: 1;
		border-width: 4px;
		border-style: solid;
	}

	.round:hover {
		width: 130%;
		height: 130%;
		left: -15%;
		top: -15%;
		font-size: 33px;
		padding-top: 38px;
		-webkit-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		-o-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		-moz-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		box-shadow: 5px 5px 10px rgba(0,0,0,.3);
		z-index: 2;
		border-size: 10px;
		-webkit-transform: rotate(-360deg);
		-moz-transform: rotate(-360deg);
		-o-transform: rotate(-360deg);
		transform: rotate(-360deg);
	}

	a.red {
		background-color: rgba(239,57,50,1);
		color: rgba(133,32,28,1);
		border-color: rgba(133,32,28,.2);
		font-color: rgba(252,227,1,1);;
	}

	a.red:hover {
		color: rgba(239,57,50,1);
	}

	a.green {
		background-color: rgba(1,151,171,1);
		color: rgba(0,63,171,1);
		border-color: rgba(0,63,71,.2);
	}

	a.green:hover {
		color: rgba(1,151,171,1);
	}

	a.yellow {
		background-color: rgba(252,227,1,1);
		color: rgba(153,38,0,1);
		border-color: rgba(153,38,0,.2);
	}

	a.yellow:hover {
		color: rgba(252,227,1,1);
	}

	.round span.round {
		display: block;
		opacity: 0;
		-webkit-transition: all .5s ease-in-out;
		-moz-transition: all .5s ease-in-out;
		-o-transition: all .5s ease-in-out;
		transition: all .5s ease-in-out;
		font-size: 1px;
		border: none;
		padding: 40% 20% 0 20%;
		color: #fff;
	}

	.round span:hover {
		opacity: .85;
		font-size: 16px;
		-webkit-text-shadow: 0 1px 1px rgba(0,0,0,.5);
		-moz-text-shadow: 0 1px 1px rgba(0,0,0,.5);
		-o-text-shadow: 0 1px 1px rgba(0,0,0,.5);
		text-shadow: 0 1px 1px rgba(0,0,0,.5);	
	}

	.green span {
		background: rgba(0,63,71,.7);		
	}

	.red span {
		background: rgba(133,32,28,.7);		
	}

	.yellow span {
		background: rgba(161,145,0,.7);	

	}
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
	font-color: #000000;
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
<style>
input.submit {
    width: 10em;  height: 1.8em;
}
input.uploadfile {
    width: 8em;  height: 2em;
}
</style>

<script>
function deletefaktur()
{

	var delbul = document.getElementsByName("delbulan")[0].value;
	var delth = document.getElementsByName("deltahun")[0].value;
	var jj = 1;

	if(delbul==null || delbul=="" || delbul==0 || delth==null || delth=="" || delth==0)
	{
		alert("Periksa dan isi data bulan dan tahun dengan benar !");
		jj=0;
	}
	
	if (jj==1)
	{
		var con = confirm("Apakah anda yakin akan menghapus data ?");
		if (con == true)
		{
			document.forms["delfaktur"].submit();
			return true;
		}
		else
		{
			return false;
		}
	}
}
</script>

<script>
function delfakturku()
{
	var delbul = document.getElementsByName("delbulan")[0].value;
	var delth = document.getElementsByName("deltahun")[0].value;
	var userid = document.getElementsByName("deluserid")[0].value;
	
	var r = confirm("Anda yakin akan hapus data ?");
	if (r == true) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementsByName('outletkepada')[0].innerHTML = this.responseText;
				//document.getElementsByName("satuan")[0].value = this.responseText;
				if (this.responseText==1)
				{
					alert("Data sudah dihapus.");
				}
				//return this.responseText;
				location.reload();
            }
        };
		var strku = "deldatafaktur.php?deluserid="+userid+"&delbulan="+delbul+"&deltahun="+delth;
        xmlhttp.open("GET",strku,true);
        xmlhttp.send();
    }
}
</script>


<title>Menuutama</title>
</head>
<?php
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
//---------------------------------------------
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//---------------------------------------------

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
if ($userid==0 || $userid==null)
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
else 
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
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
		$namaku = $row['nama'];
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

if ($row_cnt > 0) {

?>

<body>

<div style="text-align: center;">
<h1></h1>

<a href="login.php"></a>
<table style="width: 880px; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr height="50px">
	<td style="width: 430px; text-align: right;"><a href="javascript:void(0)" class="easyui-linkbutton" id="logout" name="logout" onclick="logoutme();">Logout</a></td>
	</tr>
  </tbody>
</table>

<table style="width: 880px; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td width="430px">
				<table bgcolor="FFD06C" style="width: 430px; text-align: left; margin-top: 0px; margin-right: auto;" border="0" cellpadding="0" cellspacing="0">
					<tbody>
					<tr height="50px" valign="top">
						<td colspan="2" style="width: 430px; text-align: left; padding-left: 0pt; padding-top: 0pt;background-color: rgb(255, 255, 255);">
							<font face="arial" color="blue" size="2"><h2>NPWP</h2></font>
						</td>
					</tr>
					<tr height="60px" valign="top">
						<td colspan="2" style="width: 430px; text-align: left; padding-left: 10pt; padding-top: 15pt; font-size: 14;">
							<font face="arial" color="black"><h2><small><em>Filter (Cari Data)</em></small></h2></font>
						</td>
					</tr>
					<form id="carinpwp" name="carinpwp" method="post" target=_blank action="npwplist.php">
					<tr height="30px">
						<td style="width: 140px; text-align: left; padding-left: 10pt;">Nama Perusahaan</td>
						<td style="width: 290px; text-align: left; padding-left: 5pt"> 
							<font face="arial" color="green" size="2">
							<select id="perusahaan" class="easyui-combobox" name="perusahaan" style="width:270px; max-width:270px" value="">
							<option value="0" selected></option>
<?php
			//Query perusahaan (ID, Nama)
			$sqla = "SELECT * FROM npwp ORDER BY nama ASC;";
			$row_cnt = 0;
			$resulta = mysqli_query($link, $sqla);
			if ($resulta) {
			/* determine number of rows result set */
				$row_cnt = $result->num_rows;
				if ($row_cnt > 0) {
					$i = 0;
					while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
						$i++;
						$idku = $row['ID'];
						$namaku = $row['nama'];
?>
						<option value="<?php print $idku;?>"><?php print $namaku;?></option>
<?php
						
					}
				}
			}
						
?>
							</select></font>
						</td>
					</tr>
					<tr style="height: 30px;">
						<td colspan="2" style="width: 140px; text-align: left; padding-left: 10pt"></td>
					<tr height="130px">
						<td  colspan="2" style="width: 430px; text-align: center; padding-top: 10pt;">
							<div style="text-align:center ;padding:0px">
								<a href="javascript:void(0)" class="button blue bigrounded" onclick="subcarinpwp();">Cari/Filter</a>
							</div>
						</td>
					</tr>
					</form>
					<tr height="20px">
						<td colspan="2" style="text-align: left;background-color: rgb(255, 255, 255);">
						</td>
					</tr>
					<tr height="110px">
						<td colspan="3">
							<br>
							<form action="uploaddatanpwp.php" method="post" id="uploadnpwp" name="uploadnpwp" target=_blank enctype="multipart/form-data">
							<table height="110px" style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="430px">
								<tbody>
								<tr height="80px" valign="top">
									<td colspan="3" style="padding-left: 10pt; text-align: left; font-size: 12;padding-top: 0pt;" width="120px">
										<font face="arial" color="black"><small><p><b><em>Upload File & Replace Data</em></b></p><br><br>
										<span style="padding-top:50px"></span>
										<input name="filenpwp" type="file" id="filenpwp" value="Pilih File" size="50">
										<span style="padding-left:45px"></span>
										<input type="submit" accept=".csv,.xls" value="Upload & Lihat Data" name="submit" class="submit">
										<!--input id="uploadBtn" type="file" class="upload" /-->
										</small></font>
									</td>
								</tr>
								</tbody>
							</table>
							</form>
						</td>
					</tr>
					<tr height="20px">
						<td colspan="2" style="text-align: left;background-color: rgb(255, 255, 255);">
						</td>
					</tr>
					<tr height="110px">
						<td colspan="3">
							<br>
							<table height="110px" style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="430px">
								<tbody>
								<tr height="80px" valign="top">
									<td colspan="3" style="padding-left: 10pt; text-align: left; font-size: 12;padding-top: 0pt;" width="120px">

									</td>
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					</tbody>
				</table>
			</td>
			<td width="20px">
			</td>
			<td width="430px">
				<table style="background-color: rgb(209, 226, 255);width: 430px; text-align: left; margin-top: 5px; margin-right: auto;" border="0" cellpadding="0" cellspacing="0">
					<tbody>
					<tr height="50px" valign="top">
						<td colspan="2" style="width: 430px; text-align: left; padding-left: 0pt; padding-top: 5pt;background-color: rgb(255, 255, 255);">
							<font face="arial" color="blue" size="2"><h2>FAKTUR PAJAK</h2></font>
						</td>
					</tr>
					<tr height="60px" valign="top">
						<td colspan="2" style="width: 430px; text-align: left; padding-left: 10pt; padding-top: 15pt; font-size: 14;">
							<font face="arial" color="black"><h2><small><em>Filter (Cari Data)</em></small></h2></font>
						</td>
					</tr>
					<form id="carifaktur" name="carifaktur" method="post" target=_blank action="fakturlist.php">
					<tr height="30px">
						<td style="width: 140px; text-align: left; padding-left: 10pt;">Nama Perusahaan</td>
						<td style="width: 290px; text-align: left; padding-left: 5pt"> 
							<font face="arial" color="green" size="2">
							<select class="easyui-combobox" name="perusahaan" style="width:270px; max-width:270px">
							<option value="0"></option>
<?php
			//Query perusahaan (ID, Nama)
			$sqla = "SELECT * FROM npwp ORDER BY nama ASC;";
			$row_cnt = 0;
			$resulta = mysqli_query($link, $sqla);
			if ($resulta) {
			/* determine number of rows result set */
				$row_cnt = $result->num_rows;
				if ($row_cnt > 0) {
					$i = 0;
					while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
						$i++;
						$idku = $row['ID'];
						$bpidku = $row['bpid'];
						$namaku = $row['nama'];
?>
							<option value="<?php print $bpidku;?>"><?php print $namaku;?></option>
<?php			
					}
				}
			}					
?>
							</select></font>
						</td>
					</tr>
					<tr height="30px">
						<td style="width: 140px; text-align: left; padding-left: 10pt">Periode</td>
						<td style="width: 290px; text-align: left; padding-left: 5pt"> 
							<font face="arial" color="green" size="2">
							<select id="bulan" class="easyui-combobox" name="bulan" style="width:120px;">
								<option value="0"></option>
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
							</font>
							<font face="arial" color="green" size="2">
							<select id="tahun" class="easyui-combobox" name="tahun" style="width:80px; max-width:80px">
								<option value="0"></option>
<?php
				$tahuniki = date("Y");	
				$tahunbiyen = $tahuniki-1;				
				$sqla = "SELECT * FROM fakturpajak ORDER BY tglinvoice DESC;";
				$row_cnt = 0;
				$resulta = mysqli_query($link, $sqla);
				if ($resulta) {
				/* determine number of rows result set */
					$row_cnt = $result->num_rows;
					if ($row_cnt > 0) {
						$i = 0;
						while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
							$i++;
							$tgltgl = $row['tglinvoice'];
							$tglexp = explode("-", $tgltgl);
//echo strtotime($tgltgl);
							//$tahunbiyen = date("Y", strtotime($tgltgl));
							$tahunbiyen = $tglexp[0];
						}
					}
					else {
						$tahunbiyen = date("Y");
					}
				}
				else {
					$tahunbiyen = $tahuniki;
				}
				for ($j=$tahunbiyen; $j <= $tahuniki; $j++) {
?>
								<option value="<?php print $j;?>"><?php print $j;?></option>
<?php
				}
?>
							</select></font>
						</td>
					</tr>
					<tr height="130px">
						<td colspan="2" style="width: 430px; text-align: left;">
							<div style="text-align:center; padding: auto">
							<a href="javascript:void(0)" class="button orange bigrounded" onclick="subcarifaktur();">Cari/Filter</a>
							<!--a href="javascript:;" class="easyui-linkbutton" onclick="resetForm()"> Clear </a-->
							</div>
						</td>
					</tr>
					</form>
					<tr height="20px">
						<td colspan="2" style="text-align: left;background-color: rgb(255, 255, 255);">
						</td>
					</tr>
					<tr height="110px">
						<td colspan="3">
							<br>
							<form action="uploaddatafaktur.php" id="uploadfaktur" name="uploadfaktur" method="post" target=_blank enctype="multipart/form-data">
							<table height="120px" style="height: 90px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="430px">
								<tbody>
								<tr height="110px" valign="top">
									<td colspan="3" style="padding-left: 10pt; text-align: left; font-size: 12;padding-top: 0pt;" width="120px">
										<font face="arial" color="black"><h2><p><em>Upload File & Add Data</em></h2></p><br>
										<span style="padding-top:50px"></span>
										<input name="fileku" type="file" id="fileku" value="Pilih File" size="50" />
										<span style="padding-left:45"></span>
										<input type="submit" accept=".csv,.xls" value="Upload & Lihat Data" name="submit" class="submit">
										<!--input id="uploadBtn" type="file" class="upload" /-->
										</small></font>
									</td>
								</tr>
								</tbody>
							</table>
							</form>
						</td>
					</tr>
					<tr height="20px">
						<td colspan="2" style="text-align: left;background-color: rgb(255, 255, 255);">
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3">
							<br>
							<table height="30px" style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="430px">
								<tbody>
								<tr height="30px" valign="top">
									<td colspan="3" style="padding-left: 10pt; text-align: left; font-size: 12;padding-top: 0pt;" width="120px">
										<font face="arial" color="black"><h3><p><em>Hapus</em></h3></p><br>

										</small></font>
									</td>
								</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<form action="deldatafaktur.php" id="delfaktur" name="delfaktur" method="post" enctype="multipart/form-data">
					<tr height="30px">
						<td style="width: 140px; text-align: left; padding-left: 10pt">Periode</td>
						<td style="width: 290px; text-align: left; padding-left: 5pt"> 
							<input type="hidden" id="deluserid" name="deluserid" value="<?php echo $userid;?>">
							<font face="arial" color="green" size="2">
							<select id="delbulan" class="easyui-combobox" name="delbulan" style="width:120px;">
								<option value="0"></option>
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
							</font>
							<font face="arial" color="green" size="2">
							<select id="deltahun" class="easyui-combobox" name="deltahun" style="width:80px; max-width:80px">
								<option value="0"></option>
<?php
				$tahuniki = date("Y");	
				$tahunbiyen = $tahuniki-1;				
				$sqla = "SELECT * FROM fakturpajak ORDER BY tglinvoice DESC;";
				$row_cnt = 0;
				$resulta = mysqli_query($link, $sqla);
				if ($resulta) {
				/* determine number of rows result set */
					$row_cnt = $result->num_rows;
					if ($row_cnt > 0) {
						$i = 0;
						while ($row = mysqli_fetch_array ($resulta, MYSQLI_ASSOC)) {
							$i++;
							$tgltgl = $row['tglinvoice'];
							$tglexp = explode("-", $tgltgl);
//echo strtotime($tgltgl);
							//$tahunbiyen = date("Y", strtotime($tgltgl));
							$tahunbiyen = $tglexp[0];
						}
					}
					else {
						$tahunbiyen = date("Y");
					}
				}
				else {
					$tahunbiyen = $tahuniki;
				}
				for ($j=$tahunbiyen; $j <= $tahuniki; $j++) {
?>
								<option value="<?php print $j;?>"><?php print $j;?></option>
<?php
				}
?>
							</select></font>
						</td>
					</tr>
					</form>
					<tr height="60px">
						<td colspan="2" style="width: 430px; text-align: left;">
							<div style="text-align:center; padding: auto">
							<a href="" class="button rosy bigrounded" onclick="delfakturku();">Hapus</a>
							<!--a href="" class="button rosy bigrounded" onclick="delfaktur(); return false;">Hapus</a-->
							</div>
						</td>
					</tr>
					
					</tbody>
				</table>
			</td>
		</tr>
		</tbody>
	</table>


<big style="font-weight: bold; font-family: Arial;">
</big><big style="font-weight: bold; font-family: Arial;"><small><span
 style="font-weight: bold;"></span></small></big>
</div>


<?php
}
	//$sql = "DELETE FROM userlog;";
	$sql = "TRUNCATE userlog;";
	$resulta = mysqli_query($link, $sql);
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.

	//$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
?>

	
</body>
</html>

