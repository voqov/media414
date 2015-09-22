<?php 
	require "DB_Connector.php";
	
	$conn = connect_and_create();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if( !empty($_POST["code"]) ) {
			$query = "INSERT INTO Subject (code";
			$values= "VALUES(". quote($_POST["code"]);
			if( !empty($_POST["name"]) ) {
				$query .=",name";
				$values.="," . quote($_POST["name"]);
			}
			if( !empty($_POST["semester"]) ) {
				$query .=",semester";
				$values.="," . $_POST["semester"];
			}
			if( !empty($_POST["detail"]) ) {
				$query .=",detail";
				$values.="," . quote($_POST["detail"]);
			}
			if( !empty($_POST["mandatory"]) ) {
				$query .=",isMandatory";
				$values.="," . $_POST["mandatory"];
			}
			if( !empty($_POST["tool"]) ) {
				$query .=",tool";
				$values.="," . quote($_POST["tool"]);
			}
			
			sendQuery($conn,$query.") ".$values.")");
		}
	}
?>

<?php echo "<script>window.location.replace('main_page.html');</script>";?> 

