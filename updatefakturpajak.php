<html>
<head>
<title>Update Faktur Data</title>
<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>
<link rel="shortcut icon" href="logobnilogo.jpg" />
<script>
function Loadme()
{
window.close();
alert("Data sudah di-update");
}
 
</script>

<?php

$npwpid = $_POST['npwpid'];
$fakturid = $_POST['faktid'];
$namakena = $_POST['namakenapajak'];
$alamatkena = $_POST['alamatkenapajak'];
$npwpkena = $_POST['npwpkenapajak'];
$tglpkpkena = $_POST['tglpkpkenapajak'];
$namatrima = $_POST['namatrimapajak'];
$alamattrima = $_POST['alamattrimapajak'];
$npwptrima = $_POST['npwptrimapajak'];
$nppkptrima = $_POST['nppkptrimapajak'];
$tglpkpkena = $_POST['tglpkpkenapajak'];
$namab = $_POST['namabarang'];
$hargajual = $_POST['hargajual'];
$hargaganti = $_POST['hargaganti'];
$dasarkena = $_POST['dasarkenapajak'];
$ppn = $_POST['ppn'];
$kotattd = $_POST['kota'];
$tglttd = $_POST['tglttd'];
$namattd = $_POST['namattd'];
$jabatanttd = $_POST['jabatanttd'];

$db_hostname = 'localhost';
$db_database = 'fakturpajak';
$db_username = 'myuser';
$db_password = 'userku';

if (!isset($_GET["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_GET["username"];
if (!isset($_GET["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];

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
die();	
}

$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

$tglpkpar = explode(" ", $tglpkpkena);
$bulstr = $tglpkpar[1];
for ($i=0; $i<12; $i++) {
	if ($bulan[$i] == $bulstr) {
		$bulannum = $i + 1;
		break;
	}
}
$tglnum = $tglpkpar[0];
$tahunnum = $tglpkpar[2];
$tglpkpku = $tahunnum . "-" . $bulannum . "-" . $tglnum;
// cari bulan dan tahun atau tgl invoice dari faktur pajak bersangkutan

$sql = "SELECT * FROM fakturpajak WHERE ID=" . $fakturid . ";";
$jml = 0;
$res = mysqli_query($link, $sql);
if ($res) {
/* determine number of rows result set */
	$jml = $res->num_rows;
}
if ($jml > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
		$i++;
		$tglfak = $row['tglfaktur'];
		$npwpid = $row['npwpid'];
		$bpidku = $row['bpid'];
	}
}
$tglfaktur = explode(" ", $tglttd);
$tgldayfakturku = $tglfaktur[0];
$bulfakturstr = $tglfaktur[1];
$tahunfakturku = $tglfaktur[2];
for ($i=0; $i<12; $i++) {
	if ($bulan[$i] == $bulfakturstr) {
		$bulanfakturnum = $i + 1;
		break;
	}
}
$tglfakturku = $tahunfakturku . "-" . $bulanfakturnum . "-" . $tgldayfakturku;
// cari STATUS BUMN dari tabel NPWP
$sbumn = 0;
$sql = "SELECT * FROM npwp WHERE ID=" . $npwpid . ";";
$jml = 0;
$res = mysqli_query($link, $sql);
if ($res) {
/* determine number of rows result set */
	$jml = $res->num_rows;
}
if ($jml > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res, MYSQLI_ASSOC)) {
		$i++;
		$sbumn = $row['statusbumn'];
	}
}

// Update ttd (kota, tgl, nama pejabat, dan jabatan)
$sql0 = "UPDATE fakturpajak SET kotattd='" . $kotattd . "', tglttd='" . $tglttd . "', namattd='" . $namattd . "', jabatanttd='" . $jabatanttd . "', tglfaktur='" . $tglfakturku . "' WHERE " .
		"tglfaktur='" . $tglfak . "';";
$result = mysqli_query($link,$sql0);
$sql00 = "UPDATE npwp SET nama='" . $namatrima . "' WHERE bpid='" . $bpidku . "';";
$result = mysqli_query($link,$sql00);
$sql = "UPDATE fakturpajak SET statusbumn=" . $sbumn . ",namapenjual='" . $namakena . "',alamatpenjual='" . $alamatkena . "', npwppenjual='" . $npwpkena . "', tglpkp='" .
		$tglpkpku . "', namabp='" . $namatrima . "', alamatbp='" . $alamattrima . "', npwpbp='" . $npwptrima . "', npwpid=" . $npwpid . ",safekeepingfee=" . $hargajual .
		", nilaiganti=" . $hargaganti . ", ppn=" . $ppn . ", kotattd='" . $kotattd . "', tglttd='" . $tglttd . "', namattd='" . $namattd . 
		"', jabatanttd='" . $jabatanttd . "', tglfaktur='" . $tglfakturku . "' WHERE ID=" . $fakturid . ";";
$result = mysqli_query($link,$sql);



if ($result) {
?>
	Data npwp-id: &nbsp;<?php print $fakturid;?> sudah di-update
<?php
}

mysqli_close($link);

?>
<body OnLoad="Loadme();">
</body>

</html>