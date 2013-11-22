<?php include '../../config.php' ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="user-scalable=no, initial-scale=.50, maximum-scale=.50, minimum-scale=.50, width=device-width, height=device-height, target-densitydpi=device-dpi" />

<style type="text/css">

textarea {
 background-color:grey repeat-y;
 width: 600px;
 height: 200px;
 font: normal 19px verdana;
 line-height: 25px;
 padding: 2px 10px;
 border: solid 1px #ddd;
}

.classname {
	
	text-indent:0;-moz-box-shadow:inset 0px 1px 0px 0px #fce2c1;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fce2c1;
	box-shadow:inset 0px 1px 0px 0px #fce2c1;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25) );
	background:-moz-linear-gradient( center top, #ffc477 5%, #fb9e25 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25');
	background-color:#ffc477;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:20px;
	-moz-border-radius-topright:20px;
	border-top-right-radius:20px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:20px;
	-moz-border-radius-bottomleft:20px;
	border-bottom-left-radius:20px;
	border:1px solid #eeb44f;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:40px;
	line-height:40px;
	width:100px;
	text-decoration:none;
	text-align:center;
	text-shadow:0px 0px 0px #cc9f52;

}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477) );
	background:-moz-linear-gradient( center top, #fb9e25 5%, #ffc477 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477');
	background-color:#fb9e25;
}.classname:active {
	position:relative;
	top:1px;
}</style>
</head>
<body style= "background: transparent url(../../images/bg.png); background-repeat: no-repeat;">

<font  size="6%">
	
	
<?php


$sql="SELECT * FROM sannouncement  ORDER BY id DESC LIMIT 0,1";

$result = mysql_query($sql);
echo "<table border='0'>";

while($row = mysql_fetch_array($result))
  {
  

	echo "<form action=save.php method=post>";	
	
 
  echo "<textarea disabled width:350px name=quest value=". $row['text'] . ">". $row['text'] . ".</textarea>";
  echo "</br>";
 echo "<input type=radio name=rdbt required value=yes>"."yes"."</th>";
 echo "<input type=radio name=rdbt required value=no>"."no"."</th>";
echo "</br>"; 
echo "<input type=submit id=submit class=classname value=SUBMIT width=300px height=20px>"."</center>";
  
  	}
  


?> 

</font>
</div>
			
			
</body>
</html>