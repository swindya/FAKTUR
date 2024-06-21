<html>
<head>
<title>Add NPWP Data</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>
<link rel="shortcut icon" href="logobnilogo.jpg" />
<script>
function tutupmas()
{
	window.close();
}
</script>
</head>

<body>

<?php
session_start();

$namamu = $_POST['nama'];
if (isset($_POST['bpid'])) {
	$bpidmu = $_POST['bpid'];
}
else
	$bpidmu = 0;

$npwpmu = $_POST['npwp'];
$alamatmu = $_POST['alamat'];
$bumnmu = $_POST['selectbumn'];
$skfeemu = $_POST['skfee'];
$bulanmu = $_POST['bulan'];
$tahunmu = $_POST['tahun'];

if (isset($_SESSION['addnpwpstatus'])) {
	$statusnpwp = $_SESSION['addnpwpstatus'];
}
else
	$statusnpwp = 0;

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.
$tglku = $tahunmu . "-" . $bulanmu;
$d = date_create_from_format('Y-m',$tglku);
$dd = date_format($d, 't');
$tglkuku = $tahunmu . "-" . $bulanmu . "-" . $dd;
$tglfaktur = $tglkuku;

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
$skfeemu = str_replace(",", ".", $skfeemu);
$ppnmu = 0.1 * $skfeemu;
$totalmu = 1.1 * $skfeemu;
$tahuniki = date("Y");
$sql0 = "SELECT * FROM fakturpajak WHERE (bpid='" . $bpidmu . "' AND MONTH(tglinvoice)=" . $bulanmu . " AND YEAR(tglinvoice)=" . $tahunmu . ");";
$jmlr0 = 0;
//$res0 = mysqli_query($link, $sql0);
//if ($res0) {
/* determine number of rows result set */
//	$jmlr0 = $res0->num_rows;
//}

if (($jmlr0 > 0) || ($statusnpwp == 0)) {
	echo "Gagal !! Data dengan bpid dan tglinvoice yg sama sudah ada. Harap periksa kembali.";
}
else {
	$sql1 = "INSERT INTO fakturpajak(namabp, bpid, npwpbp, alamatbp, nppkp, safekeepingfee, ppn, total, tglfaktur, tglinvoice) VALUES('" . $namamu . "','" . $bpidmu . "','" . $npwpmu .
			"','" . $alamatmu . "','" . $npwpmu . "'," . $skfeemu . "," . $ppnmu . "," . $totalmu . ",'" . $tglfaktur . "','" . $tglfaktur . "');";
echo $sql1;
	$res1 = mysqli_query($link, $sql1);
	echo "Sukses !! Data berhasil ditambahkan.";
}

$_SESSION['addnpwpstatus'] = 0;

mysqli_close($link);

 ?>
 
<input name="tutup" type="submit" id="tutup" value="  Tutup  " class="submit" OnClick="tutupmas();">

</body>
</html>
