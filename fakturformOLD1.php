<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php

session_start();

if (isset($_SESSION['statuslogin'])){
}
else {
	$_SESSION['statuslogin'] = 1;
}

?>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
<link href="styles.css" rel="stylesheet" type="text/css">
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
</script>
  <title>Login Monitoring Expiring Date</title>
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr >
	<td style="padding-left: 0pt; text-align: center">
		<DIV align="center">
		<P><font face="Arial" color="black"><h3>FAKTUR PAJAK</h3></font></p>
		</DIV>
		<table bgcolor="#CCEEFF" style="height: 850px; margin-left: auto; margin-right: auto;" width="850px" border="1" cellspacing="0" cellpadding="0">
			<tr height="30px"> 
				<td colspan="3" style="padding-left: 14pt; font-size: 16;"><font face="arial" color="black" >
					<small>Kode dan Nomor Seri Faktur Pajak :</small><span style="padding-left:70"><input style="font-size: 12pt" type="text" name="nofaktur" id="nofaktur" size="25">
				</font></td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" style="padding-left: 14pt; font-size: 16;"><font face="arial" color="black"><small>PENGUSAHA KENA PAJAK</small></font></td>
			</tr>
			<tr height="140px"> 
				<td colspan="3">
				<table style="height: 120px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="850px">
				<tbody>
					<tr height="30">
						<td style="padding-left: 12pt; align: left; font-size: 16;" width="220px">
						<font face="arial" color="black"><small>Nama</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 16;" width="30px">
						<font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 16;" width="600px">
							<font face="arial" color="black" >
							<span style="padding-left:15"><input style="font-size: 12pt" type="text" name="namakenapajak" id="namakenapajak" size="20">
							</font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 16;" width="220px">
						<font face="arial" color="black"><small>Alamat</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 16;" width="30px">
						<font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 16;" width="600px">
							<font face="arial" color="black" >
							<span style="padding-left:15"><input style="font-size: 12pt" type="text" name="alamatkenapajak" id="alamatkenapajak" size="60">
						</font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 16;" width="220px">
						<font face="arial" color="black"><small>N.P.W.P</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 16;" width="30px">
						<font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 16;" width="600px">
							<font face="arial" color="black" >
							<span style="padding-left:15"><input style="font-size: 12pt" type="text" name="npwpkenapajak" id="npwpkenapajak" size="20">
							</font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 16;" width="220px">
							<font face="arial" color="black"><small>Tanggal Pengukuhan PKP</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 16;" width="30px">
							<font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 16;" width="600px">
							<font face="arial" color="black" >
							<span style="padding-left:15"><input style="font-size: 12pt" type="text" name="tglpkpkenapajak" id="tglpkpkenapajak" size="20">
							</font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>
			<tr height="140px"> 
				<td colspan="3">
				<table style="height: 120px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="850px">
				<tbody>
					<tr height="30">
						<td colspan="3" style="padding-left: 12pt; align: left; font-size: 16;" width="200px"><font face="arial" color="black"><small>Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</small></font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 16;" width="220px"><font face="arial" color="black"><small>Nama</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 16;" width="30px"><font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 16;" width="600px"><font face="arial" color="black" >
							<span style="padding-left:15"><input style="font-size: 12pt" type="text" name="namatrimapajak" id="namatrimapajak" size="20">
							</font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 16;" width="220px"><font face="arial" color="black"><small>Alamat</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 16;" width="30px"><font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 16;" width="600px"><font face="arial" color="black" >
							<span style="padding-left:15"><input style="font-size: 12pt" type="text" name="alamattrimapajak" id="alamattrimapajak" size="60">
							</font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 16;" width="220px"><font face="arial" color="black"><small>N.P.W.P</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 16;" width="30px"><font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 16;" width="600px"><font face="arial" color="black" >
							<span style="padding-left:15"><input style="font-size: 12pt" type="text" name="npwptrimapajak" id="npwptrimapajak" size="20">
							<span style="padding-left:50"><small>NPPKP :</small> 
							<span style="padding-left:5"><input style="font-size: 12pt" type="text" name="nppkptrimapajak" id="nppkptrimapajak" size="20">
							</span></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>		
			<tr height="40px"> 
				<td width="40" valign="middle" style="padding-left: 0pt; text-align: center" width="200px"><p><font face="arial" color="black"><small>No. urut</small></font></p>
				</td>
				<td width="450" valign="middle" style="text-align: center;">
					<DIV align="center">
					<table style="width: 200px; height: 40px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 0pt; text-align: center; font-size: 16;">
								<p><font face="arial" color="black"><small>Nama Barang Kena Pajak/ Jasa Kena Pajak</small></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
				<td width="360" valign="middle" style="text-align: center">
					<DIV align="center">
					<table style="width: 220px; height: 40px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 0pt; text-align: center; font-size: 16;">
								<p><font face="arial" color="black"><small>Harga Jual/Penggantian/Uang Muka/Terjamin (Rp)</small></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="240px" > 
				<td width="40px" valign="middle" style="padding-left: 0pt; text-align: center">
				</td>
				<td width="450px" valign="middle" style="text-align: center; padding-top: 20pt;">
					<table style="width: 400px; height: 40px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td valign="middle" style="padding-left: 0pt; text-align: center">
						<p><font face="Tahoma" color="black" ><b>
						<span style="padding-left:0"><input style="font-size: 12pt" type="text" name="namabarang" id="namabarang" size="40">
						</b></font></p>
							</td>
						</tr>
					</table>
				</td>
				<td width="360px" valign="middle" style="text-align: right; padding-top: 20pt; font-size: 16;">
					<p><font face="arial" color="black" ><b><span style="padding-right:80">
					<input style="font-size: 12pt; text-align: right" type="text" name="hargajual" id="hargajual" size="12">
					</span></b></font></p>
				</td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left; font-size: 16;" width="50%">
								<p><font face="arial" color="black"><small><strike>Harga Jual</strike>/Penggantian/<strike>Uang Muka/Terjamin</strike>**)</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right;  font-size: 16;" width="40%">
								<p><font face="arial" color="black" ><b>
								<span style="padding-left:0;"><input style="font-size: 12pt; text-align: right" type="text" name="hargaganti" id="hargaganti" size="12">
								</b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left; font-size: 16;" width="50%">
								<p><font face="arial" color="black"><small>Dikurangi Potongan Harga</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right; font-size: 16;" width="40%">
								<p><font face="arial" color="black" ><b>
								<span style="padding-left:0;"><input style="font-size: 12pt; text-align: right" type="text" name="potharga" id="potharga" size="12">
								</b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left; font-size: 16;" width="50%">
								<p><font face="arial" color="black"><small>Dikurangi Uang Muka yg telah diterima</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right" width="40%">
								<p><font face="arial" color="black" ><b>
								<span style="padding-left:0;"><input style="font-size: 12pt; text-align: right" type="text" name="uangmuka" id="uangmuka" size="12">
								</b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left; font-size: 16;" width="50%">
								<p><font face="arial" color="black"><small>Dasar Pengenaan Pajak</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right" width="50%">
								<p><font face="arial" color="black" ><b>
								<span style="padding-left:0;"><input style="font-size: 12pt; text-align: right" type="text" name="dasarkenapajak" id="dasarkenapajak" size="12">
								</b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left; font-size: 16;" width="50%">
								<p><font face="arial" color="black"><small>PPN = 10% X Dasar Pengenaan Pajak</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right" width="40%">
								<p><font face="arial" color="black" ><b>
								<span style="padding-left:0;"><input style="font-size: 12pt; text-align: right" type="text" name="ppn" id="ppn" size="12">
								</b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="180px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr height="180px">
							<td style="padding-left: 14pt; text-align: left; font-size: 16;" width="45%">
								<p><font face="arial" color="black"><small>Pajak Penjualan Atas Barang Mewah</small></font></p>
								<table style="width: 100%; height: 150px; margin-left: 0; margin-right: auto;" border="1" cellspacing="0" cellpadding="0">
									<tr height="30px">
										<td style="padding-left: 0pt; text-align: center; font-size: 16;" width="22%">
											<p><font face="arial" color="black"><small>Tarif</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 16;" width="45%">
											<p><font face="arial" color="black"><small>DPP</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 16;" width="33%">
											<font face="arial" color="black"><p><small>PPn BM</small></p></font>
										</td>
									</tr>
									<tr height="90px" valign="top">
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 16;" width="22%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p></small>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 16;" width="45%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p></small>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 16;" width="33%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p></small>
											</td>
									</tr>
									<tr height="30px">
										<td style="padding-left: 8pt; text-align: left; font-size: 16;" width="22%">
											<p><font face="arial" color="black"><small>Jumlah</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 16;" width="45%">
											<p><font face="arial" color="black" ></font></p>
										</td>
										<td style="padding-left: 8pt; text-align: left; font-size: 16;" width="33%">
										<p><font face="arial" color="black"><small>Rp.........................</small></font></p>
										</td>
									</tr>
								</table>
							</td>
							<td style="padding-left: 10pt; padding-top: 0pt; text-align: right" width="55%">
								<table style="width: 100%; height: 150px; margin-left: auto; margin-top: 30; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
									<tr height="20px" valign="top">
										<td style="padding-left: 0pt; padding-top: 10pt; text-align: center; font-size: 16;" width="22%">
											<p><font face="arial" color="black" >
											<span style="padding-left:0;"><input style="font-size: 12pt; text-align: right" type="text" name="kota" id="kota" size="12">
											<small>, tgl</small>
											<span style="padding-left:10;"><input style="font-size: 12pt; text-align: right" type="text" name="tglttd" id="tglttd" size="18">
										</td>
									</tr>
									<tr height="140px" valign="bottom">
										<td style="padding-left: 0pt; text-align: center; font-size: 16;" width="22%">
											<p style ="line-height:10%"><font face="arial" color="black" >
											<span style="padding-left:0; line-height:10%;"><small>Nama :</small><input style="font-size: 12pt; text-align: right" type="text" name="namattd" id="namattd" size="20">
											</font></p>
											<p><font face="arial" color="black" >
											<span style="padding-left:0;"><small>Jabatan :</small><input style="font-size: 12pt; text-align: right" type="text" name="jabatan" id="jabatan" size="20">
											</font></p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr height="30px">
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<br>
<table style="text-align: right; margin-left: auto; margin-right: auto;" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr height="100px">
		<td style="padding-left: auto; padding-top: auto; text-align: center;">
			<!--div class="buttonwrapper">
			<a  class="ovalbutton" href="#" id="edit" name="edit" onclick="submitformbatas();"><span>Edit</span></a> <a id="cetak" name="cetak" class="ovalbutton" href="#" style="margin-left: 6px"><span>Cetak</span></a>
			</div--><font face="arial" color="black" >
<a class="large button orange">Edit</a><span style="padding-left:10"><a class="large button green">Update</a><span style="padding-left:10"><a href="#" class="button blue bigrounded">Cetak</a> </font>
			
		</td>
	</tr>
</table>
</body>
</html>
<?php
//echo $_SESSION['statuslogin'];
	$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
    //$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
	//session_destroy();
?>

