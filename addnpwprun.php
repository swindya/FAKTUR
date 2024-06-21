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
	window.opener.location.reload();
	window.close();
}
</script>
</head>

<body>

<?php
session_start();

$namamu = $_POST['nama'];
$bpidmu = $_POST['bpid'];
$npwpmu = $_POST['npwp'];
$alamatmu = $_POST['alamat'];
$nppkpmu = $_POST['nppkp'];
$selectbumnmu = $_POST['selectbumn'];

if (isset($_SESSION['addnpwpstatus'])) {
	$statusnpwp = $_SESSION['addnpwpstatus'];
}
else
	$statusnpwp = 0;


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

if (!isset($_GET["perusahaan"])) {
	$perushid = 0;
	$perusstr = " ID>0";
}
else {
	$perushid = $_GET["perusahaan"];
	if ($perushid==0)
		$perusstr = " ID>0";
	else
		$perusstr = " ID=" . $perushid;
}

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

$tahuniki = date("Y");
//$sql0 = "SELECT * FROM npwp WHERE nama='" . $namamu . "' OR npwp='" . $npwpmu . "' OR bpid='" . $bpidmu . "';";
$sql0 = "SELECT * FROM npwp WHERE npwp='" . $npwpmu . "' AND bpid='" . $bpidmu . "';";
$jmlr0 = 0;
$res0 = mysqli_query($link, $sql0);
if ($res0) {
/* determine number of rows result set */
	$jmlr0 = $res0->num_rows;
}
//echo $jmlr0 . ' == ' . $statusnpwp;
if (($jmlr0 > 0) || ($statusnpwp == 0)) {
	echo "GAGAL !! Data dengan nama/npwp/bpid BP yg sama sudah ada. Harap periksa kembali.";
}
else {
	$sql1 = "INSERT INTO npwp(nama, bpid, npwp, alamat, nppkp, statusbumn) VALUES('" . $namamu . "','" . $bpidmu . "','" . $npwpmu .
			"','" . $alamatmu . "','" . $nppkpmu . "'," . $selectbumnmu . ");";
	$res1 = mysqli_query($link, $sql1);
	echo "SUKSES !! Data berhasil ditambahkan.";
}

$_SESSION['addnpwpstatus'] = 0;

mysqli_close($link);

 ?>
 
<input name="tutup" type="submit" id="tutup" value="  Tutup  " class="submit" OnClick="tutupmas();">

</body>
</html>
