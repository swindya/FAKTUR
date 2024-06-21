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

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr >
	<td style="padding-left: auto; text-align: left;" colspan="3">
		<table style="margin-left: 0; margin-right: auto;" width="640px" border="0" cellspacing="0" cellpadding="0">
			<tr height="35px"> 
				<td style="padding-left: auto; text-align: center; font-size: 16;"><P><font face="Arial" color="black" ><b>FAKTUR PAJAK</b></font></P></td>
			</tr>
		<table style="margin-left: 0; margin-right: auto; border:1px solid black;" width="640px" border="1" cellspacing="0" cellpadding="0">
			<tr height="22px"> 
				<td colspan="3" style="padding-left: 5pt; font-size: 13"><font face="arial" color="black"><small>Kode dan Nomor Seri Faktur Pajak :</small></font></td>
			</tr>
			<tr height="22px"> 
				<td colspan="3" style="padding-left: 5pt; font-size: 13"><font face="arial" color="black"><small>PENGUSAHA KENA PAJAK</small></font></td>
			</tr>
			<tr height="110px"> 
				<td colspan="3">
				<table style="height: 88px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="640px">
				<tbody>
					<tr height="22">
						<td style="padding-left: 5pt; align: left; font-size: 13" width="140px">
							<font face="arial" color="black"><small>Nama</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="20px">
							<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="480px">
							<font face="arial" color="black"><small>PT BANK NEGARA INDONESIA (PERSERO) TBK</small></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 13;" width="140px">
							<font face="arial" color="black"><small>Alamat</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="20px">
							<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="480px">
							<font face="arial" color="black"><small>Jl. Jend Sudirman Kav. 1</small></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 13;" width="140px">
							<font face="arial" color="black"><small>N.P.W.P</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="20px">
							<font face="arial" color="black">:</font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="480px">
							<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 13;" width="140px">
							<font face="arial" color="black"><small>Tanggal Pengukuhan PKP</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="20px">
							<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="480px">
							<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>
			<tr height="110px"> 
				<td colspan="3">
				<table style="height: 88px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="640px">
				<tbody>
					<tr height="22">
						<td colspan="3" style="padding-left: 5pt; align: left; font-size: 13;">
							<font face="arial" color="black"><small>Pembeli Barang Kena Pajak/Penerima Jasa Kena Pajak</small></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 13;" width="143px">
							<font face="arial" color="black"><small>Nama</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="20px">
							<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="480px">
							<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 13;" width="143px">
							<font face="arial" color="black"><small>Alamat</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="20px">
							<font face="arial" color="black"><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="480px">
							<font face="arial" color="black"><small>Namaku</small></font>
						</td>
					</tr>
					<tr height="22">
						<td style="padding-left: 5pt; font-size: 13;" width="143px">
							<font face="arial" color="black" ><small>N.P.W.P</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="20px">
							<font face="arial" color="black" ><small>:</small></font>
						</td>
						<td style="padding-left: auto; font-size: 13;" width="480px">
							<font face="arial" color="black" ><small>23.3443.2343.23.0400</small>
							<span style="padding-left:170"><small>NPPKP : 35.090.734.2.783.9273</small></span></font>
						</td>
					</tr>
				</tbody>
				</table>
				</td>
			</tr>		
			<tr height="30px"> 
				<td width="30px" valign="middle" style="padding-left: auto; text-align: center; font-size: 13;">
					<DIV align="center">
					<table style="width: 25px; height: 30px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: auto; text-align: center; font-size: 13;">
								<p><font face="arial" color="black"><small>No. Urut</small></font></p>
							</td>
						</tr>
					</table>
					</DIV>			
				</td>
				<td width="350" valign="middle" style="text-align: center;">
					<DIV align="center">
					<table style="width: 140px; height: 30px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: auto; text-align: center; font-size: 13;">
								<p><font face="arial" color="black"><small>Nama Barang Kena Pajak/ Jasa Kena Pajak</small></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
				<td width="260" valign="middle" style="text-align: center">
					<DIV align="center">
					<table style="width: 180px; height: 30px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: auto; text-align: center; font-size: 13;">
								<p><font face="arial" color="black"><small>Harga Jual/Penggantian/Uang Muka/Terjamin (Rp)</small></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="180px" > 
				<td width="30px" valign="middle" style="padding-left: 0pt; text-align: center">
				</td>
				<td width="350px" valign="middle" style="text-align: center; padding-top: 20pt;">
					<table style="width: 350px; height: 80px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td valign="middle" style="text-align: center; font-size: 13;">
								<p><font face="Tahoma" color="black" ><b>
								<span style="padding-left:auto"><small>SAFEEKEEPING FEE BULAN OKTOBER 2014</small>
								</b></font></p>
							</td>
						</tr>
					</table>				
				</td>
				<td width="260px" valign="middle" style="text-align: right; padding-top: 20pt; font-size: 13;">
					<p><font face="arial" color="black" ><b><span style="padding-right:40"><small>36.455.567,-</small></span></b></font></p>
				</td>
			</tr>
			<tr height="25px"> 
				<td colspan="3" width="640px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 640px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 13;" width="60%">
								<p><font face="arial" color="black" ><small><strike>Harga Jual</strike>/Penggantian/<strike>Uang Muka/Terjamin</strike>**)</small></font></p>
							</td>
							<td style="padding-left: auto; padding-right: 30pt; text-align: right; font-size: 13;" width="40%">
								<p><font face="arial" color="black" ><b><small>36.455.567,-</small></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px"> 
				<td colspan="3" width="640px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 640px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 13;" width="60%">
								<p><font face="arial" color="black"><small>Dikurangi Potongan Harga</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 13;" width="40%">
								<p><font face="arial" color="black"><b><small>2.455.567,-</small></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px"> 
				<td colspan="3" width="640px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 640px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 13;" width="60%">
								<p><font face="arial" color="black"><small>Dikurangi Uang Muka yg telah diterima</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 13;" width="40%">
								<p><font face="arial" color="black" ><b><small>3.455.567,-</small></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px"> 
				<td colspan="3" width="640px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 640px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 13;" width="60%">
								<p><font face="arial" color="black" ><small>Dasar Pengenaan Pajak</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 13;" width="40%">
								<p><font face="arial" color="black" ><b><small>1.455.567,-</small></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="25px"> 
				<td colspan="3" width="640px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 640px; height: 22px; margin-left: 0; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-left: 10pt; text-align: left; font-size: 13;" width="60%">
								<p><font face="arial" color="black"><small>PPN = 10% X Dasar Pengenaan Pajak</small></font></p>
							</td>
							<td style="padding-left: 0pt; padding-right: 30pt; text-align: right; font-size: 13;" width="40%">
								<p><font face="arial" color="black" ><b><small>3.455.567,-</small></b></font></p>
							</td>
						</tr>
					</table>
					</DIV>
				</td>
			</tr>
			<tr height="122px"> 
				<td colspan="3" width="640px" valign="middle" style="padding-left: 0pt; text-align: left">
					<DIV align="center">
					<table style="width: 640px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
						<tr height="180px">
							<td style="padding-left: 10pt; text-align: left; font-size: 13;" width="45%">
								<p><font face="arial" color="black" ><small>Pajak Penjualan Atas Barang Mewah</small></font></p>
								<table style="width: 100%; height: 120px; margin-left: 0; margin-right: auto; border:1px solid black;" border="1" cellspacing="0" cellpadding="0">
									<tr height="20px">
										<td style="padding-left: 0pt; text-align: center; font-size: 13;" width="22%">
											<p><font face="arial" color="black" ><small>Tarif</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 13;" width="45%">
											<p><font face="arial" color="black" ><small>DPP</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 13;" width="33%">
											<font face="arial" color="black" ><p><small>PPn BM</small></p></font>
										</td>
									</tr>
									<tr height="80px" valign="top">
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 13;" width="22%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >..........%</font></p></small>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 13;" width="45%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp...............................</font></p></small>
											</td>
											<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 10pt; text-align: center; font-size: 13;" width="33%">
												<small><p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p>
												<p style ="line-height:50%"><font face="arial" color="black" >Rp.......................</font></p></small>
											</td>
									</tr>
									<tr height="20px">
										<td style="padding-left: 8pt; text-align: left; font-size: 13;" width="22%">
											<p><font face="arial" color="black" ><small>Jumlah</small></font></p>
										</td>
										<td style="padding-left: 0pt; text-align: center; font-size: 13;" width="45%">
											<p><font face="arial" color="black" ></font></p>
										</td>
										<td style="padding-left: 8pt; text-align: left; font-size: 13;" width="33%">
										<p><font face="arial" color="black" ><small>Rp.........................</small></font></p>
										</td>
									</tr>
								</table>
							</td>
							<td style="padding-left: 10pt; padding-top: 0pt; text-align: right" width="55%">
								<table style="width: 100%; height: 140px; margin-left: auto; margin-top: 20; margin-right: auto;" border="0" cellspacing="0" cellpadding="0">
									<tr height="20px" valign="top">
										<td style="padding-left: 0pt; padding-top: 10pt; text-align: center; font-size: 13;" width="22%">
											<p><font face="arial" color="black" ><small>Jakarta, tgl 30 November 2014</small></font></p>
										</td>
									</tr>
									<tr height="90px" valign="bottom">
										<td></td>
									</tr>
									<tr height="13px">
										<td style="padding-left: auto; text-align: center; font-size: 13;" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" ><small>MOAMMER NATALO AKBAR</small></font></p>
										</td>
									</tr>
									<tr height="13px">
										<td style="padding-left: auto; text-align: center; font-size: 13;" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" ><small>nama</small></font></p>
										</td>
									</tr>
									<tr height="13px" valign="top">
										<td style="padding-left: auto; text-align: center; font-size: 13;" width="22%">
											<p><font face="arial" color="black" ><small>PGS PEMIMPIN KELOMPOK KUSTODI</small></font></p>
										</td>									
									</tr>
									<tr height="13px">
										<td style="padding-left: auto; text-align: center; font-size: 13;" width="22%">
											<p style ="line-height:20%"><font face="arial" color="black" ><small>jabatan</small></font></p>
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
		<table style="height: 30px; margin-left: 0; margin-right: auto;" width="640px" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td style="padding-left: 0pt; text-align: left; font-size: 13;">
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