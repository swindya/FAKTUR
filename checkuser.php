<?php

$usermu = $_GET['user'];
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','myuser','userku');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,'fakturpajak');
$sql = "SELECT * FROM user WHERE username='" . $usermu . "';";
$result = mysqli_query($con,$sql);
if ($result) {
	$row_cnt = $result->num_rows;
	if ($row_cnt > 0) {
?>
		<FONT FACE="Geneva, Arial" SIZE="1" COLOR="red">Username sudah digunakan. Gunakan yg lain</FONT>
<?php
	}
	else {
?>
		<FONT FACE="Geneva, Arial" SIZE="1" COLOR="blue">Username bisa digunakan. Lanjutkan</FONT>
<?php
	}
}
else {
?>
	<FONT FACE="Geneva, Arial" SIZE="1" COLOR="blue">Username bisa digunakan. Lanjutkan</FONT>
<?php
}

mysqli_close($con);

?>