<html>
<head>
<title>PHP Login :: Free Registration/Signup Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>

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

<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>
	<?php 
	 if (isset($_GET['done'])) { ?>
	  <h2>Thank you</h2> Your registration is now complete and you can <a href="login.php">login here</a>";
	 <?php exit();
	  }
	?></p>
      <h3 class="titlehdr">Free Registration / Signup</h3>
      <p>Please register a free account, before you can start posting your ads. 
        Registration is quick and free! Please note that fields marked <span class="required">*</span> 
        are required.</p>
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
      <form action="registeruser.php" method="post" name="regForm" id="regForm" onSubmit="return cekalldata()">
        <table width="520px" border="0" cellpadding="3" cellspacing="3" class="forms">
 
          <tr> 
            <td colspan="2"><h4><strong>Login Details</strong></h4></td>
          </tr>
         <tr height="20px"> 
            <td style="width: 180px; text-align: left;">
            </td>
            <td style="width: 340px; text-align: left;"><div id="usertxtHint" name="usertxtHint"></div></td>
          </tr>
          <tr> 
            <td style="width: 180px; text-align: left;">Username<span class="required"><font color="#CC0000">*</font></span></td>
            <td style="width: 340px; text-align: left;"><input name="username" type="text" id="username" class="required username" minlength="5" > 
              <input name="btnAvailable" type="button" id="btnAvailable" onclick="cekusername();"  value="Check Availability"> 
			    <span style="color:red; font: bold 12px verdana; " id="checkid" ></span> 
            </td>
          </tr>
          <tr> 
            <td style="width: 180px; text-align: left;">Password<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td style="width: 340px; text-align: left;"><input name="pwd" type="password" class="required password" minlength="5" id="pwd"> 
              <span class="example">** 5 chars minimum..</span></td>
          </tr>
          <tr> 
            <td style="width: 180px; text-align: left;">Retype Password<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td style="width: 340px; text-align: left;"><input name="pwd2"  id="pwd2" class="required password" type="password" minlength="5" equalto="#pwd"></td>
          </tr>
          <tr> 
            <td style="width: 180px; text-align: left;">Authorization Password<span class="required"><font color="#CC0000">*</font></span> 
            </td>
            <td style="width: 340px; text-align: left;"><input name="otopwd"  id="otopwd" class="required password" type="password" minlength="5" equalto="#pwd"></td>
          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
        <table width="520px" border="0" cellpadding="3" cellspacing="3">
 
          <tr> 
            <td colspan="2">        
			<p align="center"><input name="Register" type="submit" id="Register" value="Register">
			</p></td>
          </tr>

        </table>

      </form>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<FONT color="black"><div name="statusoto" id="statusoto"></div></FONT>
</body>
</html>
