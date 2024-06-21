<html>
<head>
<title>Add NPWP Data</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>
<link rel="shortcut icon" href="logobnilogo.jpg" />
<script>
  $(document).ready(function(){
    $.validator.addMethod("username", function(value, element) {
        return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
    }, "Username must contain only letters, numbers, or underscore.");

    $("#regForm").validate();
  });
 
</script>
<script>
function runfaktur() 
{
		var namaku = document.getElementsByName("nama")[0].value;
		var bpidku = document.getElementsByName("bpid")[0].value;
		var alamatku = document.getElementsByName("alamat")[0].value;
		var npwpku = document.getElementsByName("npwp")[0].value;
		var selectbumnku = document.getElementsByName("selectbumn")[0].value;
		var skfeeku = document.getElementsByName("skfee")[0].value;
		var bulanku = document.getElementsByName("bulan")[0].value;
		var tahunku = document.getElementsByName("tahun")[0].value;
//alert(document.getElementsByName("bpid")[0].selectedIndex);
		if (namaku == null || namaku == "" || bpidku == null || bpidku == "" || alamatku == null || alamatku == "" || npwpku == null || npwpku == "" || 
			skfeeku == null || skfeeku == "" || skfeeku < 0 || selectbumnku == null || selectbumnku == "" ||
			bulanku == null || bulanku == "" || bulanku < 1 || bulanku > 12 || tahunku == null || tahunku == "" || tahunku < 2000)
		{
			alert("Data ada yg kosong/invalid");
			return false;
		}
		else {
			return true;
		}

}

function fillothers() {

	var npwpid = document.getElementsByName("bpid")[0].value;
	var namar = "nama" + npwpid;
	var alamatr = "alamat" + npwpid;
	var npwpr = "npwp" + npwpid;
	var bumnr = "jenisbumn" + npwpid;
	document.getElementsByName("nama")[0].value = document.getElementsByName(namar)[0].value;
	document.getElementsByName("alamat")[0].value = document.getElementsByName(alamatr)[0].value;
	document.getElementsByName("npwp")[0].value = document.getElementsByName(npwpr)[0].value;
	document.getElementsByName("selectbumn")[0].selectedIndex = document.getElementsByName(bumnr)[0].value;
	//document.getElementById('selectbumn').selectedIndex = 2;
}
</script>
<style>
input.submit {
    width: 6em;  height: 2em;
}
input.uploadfile {
    width: 5em;  height: 2em;
}
</style>
<?php
session_start();
?>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<?php

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

$sql1 = "SELECT * FROM npwp ORDER BY nama ASC;";
$jmlr0 = 0;
$jmli = 0;
$res1 = mysqli_query($link, $sql1);
if ($res1) {
/* determine number of rows result set */
	$jmlr1 = $res1->num_rows;
}
if ($jmlr1 > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($res1, MYSQLI_ASSOC)) {
		$i++;
		$npwpidku[$i] = $row['ID'];
		$bpidku[$i] = $row['bpid'];
		$namaku[$i] = $row['nama'];
		$npwpku[$i] = $row['npwp'];
		$alamatku[$i] = $row['alamat'];
		$bumnku[$i] = $row['statusbumn'];
	}
	$jmli = $i;
}
?>

<body>
<table style="text-align: center;" width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="100" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="600" valign="top" style="text-align: center"><p>
		
	<br><br>
    <form action="addfakturrun.php" method="post" name="addfaktur" id="addfaktur">
		<table width="520px" border="0" cellpadding="3" cellspacing="0" style="margin-left: auto; margin-right: auto;">
			<tr bgcolor="FDB879" height="50px"> 
				<td colspan="2" style="padding-left:20; padding-top:15"><h4><strong>FAKTUR PAJAK: Tambah Data</strong></h4>
				</td>
			</tr>
			<tr height="20px" bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left;">
				</td>
				<td style="width: 340px; text-align: left;"><div id="usertxtHint" name="usertxtHint"></div>
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">BPID 
				</td>
				<td style="width: 340px; text-align: left;">
					<select id="bpid" name="bpid" OnChange="fillothers();">
						<option value="0"></option>
<?php
						for ($jj=1; $jj<=$jmli; $jj++) {
?>
							<option value="<?php echo $npwpidku[$jj];?>"><?php echo $bpidku[$jj];?></option>
<?php
						}	
?>						
					</select>

				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">Nama BP
				</td>
				<td style="width: 340px; text-align: left; font-size: 12">
					<input style="font-size: 12" name="nama" type="text" id="nama" size="45"> 
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">NPWP 
				</td>
				<td style="width: 340px; text-align: left; font-size: 12;">
					<input style="font-size: 12" name="npwp"  id="npwp" type="text" size="20" maxlength="22">
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">Alamat
				</td>
				<td style="width: 340px; text-align: left; font-size: 12;">
					<input style="font-size: 12" name="alamat"  id="alamat" type="text" size="45" maxlength="70">
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">BUMN/Non BUMN
				</td>
				<td style="width: 340px; text-align: left; font-size: 12;">
							<select id="selectbumn" name="selectbumn">
								<option value="0">Non BUMN</option>
								<option value="1">BUMN</option>
					</select>
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">Periode Invoice
				</td>
				<td style="width: 340px; text-align: left; font-size: 12;">
					<select id="bulan" name="bulan">
						<option value="0"></option>
						<option value="1">Januari</option>
						<option value="2">Februari</option>
						<option value="3">Maret</option>
						<option value="4">April</option>
						<option value="5">Mei</option>
						<option value="6">Juni</option>
						<option value="7">Juli</option>
						<option value="8">Agustus</option>
						<option value="9">September</option>
						<option value="10">Oktober</option>
						<option value="11">November</option>
						<option value="12">Desember</option>
					</select>
<?php
				$tahunsaiki = date("Y");	
				$tahunwingi = $tahunsaiki-1;
?>
					<select id="tahun" class="easyui-combobox" name="tahun" style="width:80px; max-width:80px">
						<option value="0"></option>
						<option value="<?php print $tahunwingi;?>"><?php print $tahunwingi;?></option>
						<option value="<?php print $tahunsaiki;?>"><?php print $tahunsaiki;?></option>
					</select>
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">Safekeeping Fee 
				</td>
				<td style="width: 340px; text-align: left; font-size: 12;">
					<input style="font-size: 12; text-align: right" name="skfee"  id="skfee" type="text" size="15" maxlength="15">&nbsp;(Rp)&nbsp;gunakan koma (,) utk desimal
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td colspan="2">&nbsp;</td>
			</tr>
        </table>
        <table width="500px" border="0" cellpadding="3" cellspacing="3" style="margin-left: auto; margin-right: auto;">
 
          <tr height="40px"> 
            <td colspan="2" style="margin-left: auto; margin-right: auto; text-align: center">        
			<p><input name="add" type="submit" id="add" value="  Add  " class="submit" OnClick="return runfaktur();">
			</p></td>
          </tr>

        </table>
<?php
		for($k=1; $k<=$jmli; $k++) {
?>
			<input type="hidden" id="nama<?php echo $npwpidku[$k];?>" name="nama<?php echo $npwpidku[$k];?>" value="<?php echo $namaku[$k];?>">
			<input type="hidden" id="npwp<?php echo $npwpidku[$k];?>" name="npwp<?php echo $npwpidku[$k];?>" value="<?php print $npwpku[$k];?>">
			<input type="hidden" id="alamat<?php echo $npwpidku[$k];?>" name="alamat<?php echo $npwpidku[$k];?>" value="<?php print $alamatku[$k];?>">
			<input type="hidden" id="jenisbumn<?php echo $npwpidku[$k];?>" name="jenisbumn<?php echo $npwpidku[$k];?>" value="<?php print $bumnku[$k];?>">
<?php
		}
?>
      </form>
	   
      </td>
    <td width="100" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<FONT color="black"><div name="statusoto" id="statusoto"></div></FONT>
<?php
	$_SESSION['addnpwpstatus'] = 1;
?>
</body>
</html>
