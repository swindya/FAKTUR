<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?php

session_start();

if (isset($_SESSION['statuslogin'])){
}
else {
	$_SESSION['statuslogin'] = 1;
}

?>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
<link href="styles.css" rel="stylesheet" type="text/css">
  <title>Login Monitoring Expiring Date</title>
</head>
<body>


<table width="100%" border="1" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="200" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="500" valign="top"><p>&nbsp;</p>
		<table style="height: 50px; margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="400px">
		<tbody>
        <tr>
          <td style="margin-left: 23px;" width="100%"; >
			<img style="width: 100px; height: 32px;" alt="" src="logobni.jpg">
		    <h3 class="titlehdr">Login Users 
			</h3> 
			<br>
          </td>
        </tr>
		</tbody>
		</table>
	  <p>
	  <?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?></p>
      <form action="mainmenu.php" method="post" name="logForm" id="logForm" >
		<table style="text-align: left; margin-left: auto; margin-right: auto; height: 20px;" width="400px" border="0" cellpadding="4" cellspacing="4" >
			<tr> 
				<td width="100%">
<?php
		if ($_SESSION['statuslogin'] == 8) {
?>
		<div style="width: 100%;text-align:left"><font color="red" size="1">Username/password is not found. Try again</font></div>
<?php	
		}
		elseif ($_SESSION['statuslogin'] == 7) {
?>
		<div style="width: 100%;text-align:left"><font color="red" size="1">Session expired</font></div>
<?php
		}
		else {
		}
		$_SESSION['statuslogin'] = 0;
?>
				</td>
			</tr>
		</table>
        <table style="text-align: left; margin-left: auto; margin-right: auto; height: 60px;" width="400px" border="0" cellpadding="4" cellspacing="4" class="loginform">
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td width="40%">&nbsp&nbsp&nbsp Username / Email</td>
            <td width="60%">&nbsp&nbsp<input name="username" type="text" class="required" id="txtbox" size="22" maxlength="36"></td>
          </tr>
          <tr> 
            <td>&nbsp&nbsp&nbsp Password</td>
            <td>&nbsp&nbsp<input name="passwd" type="password" class="required password" id="txtbox" size="22" maxlength="36"></td>
          </tr>
          <tr> 
            <td colspan="2"><div align="center">
                <!--input name="remember" type="checkbox" id="remember" value="1">
                Remember Me</div></td-->
          </tr>
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input name="doLogin" type="submit" id="doLogin3" value="  Login  ">
                </p>
                <p><a href="register.php">Register</a><font color="#FF6600"> 
                  </font> <!--a href="forgot.php">Forgot Password</a> <font color="#FF6600"> 
                  </font--></p>
                <p><BR>
              </div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
      <p>&nbsp;</p>
	   
      </td>
    <td width="200" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>


</body>
</html>
<?php
//echo $_SESSION['statuslogin'];
	$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
    //$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
	//session_destroy();
?>