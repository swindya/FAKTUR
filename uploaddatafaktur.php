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
?>

</head>
<body>

<?php

//$filename = $_GET['namafile'];

array_map('unlink', glob("./upload/*"));

$waktumulai = time();
// Check apakah file yg berisi list file sudah ada atau belum

echo "<br>";


if (($_FILES["fileku"]["size"] < 30000000)) {
		if ($_FILES["fileku"]["error"] > 0) {
			//echo "Return Code: " . $_FILES["fileku"]["error"] . "<br />";
		}
		else {
			//echo "Upload: " . $_FILES["fileku"]["name"] . "&nbsp;&nbsp;&nbsp;&nbsp;";
			//echo "Type: " . $_FILES["fileku"]["type"] . "&nbsp;&nbsp;&nbsp;&nbsp;";
			//echo "Size: " . ($_FILES["fileku"]["size"] / 1024) . " Kb";
			//echo "Temp file: " . $_FILES["fileku"]["tmp_name"][0] . "<br />";

			if (file_exists("./upload/" . $_FILES["fileku"]["name"])) {
				echo $_FILES["fileku"]["name"] . " already exists. <br>";
			}
			else {
				move_uploaded_file($_FILES["fileku"]["tmp_name"],
				"./upload/" . $_FILES["fileku"]["name"]);
				//echo "Stored in: " . "./upload/" . $_FILES["fileku"]["name"];
			}
		}
	}
else {
	//echo "Invalid file";
	//echo "Error: " . $_FILES["fileku"]["error"] . "<br>";
}

$filenameku = "./upload/" . $_FILES["fileku"]["name"];


// Test CVS

//require_once $filenameku;

require_once '../Excel/Excel/reader.php';

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
$data->setOutputEncoding('CP1251');

/***
* if you want you can change 'iconv' to mb_convert_encoding:
* $data->setUTFEncoder('mb');
*
**/

/***
* By default rows & cols indeces start with 1
* For change initial index use:
* $data->setRowColOffset(0);
*
**/



/***
*  Some function for formatting output.
* $data->setDefaultFormat('%.2f');
* setDefaultFormat - set format for columns with unknown formatting
*
* $data->setColumnFormat(4, '%.3f');
* setColumnFormat - set format for column (apply only to number fields)
*
**/

$data->read($filenameku);

/*


 $data->sheets[0]['numRows'] - count rows
 $data->sheets[0]['numCols'] - count columns
 $data->sheets[0]['cells'][$i][$j] - data from $i-row $j-column

 $data->sheets[0]['cellsInfo'][$i][$j] - extended info about cell
    
    $data->sheets[0]['cellsInfo'][$i][$j]['type'] = "date" | "number" | "unknown"
        if 'type' == "unknown" - use 'raw' value, because  cell contain value with format '0.00';
    $data->sheets[0]['cellsInfo'][$i][$j]['raw'] = value if cell without format 
    $data->sheets[0]['cellsInfo'][$i][$j]['colspan'] 
    $data->sheets[0]['cellsInfo'][$i][$j]['rowspan'] 
*/

error_reporting(E_ALL ^ E_NOTICE);

$sqla = "SELECT * FROM user WHERE username='" . $uname . "';";
$resa = mysqli_query($link, $sqla);
$jmlrowa = 0;
if ($resa) {
	$jmlrowa = $resa->num_rows;
}
if ($jmlrowa > 0) {
	while ($rowa = mysqli_fetch_array ($resa, MYSQLI_ASSOC)) {
		$userid = $rowa['ID'];
	}
}
$datarow = $data->sheets[0]['numRows'];
$datarow = $datarow;

$bulanstr = array("jan", "peb", "mar", "apr", "mei", "jun", "jul", "agu", "sep", "okt", "nop", "des");
$bulanengstr = array("jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec");

// TGL INVOICE & TGL FAKTUR PAJAK
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][1] == NULL) {
		$tglinvoice[$k] = '';
	}
	else {
		$tgli = $data->sheets[0]['cells'][$i][1];
//echo "---" . $tgli . "<br>";
		$tglku = explode("-", $tgli);
		$tgltgl = $tglku[0];
		$tglbulan = strtolower($tglku[1]);
		$tgltahun = $tglku[2];
		$statusdapet = 0;
		for ($j=0;$j<12;$j++) {
			if ($tglbulan == $bulanstr[$j]) {
				$statusdapet = 1;
				$nobulan = $j + 1;
				break;
			}
			if ($tglbulan == $bulanengstr[$j]) {
				$statusdapet = 1;
				$nobulan = $j + 1;
				break;
			}
		}
		$tglinvo = mktime(0,0,0,$nobulan, $tgltgl, $tgltahun);
		//$tglinvoice[$k] = date("Y-m-d", $tglinvo);
		$tglinvoice[$k] = $tgltahun . "-" . $nobulan . "-" . $tgltgl;
		//$bulfakp1 = $nobulan + 1;
		//$tahunfp1 = $tgltahun;
//echo $tgltahun . "==" . $tglinvoice[$k]. "<br>";
		//if ($bulfakp1 == 13) {
		//	$bulfakp1 = 1;
		//	$tahunfp1 = $tgltahun;
		//}
		//$tglfp1 = 1;
		//$tglfpp1 = strtotime('-1 day', mktime(0,0,0,$bulfakp1, $tglfp1, $tahunfp1+1));
		//$tglfaktur[$k] = date("Y-m-d", $tglfpp1);

		$tglku = $tgltahun . "-" . $nobulan;
		$d = date_create_from_format('Y-m',$tglku);
		$dd = date_format($d, 't');
		$tglfaktur[$k] = $tgltahun . "-" . $nobulan . "-" . $dd;
	}
}

//echo $datarow . "<br>";

// Business Partner ID
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][2] == NULL) {
		$bpid[$k] = 'none';
	}
	else {
		$bpid[$k] = $data->sheets[0]['cells'][$i][2];
	}
}
// BP Legal Fullname
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][3] == NULL) {
		$bpname[$k] = 'none';
	}
	else {
		$bpname[$k] = $data->sheets[0]['cells'][$i][3];
	}
}
// CIF
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][4] == NULL) {
		$bpcif[$k] = 'none';
	}
	else {
		$bpcif[$k] = $data->sheets[0]['cells'][$i][4];
	}
}
// Security Acc ID
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][5] == NULL) {
		$secaccid[$k] = 'none';
	}
	else {
		$secaccid[$k] = $data->sheets[0]['cells'][$i][5];
	}
}
// Currency
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][6] == NULL) {
		$bpcurr[$k] = 'none';
	}
	else {
		$bpcurr[$k] = $data->sheets[0]['cells'][$i][6];
	}
}
// Total Charge Amount
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][15] == NULL) {
		$totcharge[$k] = 0;
	}
	else {
		$totchargeku = $data->sheets[0]['cells'][$i][15];
		$tcc = explode("'", $totchargeku);
		$totcharge[$k] = str_replace("'","", $totchargeku);
		//$totcharge[$k] = $tcc[1];
	}
}
// Total Tax Amount
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][16] == NULL) {
		$tottax[$k] = 0;
	}
	else {
		$tott = $data->sheets[0]['cells'][$i][16];
		//$tta = explode("'", $tott);
		$tottax[$k] = str_replace("'","", $tott);
		//$tottax[$k] = $tta[1];
	}
//echo $datarow . "-" . $tottax[$k] . "<br>";
}
// Invoice Amount
$k = 0;
for ($i=2; $i <= $datarow; $i++) {
	$k++;
	if ($data->sheets[0]['cells'][$i][17] == NULL) {
		$invoice[$k] = 'none';
	}
	else {
		$invoi = $data->sheets[0]['cells'][$i][17];
		//$invo = explode("'", $invoi);
		$invoice[$k] = str_replace("'","", $invoi);
		//$invoice[$k] = $invo[1];
	}
}

$countk = $k;


//===========================================================

	include_once './PHPExcel/Classes/PHPExcel/IOFactory.php';
	require_once './PHPExcel/Classes/PHPExcel.php';
	require_once './PHPExcel/Classes/PHPExcel/Writer/Excel5.php';

	$fileType = 'Excel5';

	error_reporting(E_ALL ^ E_NOTICE);
	
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
		
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($filenameku);
	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow();
	$k = 0;
	for ($row = 2; $row <= $highestRow; $row++) {
		$k++;
		//$tglik[$row] = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0,$row)->getValue();
				$cellValue = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $row)->getValue();
                    $dateValue = PHPExcel_Shared_Date::ExcelToPHP($cellValue); 
				$tglinvoice[$k] = excel_date($cellValue);
				$tglinvarr = explode("-",$tglinvoice[$k]);
				$bulanmu = $tglinvarr[1];
				$tahunmu = $tglinvarr[0];
	}	

//===========================================================

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

//$userid = 1;
//$aa = strtolower("Saya Makan Nasi");

// Cek tabel curdata apakah data sama atau update
//		1. Cari berapa (baris) jumlah data di tabel curdata
//		2. Bandingkan jml data tsb dgn jumlah data dari file excel
//		3. Jika berbeda berarti data berbeda, maka replace data pd tabel curdata
//		4. Jika sama maka:
//		5. Bandingkan apakah semua data di semua kolom expire khususnya tahun ada update atau
//		   perbedaan. Kalau tidak, data pd tabel curdata tidak perlu update

// query & show results
$jmlrow = 0;
$query = "SELECT * FROM fakturpajak;";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
	//echo $row_cnt;
}
else {
	$jmlrow = 0;
}

// Query ke tabel -> apakah data file sdh masuk/ada di database
for ($i=1;$i <= $countk;$i++) {
	$tglinvoiceku = date("d-M-Y",strtotime(strtolower($tglinvoice[$i])));
	$sql = "SELECT * FROM fakturpajak WHERE (tglinvoice='" . $tglinvoice[$i] . "' AND bpid='" . $bpid[$i] . "' AND ppn=" . $tottax[$i] . ");";
//echo $sql . "<br>";
	$result = mysqli_query($link, $sql);
	if ($result) {
	/* determine number of rows result set */
		$jmlrow = $result->num_rows;
		//echo $row_cnt;
		if ($jmlrow < 1) {
			// Baca NPWP
			//$sql1 = "SELECT * FROM fakturpajak WHERE namabp='" . $bpname[$i] . "' ORDER BY tglinvoice ASC;";
			$sql1 = "SELECT * FROM fakturpajak WHERE bpid='" . $bpid[$i] . "' ORDER BY tglinvoice ASC;";
			$result1 = mysqli_query($link, $sql1);
			$jmlrow1 = 0;
			//if ($result1) {
			//	$jmlrow1 = $result1->num_rows;
			//}
			if ($jmlrow1 > 0) {
				while ($row = mysqli_fetch_array ($result1, MYSQLI_ASSOC)) {
					$bpidku = $row['bpid'];
					$npwpidku = $row['npwpid'];
					$npwpku = $row['npwpbp'];
					$nppkpku = $row['nppkp'];
					$alamatku = $row['alamat'];
					$sbumnku = $row['statusbumn'];
				}
			}
			else {
				//Baca npwp dari tabel npwp jika tidak ditemukan di tabel fakturpajak
				//$sql0 = "SELECT * FROM npwp WHERE nama='" . $bpname[$i] . "';";
				$sql0 = "SELECT * FROM npwp WHERE bpid='" . $bpid[$i] . "';";
				$result0 = mysqli_query($link, $sql0);
				$jmlrow0 = 0;
				if ($result0) {
					$jmlrow0 = $result0->num_rows;
				}
				if ($jmlrow0 > 0) {
					while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
						$npwpidku = $row['ID'];
						$npwpku = $row['npwp'];
						$nppkpku = $row['nppkp'];
						$namaku = $row['nama'];
						$alamatku = $row['alamat'];
						$sbumnku = $row['statusbumn'];
					}
				}
				else {
					$npwpku = "none";
					$nppkpku = "none";
					$alamatku = "-";
					$npwpidku = 0;
					$sbumnku = 0;
				}
			}
			//Find nama dan jabatan dari data paling akhir (sebelum insert data)
			$sql2 = "SELECT * FROM fakturpajak ORDER BY tglinvoice ASC;";
			$res2 = mysqli_query($link, $sql2);
			$jmlrow2 = 0;
			if ($res2) {
				$jmlrow2 = $res2->num_rows;
			}
			if ($jmlrow0 > 0) {
				while ($row = mysqli_fetch_array ($res2, MYSQLI_ASSOC)) {
					$namattdku = $row['namattd'];
					$jabatanttdku = $row['jabatanttd'];
				}
			}
			$sql0 = "SELECT * FROM npwp WHERE bpid='" . $bpid[$i] . "';";
			$result0 = mysqli_query($link, $sql0);
			$jmlrow0 = 0;
			if ($result0) {
				$jmlrow0 = $result0->num_rows;
			}
			if ($jmlrow0 > 0) {
				while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
					$namaku = $row['nama'];
					$bpname[$i] = $namaku;
				}
			}
			// safekeepingfee = invoiceamount (MSExcel-file invoice.xls) x 100/110
			$skfee = $invoice[$i] * 100 / 110;
			$sqlgo = "INSERT INTO fakturpajak(bpid, cif, securityacc, tglinvoice, tglfaktur, namabp, alamatbp, npwpbp, npwpid, nppkp, statusbumn, safekeepingfee,
						ppn, total, tglttd, kotattd, namattd, jabatanttd, createduser, createddate) VALUES('" . $bpid[$i] . "','" . $bpcif[$i] . "','" . $secaccid[$i] . "','" . $tglinvoice[$i] .
						"','" . $tglfaktur[$i] . "','" . $bpname[$i] . "','" . $alamatku . "','" . $npwpku . "'," . $npwpidku . ",'" . $nppkpku . "'," . $sbumnku . "," . $skfee . "," . $tottax[$i] .
						"," . $invoice[$i] . ",'" . $tglfaktur[$i] . "', 'Jakarta', '" . $namattdku . "','" . $jabatanttdku . "'," . $userid .  ",'" . $dateku . "');";
			$resgo = mysqli_query($link, $sqlgo);
//echo $sqlgo . "<br>";
		}
	}
}

//Isi kolom npwpid pada tabel fakturpajak
//1. Baca data pada tabel fakturpajak
//2. Baca data pada tabel npwp
//3. Hilangkan whitespace, titik, koma pada data nama pd kedua tabel
//4. Kemudian semua huruf diubah ke lowercase
//5. Matching loop
//6. Update kolom npwpid di tabel fakturpajak

//Baca tabel NPWP

$sql0 = "SELECT * FROM npwp;";
$res0 = mysqli_query($link, $sql0);
$jmlr0 = 0;
if ($res0) {
	$jmlr0 = $res0->num_rows;
}
if ($jmlr0 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res0, MYSQLI_ASSOC)) {
		$i++;
		$npwpidku[$i] = $row['ID'];
		$npwpku[$i] = $row['npwp'];
		$npwpbpidku[$i] = $row['bpid'];
		$npwpnama = $row['nama'];
		$nama1 = str_replace(".","",$npwpnama);
		$nama2 = str_replace(",","",$nama1);
		$nama3 = str_replace(" ","",$nama2);
		$nama4 = trim($nama3);
		$nama5 = strtolower($nama4);
		$lennama = strlen($nama5);
		$npwpnama8str[$i] = substr($nama5,2,($lennama-5));
		$npwpnamaku[$i] = $nama5;
		$npwpalamatku[$i] = $row['alamat'];
	}
}
$jmldatanpwp = $i;

//Baca tabel Fakturpajak

$sql0 = "SELECT * FROM fakturpajak;";
$res0 = mysqli_query($link, $sql0);
$jmlr0 = 0;
if ($res0) {
	$jmlr0 = $res0->num_rows;
}
if ($jmlr0 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res0, MYSQLI_ASSOC)) {
		$i++;
		$fakturidku[$i] = $row['ID'];
		$bpidku[$i] = $row['bpid'];
		$bpnama = $row['namabp'];
		$nama1 = str_replace(".","",$bpnama);
		$nama2 = str_replace(",","",$nama1);
		$nama3 = str_replace(" ","",$nama2);
		$nama4 = trim($nama3);
		$nama5 = strtolower($nama4);
		$lennama = strlen($nama5);
		$bpnama8str[$i] = substr($nama5,2,($lennama-5));
		$bpnamaku[$i] = $nama5;
		$bpalamatku[$i] = 'nop';
		$bpnpwpid[$i] = 'nop';
		$bpstatus[$i]=0;
	}
}
$jmldatafaktur = $i;

for ($j = 1; $j <= $jmldatanpwp; $j++) {
	for ($k=1; $k <= $jmldatafaktur; $k++) {
		if (($bpidku[$k] == $npwpbpidku[$j]) && ($bpstatus[$k] == 0)) {
			$bpnpwpid[$k] = $npwpidku[$j];
			$bpalamatku[$k] = $npwpalamatku[$j];
			$sqlku = "UPDATE fakturpajak SET npwpbp='" . $npwpku[$j] . "', npwpid=" . $npwpidku[$j] . ", alamatbp='" . $bpalamatku[$k] . 
						"' WHERE ID=" . $fakturidku[$k] . ";";
			//$resku = mysqli_query($link, $sqlku);
			$bpstatus[$k] = 1;
		}
		if (($bpnama8str[$k] == $npwpnama8str[$j]) && ($bpstatus[$k] == 0)) {
			$bpnpwpid[$k] = $npwpidku[$j];
			$bpalamatku[$k] = $npwpalamatku[$j];
			$sqlku = "UPDATE fakturpajak SET npwpbp='" . $npwpku[$j] . "', npwpid=" . $npwpidku[$j] . ", alamatbp='" . $bpalamatku[$k] . 
						"' WHERE ID=" . $bpidku[$k] . ";";
			//$resku = mysqli_query($link, $sqlku);
			$bpstatus[$k] = 1;		
		}
	}
}


mysqli_close($link);

$_SESSION['start'] = time(); // Taking now logged in time.

?>
<meta http-equiv="refresh" content="0; url=fakturlist.php?perusahaan=0&bulan=<?php echo $bulanmu;?>&tahun=<?php echo $tahunmu;?>" />

</body>
</html>

<?php
function excel_date($xl_date)
{
return $displayDate = PHPExcel_Style_NumberFormat::toFormattedString($xl_date, 'YYYY-MM-DD');
}
?>