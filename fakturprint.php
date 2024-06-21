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
	<td style="padding-left: 0pt; text-align: center">
		<DIV align="center">
		<P><font face="Arial" color="black" size="5"><h3>FAKTUR PAJAK</h3></font></p>
		</DIV>
		<table style="height: 1050px; margin-left: auto; margin-right: auto;" width="1050px" border="1" cellspacing="0" cellpadding="0">
			<tr height="40px"> 
				<td colspan="3" style="padding-left: 14pt"><font face="arial" color="black" size="4">Kode dan Nomor Seri Faktur Pajak :</font></td>
			</tr>
			<tr height="40px"> 
				<td colspan="3" style="padding-left: 14pt"><font face="arial" color="black" size="4">PENGUSAHA KENA PAJAK</font></td>
			</tr>
			<tr height="190px"> 
				<td colspan="3">
				<table style="height: 150px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="1050px">
				<tbody>
					<tr height="35">
						<td style="padding-left: 12pt; align: left" width="270px">
						<font face="arial" color="black" size="4">Nama</font>
						</td>
						<td style="padding-left: 12pt;" width="30px">
						<font face="arial" color="black" size="4">:</font>
						</td>
						<td style="padding-left: 10pt;" width="800px">
						<font face="arial" color="black" size="4">Namaku</font>
						</td>
					</tr>
					<tr height="35">
						<td style="padding-left: 12pt;" width="270px">
						<font face="arial" color="black" size="4">Alamat</font>
						</td>
						<td style="padding-left: 12pt;" width="30px">
						<font face="arial" color="black" size="4">:</font>
						</td>
						<td style="padding-left: 10pt;" width="800px">
						<font face="arial" color="black" size="4">Namaku</font>
						</td>
					</tr>
					<tr height="35">
						<td style="padding-left: 12pt;" width="270px">
						<font face="arial" color="black" size="4">N.P.W.P</font>
						</td>
						<td style="padding-left: 12pt;" width="30px">
						<font face="arial" color="black" size="4">:</font>
						</td>
						<td style="padding-left: 10pt;" width="800px">
						<font face="arial" color="black" size="4">Namaku</font>
						</td>
					</tr>
					<tr height="35">
						<td style="padding-left: 12pt;" width="270px">
						<font face="arial" color="black" size="4">Tanggal Pengukuhan PKP</font>
						</td>
						<td style="padding-left: 12pt;" width="30px">
						<font face="arial" color="black" size="4">:</font>
						</td>
						<td style="padding-left: 10pt;" width="800px">
						<font face="arial" color="black" size="4">Namaku</font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>
			<tr height="190px"> 
				<td colspan="3">
				<table style="height: 100px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="1050px">
				<tbody>
					<tr height="35">
						<td colspan="3" style="padding-left: 12pt; align: left" width="200px"><font face="arial" color="black" size="4">Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</font>
						</td>
					</tr>
					<tr height="35">
						<td style="padding-left: 12pt;" width="200px"><font face="arial" color="black" size="4">Nama</font>
						</td>
						<td style="padding-left: 12pt;" width="30px"><font face="arial" color="black" size="4">:</font>
						</td>
						<td style="padding-left: 10pt;" width="670px"><font face="arial" color="black" size="4">Namaku</font>
						</td>
					</tr>
					<tr height="35">
						<td style="padding-left: 12pt;" width="200px"><font face="arial" color="black" size="4">Alamat</font>
						</td>
						<td style="padding-left: 12pt;" width="30px"><font face="arial" color="black" size="4">:</font>
						</td>
						<td style="padding-left: 10pt;" width="670px"><font face="arial" color="black" size="4">Namaku</font>
						</td>
					</tr>
					<tr height="35">
						<td style="padding-left: 12pt;" width="200px"><font face="arial" color="black" size="4">N.P.W.P</font>
						</td>
						<td style="padding-left: 12pt;" width="30px"><font face="arial" color="black" size="4">:</font>
						</td>
						<td style="padding-left: 10pt;" width="670px"><font face="arial" color="black" size="4">23.3443.2343.23.0400 <span style="padding-left:230"> NPPKP : 35.090.734.2.783.9273</span></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>		
			<tr height="60px"> 
				<td width="40" valign="middle" style="padding-left: 0pt; text-align: center" width="200px"><p><font face="arial" color="black" size="4">No. urut</font></p>
				</td>
				<td width="500" valign="middle" style="text-align: center;">
					<DIV align="center">
					<table style="width: 240px; height: 40px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 0pt; text-align: center">
								<p><font face="arial" color="black" size="4">Nama Barang Kena Pajak/ Jasa Kena Pajak</font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
				<td width="360" valign="middle" style="text-align: center">
					<DIV align="center">
					<table style="width: 270px; height: 40px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 0pt; text-align: center">
								<p><font face="arial" color="black" size="4">Harga Jual/Penggantian/Uang Muka/Terjamin (Rp)</font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="280px"> 
				<td width="40px" valign="top" style="padding-left: 0pt; text-align: center">
				</td>
				<td width="500px" valign="top" style="text-align: center;">
					<DIV align="center">AA
					</DIV>
				</td>
				<td width="360px" valign="top" style="text-align: center">
					<DIV align="center">
					</DIV>
				</td>
			</tr>
			<tr height="35px"> 
				<td colspan="3" width="1050px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 1050px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left" width="50%">
								<p><font face="arial" color="black" size="4"><strike>Harga Jual</strike>/Penggantian/<strike>Uang Muka/Terjamin</strike>**</font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="40%">
								<p><font face="arial" color="black" size="4"><b>36.455.567,-</b></font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="10%">
								<p><font face="arial" color="black" size="4"></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="35px"> 
				<td colspan="3" width="1050px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 1050px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left" width="50%">
								<p><font face="arial" color="black" size="4">Dikurangi Potongan Harga</font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="40%">
								<p><font face="arial" color="black" size="4"><b>2.455.567,-</b></font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="10%">
								<p><font face="arial" color="black" size="4"></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="35px"> 
				<td colspan="3" width="1050px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 1050px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left" width="50%">
								<p><font face="arial" color="black" size="4">Dikurangi Uang Muka yg telah diterima</font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="40%">
								<p><font face="arial" color="black" size="4"><b>3.455.567,-</b></font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="10%">
								<p><font face="arial" color="black" size="4"></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="35px"> 
				<td colspan="3" width="1050px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 1050px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left" width="50%">
								<p><font face="arial" color="black" size="4">Dasar Pengenaan Pajak</font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="40%">
								<p><font face="arial" color="black" size="4"><b>1.455.567,-</b></font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="10%">
								<p><font face="arial" color="black" size="4"></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="35px"> 
				<td colspan="3" width="1050px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 1050px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 14pt; text-align: left" width="50%">
								<p><font face="arial" color="black" size="4">PPN = 10% X Dasar Pengenaan Pajak</font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="40%">
								<p><font face="arial" color="black" size="4"><b>3.455.567,-</b></font></p>
							</td>
							<td style="padding-left: 0pt; text-align: right" width="10%">
								<p><font face="arial" color="black" size="4"></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="122px"> 
				<td colspan="3" width="1050px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 1050px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr height="320px">
							<td style="padding-left: 14pt; text-align: left" width="45%">
								<br>
								<p><font face="arial" color="black" size="4">Pajak Penjualan Atas Barang Mewah</font></p>
								<table style="width: 100%; height: 190px; margin-left: 0; margin-right: auto;" border="1" cellspacing="0" cellpadding="0">
									<tr height="35px">
										<td style="padding-left: 0pt; text-align: center" width="22%">
											<p><font face="arial" color="black" size="4">Tarif</font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center" width="45%">
											<p><font face="arial" color="black" size="4">DPP</font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center" width="33%">
											<font face="arial" color="black" size="4"><p>PPn BM</p></font>
										</td>
									</tr>
									<tr height="120px" valign="top">
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center" width="22%">
												<p style ="line-height:50%"><font face="arial" color="black" size="4">..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">..........%</font></p>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center" width="45%">
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp...............................</font></p>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center" width="33%">
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" size="4">Rp.......................</font></p>
											</td>
									</tr>
									<tr height="35px">
										<td style="padding-left: 8pt; text-align: left" width="22%">
											<p><font face="arial" color="black" size="4">Jumlah</font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center" width="45%">
											<p><font face="arial" color="black" size="4"></font></p>
										</td>
										<td style="padding-left: 8pt; text-align: left" width="33%">
										<p><font face="arial" color="black" size="4">Rp.........................</font></p>
										</td>
									</tr>
								</table>
							</td>
							<td style="padding-left: 10pt; padding-top: 0pt; text-align: right" width="55%">
								<table style="width: 100%; height: 200px; margin-left: auto; margin-top: 80; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
									<tr height="20px" valign="top">
										<td style="padding-left: 0pt; padding-top: 10pt; text-align: center" width="22%">
											<p><font face="arial" color="black" size="4">Jakarta, tgl 30 November 2014</font></p>
										</td>
									</tr>
									<tr height="180px" valign="bottom">
										<td style="padding-left: 0pt; text-align: center" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" size="4">MOAMMER NATALO AKBAR</font></p>
											<p><font face="arial" color="black" size="4">PGS PEMIMPIN KELOMPOK KUSTODI</font></p>
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
		<table style="height: 30px; margin-left: auto; margin-right: auto;" width="1050px" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td style="padding-left: 0pt; text-align: left">
					<p><font face="arial" color="black" size="4">*) Coret yang Tidak perlu</font></p>
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