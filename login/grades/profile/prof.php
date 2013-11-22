	<?php include '../../../config.php' ?>
	<html>
	<head>
	<style>
.CSSTableGenerator {
	margin:0px;padding:0px;
	width:49%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #ffffff;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	background-color:#e5e5e5;
		

}
.CSSTableGenerator td{
	vertical-align:middle;
		background:-o-linear-gradient(bottom, #ffffff 5%, #e5e5e5 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #e5e5e5) ); 
	background:-moz-linear-gradient( center top, #ffffff 5%, #e5e5e5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff", endColorstr="#e5e5e5");	background: -o-linear-gradient(top,#ffffff,e5e5e5);

	background-color:#ffffff;

	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:15px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #cccccc 5%, #b2b2b2 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #b2b2b2) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #b2b2b2 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#b2b2b2");	background: -o-linear-gradient(top,#cccccc,b2b2b2);

	background-color:#cccccc;
	border:0px solid #ffffff;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #cccccc 5%, #b2b2b2 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #b2b2b2) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #b2b2b2 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#b2b2b2");	background: -o-linear-gradient(top,#cccccc,b2b2b2);

	background-color:#cccccc;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
	</style>
	</head>
<body style= "background: transparent url(../../images/bg.png); background-repeat: no-repeat;">
	<?php

$edit = mysql_query("select student from rstudents where student='".student($_SESSION['student'],'student')."'");

while($row = mysql_fetch_array($edit)){
echo "<div class=CSSTableGenerator>";
echo "<table>";
		echo "<form action='edit.php' method='POST'>";
			echo "<tr>";
		echo "<td>Student Number:</td>"."<td>"."<input disabled type=text name=snum value='".student($_SESSION['student'],'student')."'";
		echo "<tr/>";
		echo "<tr>";
		echo "<td>Firstname:</td>"."<td>"."<input type=text disabled name=fname value='".student($_SESSION['student'],'firstname')."'";
		echo "<tr/>";
			echo "<tr>";
		echo "<td>Middlename:</td>"."<td>"."<input type=text disabled name=mname value='".student($_SESSION['student'],'middlename')."'";
		echo "<tr/>";
			echo "<tr>";
		echo "<td>Lastname:</td>"."<td>"."<input type=text disabled name=lname value='".student($_SESSION['student'],'lastname')."'";
		echo "<tr/>";
		echo "<tr>";
		echo "<td>Address:</td>"."<td>"."<input type=text disabled name=lugar value='".student($_SESSION['student'],'address')."'";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Contact Number:</td>"."<td>"."<input type=number disabled maxlength=11 name=contactnum value='".student($_SESSION['student'],'contact')."'"."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Birthday:</td>"."<td>"."<input type=text name=bday disabled value='".student($_SESSION['student'],'birthday')."'"."</td>";
		echo "</tr>";
			echo "<tr>";
		echo "<td><button><a href=sam.html>BACK</a></button></td>"."<td>"."<input type=submit value=EDIT'>"."</td>";
		echo "</tr>";
	echo "</form>";
	echo "</table>";
	echo "</div>";
}
?>
</body>
</html>
