<html>
<head>
<title>PHP Login :: Free Registration/Signup Form</title>
<link rel="stylesheet" type="text/css" href="./themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="./themes/icon.css">
<link href='multi-line-button.css' rel='stylesheet' />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="./demo/demo.css">
<script>
	function gotologin()
	{
		window.open("login.php",'_top');
	}
	function gotoregister()
	{
		window.open("register.php",'_top');
	}
</script>
</head>
<body>
<?php

$usermu = $_POST['username'];
$pwdmu = $_POST['pwd'];
$pwd2mu = $_POST['pwd2'];
$otopwd = $_POST['otopwd'];
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','myuser','userku');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,'fakturpajak');
$statususer = 0;
$status = 0;
$sql0 = "SELECT * FROM user WHERE username = '" . $usermu . "';";
$result0 = mysqli_query($con,$sql0);
if ($result0) {
	$jmlrow = $result0->num_rows;
}
if ($jmlrow > 0) {
	$statususer = 1;
}
$sql = "SELECT * FROM user WHERE pwd = PASSWORD('" . $otopwd . "') AND levelid=1;";
$result = mysqli_query($con,$sql);
if ($result) {
	$row_cnt = $result->num_rows;
}
//echo $row_cnt;
if (($row_cnt > 0) && ($statususer == 0)) {
	$sqlo = "INSERT INTO user(username, pwd) VALUES('" . $usermu . "'," . "PASSWORD('" . $usermu . "'))";;
	$resulto = mysqli_query($con,$sqlo);
	$status = 1;
}
else {
	$status = 0;
}


mysqli_close($con);

?>
<br><br>
<table style="background-color: rgb(255, 255, 120); text-align: left; margin-left: 20; margin-right: 20;" width="520px" border="0" cellpadding="3" cellspacing="3">
	<tr> 
        <td height="50px"><font face="arial" color="black" size="4"><strong>Hasil Registrasi :</strong></font></td>
    </tr>
    <tr> 
        <td style="height: 70px; width: 520px; text-align: left;">
<?php
		if ($status == 1) {
?>
			<font face="arial" color="blue" size="3">User &nbsp;<?php echo $usermu; ?>&nbsp; berhasil dibuat</font>
<?php
		}
		else {
?>
			<font face="arial" color="red" size="3">
			User&nbsp;<?php echo $usermu; ?>&nbsp; gagal/tidak bisa dibuat. Periksa 'authorized password
			</font>
<?php
		}
?>
		</td>
    </tr>
</table>
<!--meta http-equiv="refresh" content="0; url=login.php" /-->
<table style="text-align: left; margin-left: 20; margin-right: 20;" width="520px" border="0" cellpadding="3" cellspacing="3">
	<tr> 
        <td height="50px"><font face="arial" color="black" size="4">
<?php
	if ($status == 1) {
?>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="gotologin();">Go to Login</a></font>
<?php
	}
	else {
?>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="gotoregister();">Go to Register</a> &nbsp;
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="gotologin();">Go to Login</a></font>
<?php
	}
?>
		</td>
    </tr>
</table>

<br><br>
</body>
</html>