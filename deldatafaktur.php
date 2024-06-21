<?php
session_start();

include "koneksi.php";


//---------------------------------------------
if (!isset($_GET["deluserid"])) {
	if (!isset($_POST["deluserid"])) 
		$userid=0;
	else
		$userid=$_POST["deluserid"];
}
else
	$userid=$_GET["deluserid"];
//-------------------------------------------------
if (!isset($_GET["delbulan"])) {
	$bulan=0;
}
else
	$bulan=$_GET["delbulan"];
//---------------------------------------------
if (!isset($_GET["deltahun"])) {
	$tahun=0;
}
else
	$tahun=$_GET["deltahun"];
//---------------------------------------------



if ($uname=0 || $pwd=0)
{
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
}
//-------------------------------------------------

$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die();	
}

// Get data user ------------------------------------------------------------------------------------
# query the users table for name and surname 
if (isset($userid))
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
else
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$userid = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------
// HAPUS tabel sandisecurity
#  
$query = "DELETE FROM fakturpajak WHERE (MONTH(tglfaktur)=" . $bulan . " AND YEAR(tglfaktur)=" . $tahun . ");";
$a = 0;
$result = mysqli_query($link, $query);

if ($result)
{
	$a = 1;
}
echo $a;

//---------------------------------------------------------------------------------------------------

$sql1 = "INSERT INTO mylog (userid, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",now(),'HAPUS-FAKTUR','tabel sandisecurities');";
//$res = mysqli_query($link,$sql1);


mysqli_close($link);
?>



<?php
$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	

?>


