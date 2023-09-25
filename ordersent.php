<?php
session_start();
ob_start();
$id=$_SESSION['eid'];
include("config.php");
// $_REQUEST['log'] = "";
// if($_REQUEST['log']=='out')
// {
// session_destroy();
// header("location:index.php");
// }
//  else{
// 	 	echo "No logout id";
// 	 }
?>
<html>
<div>
<div style="width:25%;float:right">
<br><h2 align="right"><a href="LogOut.php?log=out"><font color="#0099FF">LogOut</font></a></h2><br><br><br><br>
<img src="usepics/7.jpg">
</div>
<br><br>
<center><div style="width:70%;float:right" align="center">
<div><br/><center><h2><font face="Lucida Handwriting" size="+2" color="#00CCFF">ThankYou for Shopping With Us</font></h2></center>
</div>
<br><br><br>
<fieldset style="background:#CC99CC;width:50%">
<br><br>
<font color="#660033" size="+1" face="Comic Sans MS"><b>Your order is sent successfully!!! </b></font><br/><br/>
<font size="+1" face="Comic Sans MS" color="#660033" ><b>Your order no. is:</b><font color="#FF3366"><?php echo $_REQUEST['order'];?></font><br/><br/></font>


</fieldset>
</div>
</center>

</div>
</html>