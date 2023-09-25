<?php 
   session_start();
// $_REQUEST['log'] = "";
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else 
{
echo "no log out id is detected";
}
	 exit();
  ?>