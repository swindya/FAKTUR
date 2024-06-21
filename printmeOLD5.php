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
  <title>Login Monitoring Expiring Date</title>
</head>
<body>

<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr >
	<td style="padding-left: 0pt; text-align: center; font-size: 16;">
		<P><font face="Arial" color="black" ><b>FAKTUR PAJAK</b></font></p>
		<table style="height: 850px; margin-left: auto; margin-right: auto;" width="850px" border="1" cellspacing="0" cellpadding="0">
			<tr height="30px"> 
				<td colspan="3" style="padding-left: 14pt; font-size: 17"><font face="arial" color="black"><small>Kode dan Nomor Seri Faktur Pajak :</small></font></td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" style="padding-left: 14pt; font-size: 17"><font face="arial" color="black"><small>PENGUSAHA KENA PAJAK</small></font></td>
			</tr>
			<tr height="150px"> 
				<td colspan="3">
				<table style="height: 120px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="850px">
				<tbody>
					<tr height="30">
						<td style="padding-left: 12pt; align: left; font-size: 17" width="220px">
						<font face="arial" color="black"><small>Nama</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 17;" width="30px">
						<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 17;" width="600px">
						<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 17;" width="220px">
						<font face="arial" color="black"><small>Alamat</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 17;" width="30px">
						<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 17;" width="600px">
						<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 17;" width="220px">
						<font face="arial" color="black"><small>N.P.W.P</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 17;" width="30px">
						<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: 10pt; font-size: 17;" width="600px">
						<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 17;" width="220px">
						<font face="arial" color="black"><small>Tanggal Pengukuhan PKP</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 17;" width="30px">
						<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 17;" width="600px">
						<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>
			<tr height="150px"> 
				<td colspan="3">
				<table style="height: 120px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="850px">
				<tbody>
					<tr height="30">
						<td colspan="3" style="padding-left: 12pt; align: left; font-size: 17;" width="200px"><font face="arial" color="black"><small>Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 17;" width="200px"><font face="arial" color="black"><small>Nama</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 17;" width="30px"><font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 17;" width="670px"><font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 17;" width="200px"><font face="arial" color="black"><small>Alamat</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 17;" width="30px"><font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 17;" width="670px"><font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="30">
						<td style="padding-left: 12pt; font-size: 17;" width="200px"><font face="arial" color="black" ><small>N.P.W.P</small></font>
						</td>
						<td style="padding-left: 12pt; font-size: 17;" width="30px"><font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: 10pt; font-size: 17;" width="670px"><font face="arial" color="black" ><small>23.3443.2343.23.0400</small><span style="padding-left:230"><small>NPPKP : 35.090.734.2.783.9273</small></span></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>		
			<tr height="40px"> 
				<td width="40" valign="middle" style="padding-left: 0pt; text-align: center; font-size: 17;" width="200px"><p><font face="arial" color="black"><small>No. urut</small></font></p>
				</td>
				<td width="450" valign="middle" style="text-align: center;">
					<DIV align="center">
					<table style="width: 200px; height: 40px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 0pt; text-align: center; font-size: 17;">
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
							<td style="padding-left: 0pt; text-align: center; font-size: 17;">
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
				<td width="480px" valign="middle" style="text-align: center; padding-top: 20pt;">
					<table style="width: 440px; height: 90px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td valign="middle" style="text-align: center; font-size: 17;">
								<p><font face="Tahoma" color="black" ><b>
								<span style="padding-left:0"><small>SAFEEKEEPING FEE BULAN OKTOBER 2014</small>
								</b></font></p>
							</td>
						</tr>
					</table>				
				</td>
				<td width="380px" valign="middle" style="text-align: right; padding-top: 20pt; font-size: 17;">
					<p><font face="arial" color="black" ><b><span style="padding-right:80"><small>36.455.567,-</small></span></b></font></p>
				</td>
			</tr>
			<tr height="30px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left; font-size: 17;" width="50%">
								<p><font face="arial" color="black" ><small><strike>Harga Jual</strike>/Penggantian/<strike>Uang Muka/Terjamin</strike>**)</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right; font-size: 17;" width="40%">
								<p><font face="arial" color="black" ><b><small>36.455.567,-</small></b></font></p>
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
							<td style="padding-left: 14pt; text-align: left; font-size: 17;" width="50%">
								<p><font face="arial" color="black"><small>Dikurangi Potongan Harga</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right; font-size: 17;" width="40%">
								<p><font face="arial" color="black"><b><small>2.455.567,-</small></b></font></p>
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
							<td style="padding-left: 14pt; text-align: left; font-size: 17;" width="50%">
								<p><font face="arial" color="black"><small>Dikurangi Uang Muka yg telah diterima</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right; font-size: 17;" width="40%">
								<p><font face="arial" color="black" ><b><small>3.455.567,-</small></b></font></p>
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
							<td style="padding-left: 14pt; text-align: left; font-size: 17;" width="50%">
								<p><font face="arial" color="black" ><small>Dasar Pengenaan Pajak</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right; font-size: 17;" width="50%">
								<p><font face="arial" color="black" ><b><small>1.455.567,-</small></b></font></p>
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
							<td style="padding-left: 14pt; text-align: left; font-size: 17;" width="50%">
								<p><font face="arial" color="black"><small>PPN = 10% X Dasar Pengenaan Pajak</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 60pt; text-align: right; font-size: 17;" width="40%">
								<p><font face="arial" color="black" ><b><small>3.455.567,-</small></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="122px"> 
				<td colspan="3" width="850px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 850px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr height="260px">
							<td style="padding-left: 14pt; text-align: left; font-size: 17;" width="45%">
								<p><font face="arial" color="black" ><small>Pajak Penjualan Atas Barang Mewah</small></font></p>
								<table style="width: 100%; height: 160px; margin-left: 0; margin-right: auto;" border="1" cellspacing="0" cellpadding="0">
									<tr height="30px">
										<td style="padding-left: 0pt; text-align: center; font-size: 17;" width="22%">
											<p><font face="arial" color="black" ><small>Tarif</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 17;" width="45%">
											<p><font face="arial" color="black" ><small>DPP</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 17;" width="33%">
											<font face="arial" color="black" ><p><small>PPn BM</small></p></font>
										</td>
									</tr>
									<tr height="100px" valign="top">
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 17;" width="22%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >..........%</font></p></small>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 17;" width="45%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >Rp...............................</font></p></small>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 17;" width="33%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:30%"><font face="arial" color="black" >Rp.......................</font></p></small>
											</td>
									</tr>
									<tr height="30px">
										<td style="padding-left: 8pt; text-align: left; font-size: 17;" width="22%">
											<p><font face="arial" color="black" ><small>Jumlah</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 17;" width="45%">
											<p><font face="arial" color="black" ></font></p>
										</td>
										<td style="padding-left: 8pt; text-align: left; font-size: 17;" width="33%">
										<p><font face="arial" color="black" ><small>Rp.........................</small></font></p>
										</td>
									</tr>
								</table>
							</td>
							<td style="padding-left: 10pt; padding-top: 0pt; text-align: right" width="55%">
								<table style="width: 100%; height: 180px; margin-left: auto; margin-top: 20; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
									<tr height="20px" valign="top">
										<td style="padding-left: 0pt; padding-top: 10pt; text-align: center; font-size: 17;" width="22%">
											<p><font face="arial" color="black" ><small>Jakarta, tgl 30 November 2014</small></font></p>
										</td>
									</tr>
									<tr height="160px" valign="bottom">
										<td style="padding-left: 0pt; text-align: center; font-size: 17;" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" ><small>MOAMMER NATALO AKBAR</small></font></p>
											<p><font face="arial" color="black" ><small>PGS PEMIMPIN KELOMPOK KUSTODI</small></font></p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr height="10px">
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
		</table>
		<table style="height: 30px; margin-left: auto; margin-right: auto;" width="850px" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td style="padding-left: 0pt; text-align: left; font-size: 17;">
					<p><font face="arial" color="black"><small>*) Coret yang Tidak perlu</small></font></p>
				</td>
			</tr>
		</table>
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