<?php
session_start();

$namamu = $_GET['nama'];
$fakturidmu = $_GET['fakturid'];
$alamatmu = $_GET['alamat'];

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

$sql = "UPDATE fakturpajak SET namabp='" . $namamu . "', alamatbp='" . $alamatmu . "' WHERE ID=" . $fakturidmu . ";";
$result = mysqli_query($link,$sql);
if ($result) {
?>
	Data fakturid: &nbsp;<?php print $fakturidmu;?> sudah di-update
<?php
}

mysqli_close($link);

?>