<?php include '../../config.php' ?>
<?php
include('cms/config.php');

		$rdbt=$_POST['rdbt'];
		$quest=$_POST['quest'];
		$id= student($_SESSION['student'],'student');
			
		$sql="INSERT INTO poll VALUES ('NULL','$quest', '$rdbt', '$id')";

			$result=mysql_query($sql);
				if($result){
						header('Refresh: 3; url=sam.html');
							}
				else {
				echo"<h1>";
				echo "ERROR";
				echo"</h1>";
					}
					