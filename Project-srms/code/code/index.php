<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Result</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body><br />
<marquee><svg viewBox="0 0 320 512" width="6" title="chevron-left">
  <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" />
</svg> Welcome to Online Sessional Result Display Portal Of IT Branch</marquee>
<div align="center">
<span class="head">Online Result Display</span>
<hr class="hr" />
<br />
<br />
<span class="subhead">Check Result</span>
<br />
<br />
<br />
<form method="post" action="viewResult.php">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Roll No.:</td><td><input type="text" required="required" name="roll" class="fields" size="15" placeholder="Enter Roll No." /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="SHOW" class="button" /></td></tr>
</table>
</form>
<br />
<br />
<a href="register.php" class="link button">Student Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="faculty.php" class="link button">Faculty Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="registerFaculty.php" class="link button">Faculty Registration</a>
</div>
</body>
</html>