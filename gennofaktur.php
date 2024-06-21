<?php
session_start();

//-----------------------------------------
if (!isset($_GET["nofak1a"])) {
	$nofak1amu=0;
}
else
	$nofak1amu=$_GET["nofak1a"];
//-----------------------------------------
if (!isset($_GET["nofak1b"])) {
	$nofak1bmu=0;
}
else
	$nofak1bmu=$_GET["nofak1b"];
//-----------------------------------------
if (!isset($_GET["nofak1tahun"])) {
	$nofak1tahunmu=0;
}
else
	$nofak1tahunmu=$_GET["nofak1tahun"];
//-----------------------------------------
if (!isset($_GET["nofak1c"])) {
	$nofak1cmu=0;
}
else
	$nofak1cmu=$_GET["nofak1c"];
//-----------------------------------------
if (!isset($_GET["nofak1jml"])) {
	$nofak1jmlmu=0;
}
else
	$nofak1jmlmu=$_GET["nofak1jml"];
//-----------------------------------------
if (!isset($_GET["nofak2a"])) {
	$nofak2amu=0;
}
else
	$nofak2amu=$_GET["nofak2a"];
//-----------------------------------------
if (!isset($_GET["nofak2b"])) {
	$nofak2bmu=0;
}
else
	$nofak2bmu=$_GET["nofak2b"];
//-----------------------------------------
if (!isset($_GET["nofak2tahun"])) {
	$nofak2tahunmu=0;
}
else
	$nofak2tahunmu=$_GET["nofak2tahun"];
//-----------------------------------------
if (!isset($_GET["nofak2c"])) {
	$nofak2cmu=0;
}
else
	$nofak2cmu=$_GET["nofak2c"];
//-----------------------------------------
if (!isset($_GET["nofak2jml"])) {
	$nofak2jmlmu=0;
}
else
	$nofak2jmlmu=$_GET["nofak2jml"];
//-----------------------------------------
if (!isset($_GET["bulan"])) {
	$bulanmu=0;
}
else
	$bulanmu=$_GET["bulan"];
//-----------------------------------------
if (!isset($_GET["tahun"])) {
	$tahunmu=0;
}
else
	$tahunmu=$_GET["tahun"];


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
//Cek apakah ada data yg sudah ada nomor fakturnya
$sql = "SELECT * FROM fakturpajak WHERE (MONTH(tglinvoice)=" . $bulanmu . " AND YEAR(tglinvoice)=" . $tahunmu . " AND LENGTH(nomorfaktur)>14) ORDER BY ID ASC;";
$jmlr = 0;
$res = mysqli_query($link, $sql);
if ($res) {
/* determine number of rows result set */
	$jmlr = $res->num_rows;
}
if ($jmlr > 0) {
	$status = 0;
}
else {
	$i = 0;
	$status = 0;
	//Generate nomor faktur
	//Get first 3 digit dgn melihat status BUMN. Jika BUMN dan skfee > 10 jt -> 030
	//Jika BUMN dan skfee <= 10 jt -> 010
	$sql1 = "SELECT * FROM fakturpajak WHERE (MONTH(tglinvoice)=" . $bulanmu . " AND YEAR(tglinvoice)=" . $tahunmu . ") ORDER BY ID ASC;";
//echo $sql1;
	$k = 0;
	$jmlr1 = 0;
	$res1 = mysqli_query($link, $sql1);
	if ($res1) {
		$jmlr1 = $res1->num_rows;
	}
	if ($jmlr1 > 0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($res1, MYSQLI_ASSOC)) {
			$i++;
			$myid[$i] = $row['ID'];
			$mybpid[$i] = $row['bpid'];
			$myskfee[$i] = $row['safekeepingfee'];
		}
		$jmlii = $i;

		//Jika jumlah data > jumlah nomor faktur ->
		if ($jmlii >= $nofak1jmlmu) {
			//$batasbawah = $nofak1cmu;
			//$batasatas = $nofak1cmu + $nofak1jumlahmu;
			$nofak1bmu = $nofak1bmu * 1;
			for ($m=1; $m<=$nofak1jmlmu; $m++) {
				if ($nofak1bmu<10) {
					$nf1c = '00000' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<100) && ($nofak1bmu>9)) {
					$nf1c = '0000' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<1000) && ($nofak1bmu>99)) {
					$nf1c = '000' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<10000) && ($nofak1bmu>999)) {
					$nf1c = '00' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<100000) && ($nofak1bmu>9999)) {
					$nf1c = '0' . (string)($nofak1bmu + $m - 1);
				}
				else {
					$nf1c = (string)($nofak1bmu + $m - 1);
				}
				$jmllen = strlen($nf1c);
				$nf1c = substr($nf1c, ($jmllen-6),6);				
				$sql21 = "UPDATE fakturpajak SET nomorfaktur='" . $nofak1amu . "." . $nf1c . "." . $nofak1cmu . "." . $nofak1tahunmu . "' WHERE ID=" . $myid[$m] . ";";
//echo "+" . $sql21 . "<br>";
				$res21 = mysqli_query($link, $sql21);
			}
			for ($m=$nofak1jmlmu+1;$m<=$jmlii;$m++) {
				$nf2c = $nofak2bmu + $m - $nofak1jmlmu - 1;
				if ($nofak2bmu<10) {
					$nf2c = '00000' . (string)($nf2c);
				}
				else if (($nofak2bmu<100) && ($nofak2bmu>9)) {
					$nf2c = '0000' . (string)($nf2c);
				}
				else if (($nofak2bmu<1000) && ($nofak2bmu>99)) {
					$nf2c = '000' . (string)($nf2c);
				}
				else if (($nofak2bmu<10000) && ($nofak2bmu>999)) {
					$nf2c = '00' . (string)($nf2c);
				}
				else if (($nofak2bmu<100000) && ($nofak2bmu>9999)) {
					$nf2c = '0' . (string)($nf2c);
				}
				else {
					$nf1c = (string)($nf2c);
				}
				$jmllen = strlen($nf1c);
				$nf1c = substr($nf1c, ($jmllen-6),6);

				$sql22 = "UPDATE fakturpajak SET nomorfaktur='" . $nofak2amu . "." . $nf2c . "-" . $nofak2cmu . "." . $nofak2tahunmu . "' WHERE ID=" . $myid[$m] . ";";
				$res22 = mysqli_query($link, $sql22);
			}
			$status = 1;
		}
		else {
			$batasbawah = $nofak1cmu;
			$batasatas = $nofak1cmu + $nofak1jmlmu;
			for ($m=1; $m<=$jmlii; $m++) {
				$nf1c = $nofak1bmu + $m - 1;
				if ($nofak1bmu<10) {
					$nf1c = '00000' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<100) && ($nofak1bmu>9)) {
					$nf1c = '0000' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<1000) && ($nofak1bmu>99)) {
					$nf1c = '000' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<10000) && ($nofak1bmu>999)) {
					$nf1c = '00' . (string)($nofak1bmu + $m - 1);
				}
				else if (($nofak1bmu<100000) && ($nofak1bmu>9999)) {
					$nf1c = '0' . (string)($nofak1bmu + $m - 1);
				}
				else {
					$nf1c = (string)($nofak1bmu + $m - 1);
				}
				$jmllen = strlen($nf1c);
				$nf1c = substr($nf1c, ($jmllen-6),6);
				$sql21 = "UPDATE fakturpajak SET nomorfaktur='" . $nofak1amu . "." . $nf1c . "." . $nofak1cmu . "." . $nofak1tahunmu . "' WHERE ID=" . $myid[$m] . ";";
//echo $nofak1bmu . "-" . $m . "++" . $sql21 . "<br>";
				$res21 = mysqli_query($link, $sql21);
			}
			$status = 1;
		}
	}

}
if ($status == 0) {
	echo "Nomor Faktur GAGAL dibuat. Harap periksa data.";
}
else {
	echo "Nomor Faktur SUKSES dibuat.";
}

mysqli_close($link);

?>