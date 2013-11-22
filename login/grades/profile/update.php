	<?php include '../../config.php' ?>
<?php
$rec = "UPDATE rstudents SET  address='$_POST[lugar]', contact= '$_POST[contactnum]', birthday= '$_POST[bday]' WHERE  student='".student($_SESSION['student'],'student')."'";

if(mysql_query($rec)){

	header('Refresh: 1; url=prof.php');
}
else{
}
header('Refresh: 1; url=prof.php');

mysql_close();
?>
