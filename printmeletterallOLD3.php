<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php

session_start();

?>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
<link rel="shortcut icon" href="logobnilogo.jpg" />
<link href="styles.css" rel="stylesheet" type="text/css">
  <title>Cetak Faktur</title>
<STYLE TYPE='text/css'> P.pagebreakhere {page-break-before: always}
</STYLE>
<style type="text/css">
table {
  border-collapse: collapse;
  //border: 1px solid black;
  //border-width:1px;
}
th {
  //border: 1px solid black;
}
</style>

</head>
<body onload="window.print()">

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

$bulanku = $_POST["bulan"];
$tahunku = $_POST["tahun"];

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

$sql0 = "SELECT * FROM fakturpajak WHERE (MONTH(tglinvoice)=" . $bulanku . " AND YEAR(tglinvoice)=" . $tahunku . ");";
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
		$idme[$i] = $row['ID'];
		$idku = $idme[$i];
	}
}
$jmli = $i;
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

for($k = 1; $k <= $jmli; $k++) {

$sql1 = "SELECT * FROM fakturpajak WHERE ID=" . $idme[$k] . ";";
$jmlr1 = 0;
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
		$tglfku = $row['tglfaktur'];
		$namaku = $row['namabp'];
		$alamatku = $row['alamatbp'];
		$nofakturku = $row['nomorfaktur'];
		$bpidku = $row['bpid'];
		$secaccku = $row['securityacc'];
		$npwpidku = $row['npwpid'];
		$npwpku = $row['npwpbp'];
		$tglpkp = $row['npwpbp'];
		$nppkpku = $row['nppkp'];
		$totali = $row['total'];
		$totalku = round($totali,0);
		$feeku = $totalku * 100 / 110;
		$ppnku = round($feeku * 0.1,0);
		$totalku = number_format($totalku,0);
		$totalku = str_replace(',','.',$totalku);
		$feeku = number_format($feeku,0);
		$safekpfee = str_replace(',','.',$feeku);
		$ppnku = number_format($ppnku,0);
		$tax = str_replace(',','.',$ppnku);
		$tglinvday = date("d", strtotime($tgliku));
		$tglinvbulan = strtoupper($bulan[date("m", strtotime($tgliku))-1]);
		$tglinvtahun = date("Y", strtotime($tgliku));
		$tglfday = date("d", strtotime($tglfku));
		$tglfbulan = strtoupper($bulan[date("m", strtotime($tglfku))-1]);
		$tglftahun = date("Y", strtotime($tglfku));
		$kotattdku = $row['kotattd'];
		$namattdku = $row['namattd'];
		$jabatanku = $row['jabatanttd'];
		$tglttdku = $row['tglttd'];
	}
}
$sql11 = "SELECT * FROM npwp WHERE bpid='" . $bpidku . "';";
$jml11 = 0;
$res11 = mysqli_query($link, $sql11);
if ($res11) {
/* determine number of rows result set */
	$jml11 = $res11->num_rows;
}
if ($jml11 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res11, MYSQLI_ASSOC)) {
		$namaku = $row['nama'];
	}
}
?>

		<table style="margin-left: 0; margin-right: auto;" width="680px" border="0" cellspacing="0" cellpadding="0">
			<tr height="35px"> 
				<td style="padding-left: auto; text-align: center; font-size: 16;"><P><font face="arial" color="black" ><b>FAKTUR PAJAK</b></font></P></td>
			</tr>
		<table style="margin-left: 0; margin-right: auto; " width="680px" border="1" cellspacing="0" cellpadding="0">
			<tr height="22px" style="border: 1px solid black;"> 
				<td colspan="3" style="padding-left: 5pt; font-size: 12;"><font face="arial" color="black">Kode dan Nomor Seri Faktur Pajak :<span style="padding-left:80px"><b><?php print $nofakturku;?></b></font></td>
			</tr>
			<tr height="22px" style="border: 1px solid black;"> 
				<td colspan="3" style="padding-left: 5pt; font-size: 12;"><font face="arial" color="black">PENGUSAHA KENA PAJAK</font></td>
			</tr>
			<tr height="110px" style="border: 1px solid black;"> 
				<td colspan="3" style="">
				<table style="height: 88px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="680px">
				<tbody>
					<tr height="22">
						<td style="padding-left: 5pt; align: left; font-size: 12" width="160px">
							<font face="arial" color="black">Nama</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="20px">
							<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="500px">
							<font face="arial" color="black">PT BANK NEGARA INDONESIA (PERSERO) TBK</font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 12;" width="160px">
							<font face="arial" color="black">Alamat</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="20px">
							<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="500px">
							<font face="arial" color="black">Jl. Jend Sudirman Kav. 1</font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 12;" width="160px">
							<font face="arial" color="black">N.P.W.P</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="20px">
							<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="500px">
							<font face="arial" color="black">01.001.606.1.093.000</font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 12;" width="160px">
							<font face="arial" color="black">Tanggal Pengukuhan PKP</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="20px">
							<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="500px">
							<font face="arial" color="black">29 Agustus 1996</font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>
			<tr height="110px" style="border: 1px solid black;"> 
				<td colspan="3" style="">
				<table style="height: 88px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="680px">
				<tbody>
					<tr height="22">
						<td colspan="3" style="padding-left: 5pt; align: left; font-size: 12;">
							<font face="arial" color="black">Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 12;" width="160px">
							<font face="arial" color="black">Nama</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="20px">
							<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="500px">
							<font face="arial" color="black"><?php print $namaku;?></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 12;" width="160px">
							<font face="arial" color="black">Alamat</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="20px">
							<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="500px">
							<font face="arial" color="black"><?php print $alamatku;?></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 12;" width="160px">
							<font face="arial" color="black" >N.P.W.P</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="20px">
							<font face="arial" color="black" >:</font>
						</td>
						<td style="padding-left: auto; font-size: 12;" width="500px">
							<font face="arial" color="black" ><?php print $npwpku;?>
							<span style="padding-left:100">NPPKP : &nbsp;&nbsp;&nbsp;<?php print $nppkpku;?></span></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>		
			<tr height="40px" style="border: 1px solid black;"> 
				<td width="40px" style="border: 1px solid black;" valign="middle" style="padding-left: auto; font-size: 12; ">
					<DIV align="center">
					<table style="width: 25px; height: 30px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: auto; text-align: center; font-size: 12;">
								<p><font face="arial" color="black">No. Urut</font></p>
							</td>
						</tr>
					</table>
					</DIV>			
				</td>
				<td width="370" style="border: 1px solid black;" valign="middle" style="text-align: center; ">
					<DIV align="center">
					<table style="width: 170px; height: 30px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: auto; text-align: center; font-size: 12; border-collapse:collapse;">
								<p><font face="arial" color="black">Nama Barang Kena Pajak/ Jasa Kena Pajak</font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
				<td width="270" style="border: 1px solid black;" valign="middle" style="text-align: center; ">
					<DIV align="center">
					<table style="width: 190px; height: 30px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: auto; text-align: center; font-size: 12;">
								<p><font face="arial" color="black">Harga Jual/Penggantian/Uang Muka/Terjamin (Rp)</font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="180px" style="border: 1px solid black;"> 
				<td width="30px" valign="middle" style="border: 1px solid black; padding-left: 0pt; text-align: center; ">
				</td>
				<td width="380px" valign="middle" style="border: 1px solid black; text-align: center; padding-top: 20pt; ">
					<table style="width: 350px; height: 80px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td valign="middle" style="text-align: center; font-size: 12;">
								<p><font face="arial" color="black" ><b>
								<span style="padding-left:auto">SAFEEKEEPING FEE BULAN <?php print $tglinvbulan . "&nbsp;" . $tglinvtahun;?>
								</b></font></p>
							</td>
						</tr>
					</table>				
				</td>
				<td width="270px" valign="middle" style="border: 1px solid black; text-align: right; padding-top: 20pt; font-size: 12; ">
					<p><font face="arial" color="black" ><b><span style="padding-right:40"><?php print $safekpfee . ',-';?></span></b></font></p>
				</td>
			</tr>
			<tr height="25px" style="border: 1px solid black;"> 
				<td colspan="3" width="680px" valign="middle" style="padding-left: 0pt; text-align: left; ">
					<DIV align="center">
					<table style="width: 680px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 12;" width="60%">
								<p><font face="arial" color="black" ><strike>Harga Jual</strike>/Penggantian/<strike>Uang Muka/Terjamin</strike>**)</font></p>
							</td>
							<td style="padding-left: auto; padding-right: 30pt; text-align: right; font-size: 12;" width="40%">
								<p><font face="arial" color="black" ><b><?php print $safekpfee . ',-';?></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px" style="border: 1px solid black;"> 
				<td colspan="3" width="680px" valign="middle" style="padding-left: 0pt; text-align: left; ">
					<DIV align="center">
					<table style="width: 680px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 12;" width="60%">
								<p><font face="arial" color="black">Dikurangi Potongan Harga</font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 12;" width="40%">
								<p><font face="arial" color="black"><b></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px" style="border: 1px solid black;"> 
				<td colspan="3" width="680px" valign="middle" style="padding-left: 0pt; text-align: left; ">
					<DIV align="center">
					<table style="width: 680px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 12;" width="60%">
								<p><font face="arial" color="black">Dikurangi Uang Muka yg telah diterima</font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 12;" width="40%">
								<p><font face="arial" color="black" ><b></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px" style="border: 1px solid black;"> 
				<td colspan="3" width="680px" valign="middle" style="padding-left: 0pt; text-align: left; ">
					<DIV align="center">
					<table style="width: 680px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 12;" width="60%">
								<p><font face="arial" color="black" >Dasar Pengenaan Pajak</font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 12;" width="40%">
								<p><font face="arial" color="black" ><b><?php print $safekpfee . ',-';?></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px" style="border: 1px solid black;"> 
				<td colspan="3" width="680px" valign="middle" style="padding-left: 0pt; text-align: left; ">
					<DIV align="center">
					<table style="width: 680px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 12;" width="60%">
								<p><font face="arial" color="black">PPN = 10% X Dasar Pengenaan Pajak</font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 12;" width="40%">
								<p><font face="arial" color="black" ><b><?php print $tax . ',-';?></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="190px" style="border: 1px solid black;"> 
				<td colspan="3" width="680px" valign="middle" style="padding-left: 0pt; text-align: left; ">
					<DIV align="center">
					<table style="width: 680px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr height="190px">
							<td style="padding-left: 10pt; text-align: left; font-size: 12;" width="45%">
								<p><font face="arial" color="black" >Pajak Penjualan Atas Barang Mewah</font></p>
								<table style="width: 100%; height: 120px; margin-left: 0; margin-right: auto; " border="1" cellspacing="0" cellpadding="0">
									<tr height="20px" style="border: 1px solid black;">
										<td style="border: 1px solid black; padding-left: 0pt; text-align: center; font-size: 12; " width="22%">
											<p><font face="arial" color="black" >Tarif</font></p>
										</td>
										<td style="border: 1px solid black; padding-left: 0pt; text-align: center; font-size: 12; " width="45%">
											<p><font face="arial" color="black" >DPP</font></p>
										</td>
										<td style="border: 1px solid black; padding-left: 0pt; text-align: center; font-size: 12; " width="33%">
											<font face="arial" color="black" ><p>PPn BM</p></font>
										</td>
									</tr>
									<tr height="80px" style="border: 1px solid black;" valign="top">
											<td style="border: 1px solid black; padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 12; " width="22%">
												<p style ="line-height:50%"><font face="arial" color="black" >............%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >............%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >............%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >............%</font></p>
											</td>
											<td style="border: 1px solid black; padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 12; " width="45%">
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................<font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
											</td>
											<td style="border: 1px solid black; padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 12; " width="33%">
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...................</font></p>
											</td>
									</tr>
									<tr height="20px" style="border: 1px solid black;">
										<td style="border: 1px solid black; padding-left: 8pt; text-align: left; font-size: 12; " width="22%">
											<p><font face="arial" color="black" >Jumlah</font></p>
										</td>
										<td style="border: 1px solid black; padding-left: 0pt; text-align: center; font-size: 12; " width="45%">
											<p><font face="arial" color="black" ></font></p>
										</td>
										<td style="border: 1px solid black; padding-left: 8pt; text-align: left; font-size: 12; " width="33%">
										<p><font face="arial" color="black" >Rp...................</font></p>
										</td>
									</tr>
								</table>
							</td>
							<td style="padding-left: 10pt; padding-top: 0pt; text-align: right" width="55%">
								<table style="width: 100%; height: 160px; margin-left: auto; margin-top: 20; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
									<tr height="20px" valign="top">
										<td style="padding-left: 0pt; padding-top: 10pt; text-align: center; font-size: 12;" width="22%">
											<p><font face="arial" color="black" ><?php print $kotattdku . " , " . $tglttdku;?></font></p>
										</td>
									</tr>
									<tr height="90px" valign="bottom">
										<td></td>
									</tr>
									<tr height="13px">
										<td style="padding-left: auto; text-align: center; font-size: 12;" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" ><?php print $namattdku;?></font></p>
										</td>
									</tr>
									<tr height="13px">
										<td style="padding-left: auto; text-align: center; font-size: 12;" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" >nama</font></p>
										</td>
									</tr>
									<tr height="13px" valign="top">
										<td style="padding-left: auto; text-align: center; font-size: 12;" width="22%">
											<p><font face="arial" color="black" ><?php print $jabatanku;?></font></p>
										</td>									
									</tr>
									<tr height="13px">
										<td style="padding-left: auto; text-align: center; font-size: 12;" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" >jabatan</font></p>
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
		<table style="height: 30px; margin-left: 0; margin-right: auto;" width="680px" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td style="padding-left: 0pt; text-align: left; font-size: 12;">
					<p><font face="arial" color="black">*) Coret yang Tidak perlu</font></p>
				</td>
			</tr>
		</table>
<P CLASS="pagebreakhere">
<?php
}
?>
</body>
</html>
<?php
//echo $_SESSION['statuslogin'];
	$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
    //$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
	//session_destroy();
?>