<?php
session_start();

$bulanmu = $_GET['bulan'];
$tahunmu = $_GET['tahun'];
$statvalid = $_SESSION['statusvalid'];

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

if ($statvalid == 1) {
//Cek apakah ada data yg sudah ada nomor fakturnya
	$sql = "UPDATE fakturpajak SET nomorfaktur='none' WHERE MONTH(tglinvoice)=" . $bulanmu . " AND YEAR(tglinvoice)=" . $tahunmu . ";";
	$res = mysqli_query($link, $sql);
}

echo "Nomor Faktur telah di-RESET.";


mysqli_close($link);

?>