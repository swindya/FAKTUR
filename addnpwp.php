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
 
 	function cekusername() {
		var usermu = document.getElementsByName("username")[0].value;
		if (usermu == null || usermu == " " || usermu == 0) {
			alert("Harap username diisi");
		}
		else {
			//window.open("registeruser.php",'_blank');
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("usertxtHint").innerHTML=xmlhttp.responseText;
				}
			}
		}
		xmlhttp.open("GET","checkuser.php?user=" + usermu,true);
		xmlhttp.send();
	}
	function cekalldata() {
		var usermu = document.getElementsByName("username")[0].value;
		var pwdmu = document.getElementsByName("pwd")[0].value;
		var pwd2mu = document.getElementsByName("pwd2")[0].value;
		var otopwdmu = document.getElementsByName("otopwd")[0].value;
		var lenuser = usermu.length;
		var lenpwd = pwdmu.length;
		var lenpwd2 = pwd2mu.length;
		var lenotopwd = otopwd.length;
		var i = 0;
		var j = 0;
		if (usermu == null || usermu == "") {
			i = i + 1;
		}
		if (pwdmu == null || pwdmu == "") {
			i = i + 1;
		}
		if (pwd2mu == null || pwd2mu == "") {
			i = i + 1;
		}
		if (otopwdmu == null || otopwdmu == "") {
			i = i + 1;
		}
		if (lenuser < 3) {
			j = j + 1;
		}
		if (lenpwd < 3) {
			j = j + 1;
		}
		if (lenpwd2 < 3) {
			j = j + 1;
		}
		if (lenotopwd < 3) {
			j = j + 1;
		}
		if (i > 0 && j >= 0) {
			alert("Field masih ada yg kosong atau terlalu pendek");
			return false;
		}
		else if (i == 0 && j > 0) {
			alert ("Field masih ada yg terlalu pendek. Isi minimal 3 karakter")
			return false;
		}
		else {
			if (pwdmu != pwd2mu) {
				alert("Password anda tidak konsisten");
				return false
			}
			else {
				return true;
			}
		}
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

<link href="styles.css" rel="stylesheet" type="text/css">
</head>

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
	<?php 
	 if (isset($_GET['done'])) { ?>
	  <h2>Thank you</h2> Your registration is now complete and you can <a href="login.php">login here</a>";
	 <?php exit();
	  }
	?></p>

	 <?php	
	 if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "* $e <br>";
	    }
	  echo "</div>";	
	   }
	 ?> 
	 
	 <br>
     <form action="addnpwprun.php" method="post" name="addnpwp" id="addnpwp">
		<table width="520px" border="0" cellpadding="3" cellspacing="0" style="margin-left: auto; margin-right: auto;">
			<tr bgcolor="FDB879" height="50px"> 
				<td colspan="2" style="padding-left:20; padding-top:15"><h4><strong>NPWP: Tambah Data</strong></h4>
				</td>
			</tr>
			<tr height="20px" bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left;">
				</td>
				<td style="width: 340px; text-align: left;"><div id="usertxtHint" name="usertxtHint"></div>
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">Nama BP
				</td>
				<td style="width: 340px; text-align: left;">
					<input name="nama" type="text" id="nama" size="25"> 
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">BPID 
				</td>
				<td style="width: 340px; text-align: left;">
					<input name="bpid" type="text" size="15" maxlength="15" id="bpid"> 
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">NPWP 
				</td>
				<td style="width: 340px; text-align: left; font-size: 12;">
					<input name="npwp"  id="npwp" type="text" size="15" maxlength="15">
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">Alamat
				</td>
				<td style="width: 340px; text-align: left;">
					<input name="alamat"  id="alamat" type="text" size="40" maxlength="70">
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">NPPKP
				</td>
				<td style="width: 340px; text-align: left;">
					<input name="nppkp"  id="nppkp" type="text" size="10" maxlength="15">
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td style="width: 180px; text-align: left; font-size: 12; padding-left:20;">BUMN/Non BUMN
				</td>
				<td style="width: 340px; text-align: left;">
							<select id="selectbumn" name="selectbumn">
								<option value="-1"></option>
								<option value="0">Non BUMN</option>
								<option value="1">BUMN</option>
					</select>
				</td>
			</tr>
			<tr bgcolor="FFFAA8"> 
				<td colspan="2">&nbsp;</td>
			</tr>
        </table>
        <table width="500px" border="0" cellpadding="3" cellspacing="3" style="margin-left: auto; margin-right: auto;">
 
          <tr height="40px"> 
            <td colspan="2" style="margin-left: auto; margin-right: auto; text-align: center">        
			<p><input name="add" type="submit" id="add" value="  Add  " class="submit" OnClick="ceknpwp();">
			</p></td>
          </tr>

        </table>

      </form>
	   
      </td>
    <td width="100" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<FONT color="black"><div name="statusoto" id="statusoto"></div></FONT>
</body>
</html>
