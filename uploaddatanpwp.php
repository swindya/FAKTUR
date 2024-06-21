<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Data Invoice</title>

<link rel="stylesheet" type="text/css" href="./themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="./themes/icon.css">
<link rel="stylesheet" type="text/css" href="./demo/demo.css">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.easyui.min.js"></script>
<script src="jquery-1.3.2.min.js" language="javascript" type="text/javascript"></script>
<script src="jquery-blink.js" language="javscript" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function()
{
	$('.blink').blink();
});
</script>

<?php

session_start();

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

if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//-----------------------------------------------------------------

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
//---------------------------------------------------------------------------------------------------
if ($userid==0)
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
else
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt > 0) {
	while ($rowa = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$userid = $rowa['ID'];
	}
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
?>

</head>
<body>

<?php

//$filename = $_GET['namafile'];

array_map('unlink', glob("./upload/*"));

$waktumulai = time();
// Check apakah file yg berisi list file sudah ada atau belum

echo "<br>";


if (($_FILES["filenpwp"]["size"] < 3000000)) {
		if ($_FILES["filenpwp"]["error"] > 0) {
			echo "Return Code: " . $_FILES["filenpwp"]["error"] . "<br />";
		}
		else {
			//echo "Upload: " . $_FILES["filenpwp"]["name"] . "&nbsp;&nbsp;&nbsp;&nbsp;";
			//echo "Type: " . $_FILES["filenpwp"]["type"] . "&nbsp;&nbsp;&nbsp;&nbsp;";
			//echo "Size: " . ($_FILES["filenpwp"]["size"] / 1024) . " Kb";
			//echo "Temp file: " . $_FILES["filenpwp"]["tmp_name"][0] . "<br />";

			if (file_exists("./upload/" . $_FILES["filenpwp"]["name"])) {
				//echo $_FILES["filenpwp"]["name"] . " already exists. <br>";
			}
			else {
				move_uploaded_file($_FILES["filenpwp"]["tmp_name"],
				"./upload/" . $_FILES["filenpwp"]["name"]);
				//echo "Stored in: " . "./upload/" . $_FILES["filenpwp"]["name"];
			}
		}
	}
else {
	//echo "Invalid file";
	//echo "Error: " . $_FILES["filenpwp"]["error"] . "<br>";
}


$filenameku = "./upload/" . $_FILES["filenpwp"]["name"];
$tipefile = pathinfo($filenameku, PATHINFO_EXTENSION);

$bulanstr = array("jan", "peb", "mar", "apr", "mei", "jun", "jul", "agu", "sep", "okt", "nop", "des");
$bulanengstr = array("jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "des");


//------------------------------------------------------------------------------------------------------------

	$bulan = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
	$date = date('Y-m-d H:i:s');
	$tahunsaiki = date('Y');
	$tahunwingi = $tahunsaiki - 1;

	if ($tipefile == 'xls') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';
		$jenisxl = 'Excel5';
	}
	else if ($tipefile == 'xlsx') {
		include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
		require_once './PHPExcel/Classes/PHPExcel.php';
		require_once './PHPExcel/Classes/PHPExcel/Writer/Excel2007.php';
		$jenisxl = 'Excel2007';
	}
	error_reporting(E_ALL ^ E_NOTICE);
	
	$bulan = array("", "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
	
	$objReader = PHPExcel_IOFactory::createReader($jenisxl);
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filenameku);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$highestColA = $objWorksheet->getHighestDataColumn();
	$highestCol = PHPExcel_Cell::columnIndexFromString($highestColA);

//----------------------------------------------------------------------------------------------------------
// BACA HEADER
//----------------------------------------------------------------------------------------------------------
	$rowku = 0;
	for($myrow=1; $myrow <= 3; $myrow++) {
		for ($mycol = 0; $mycol <= $highestCol; $mycol++) {
			$headercol = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($mycol, $myrow)->getValue();
			if (strpos(strtoupper($headercol),'NPWP') !== false) {
				$npwpcol = $mycol;
				$rowku = $myrow;
			}
		}
		if ($rowku > 0)
			break;
	}
	$ourrow = $rowku + 1;
//----------------------------------------------------------------------------------------------------------
// BACA DATA
//----------------------------------------------------------------------------------------------------------
	$k = 0;
	for ($row = $ourrow; $row <= $highestRow; $row++) {
		$k++;
		//$tgltr = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($tgltrxcol, $row)->getValue();
			//$tglval = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue();
		//$dateObj = PHPExcel_Shared_Date::ExcelToPHPObject($tgltr);
		//$tgltrx[$k] = $dateObj->format('Y-m-d');
		$bpid[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
		$npwp[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue();
		$bpnama[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, $row)->getValue();
		$bpalamat[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(5, $row)->getValue();
		$bpbumn[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(6, $row)->getValue();
		$statusbumn[$k] = 0;
		if ($bpbumn[$k]=="BUMN")
			$statusbumn[$k] = 1;
		$matauang[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(7, $row)->getValue();
		$bpnppkp[$k] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(8, $row)->getValue();
	}
	$countk = $k;	
		

$perushstr = " IS NOT NULL";

$db_hostname = 'localhost';
$db_database = 'fakturpajak';
$db_username = 'myuser';
$db_password = 'userku';

$dateku = date("Y-m-d H:i:s");

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

// truncate npwp
//$jmlrow = 0;
//$query = "TRUNCATE TABLE npwp;";
//$result = mysqli_query($link, $query);

$tglku = date("Y-m-d h:n:s");
$jml00 = 0;
// Query ke tabel -> apakah data file sdh masuk/ada di database
for ($i=1;$i <= $countk;$i++) {
	//$sql00 = "SELECT * FROM npwp WHERE bpid='" . $bpid[$i] . "';";
	$sql00 = "SELECT * FROM npwp WHERE npwp='" . $npwp[$i] . "';";
//echo $sql00 . "<br>";
	$result00 = mysqli_query($link, $sql00);
	if ($result00) {
		$jml00 = $result00->num_rows;
	}
	if ($jml00 == 0) {
		$sql01 = "INSERT INTO npwp (bpid, npwp, nama, alamat, statusbumn, nppkp, createduser, createddate) VALUES('" . $bpid[$i] . "','" . $npwp[$i] . "','" . $bpnama[$i]
			. "','" . $bpalamat[$i] . "'," . $statusbumn[$i] . ",'" . $bpnppkp[$i] . "'," . $userid . ",'" . $tglku . "');";
//echo $sql01 . "<br>";
		$result = mysqli_query($link, $sql01);
	}
}


mysqli_close($link);

$_SESSION['start'] = time(); // Taking now logged in time.

?>
<meta http-equiv="refresh" content="0; url=npwplist.php" />

</body>
</html>