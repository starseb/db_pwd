<?php
//Check connection
require ('db_connect.php');
//Assign password to a variable
$pwd = $_POST['key'];
//Create result set 
$q = "SELECT serial FROM passwords";
$r = mysqli_query($dbc, $q);
$column = array();
//Check if result set query is ok
if($r) {
	//Records in result set are = 0
	if(mysqli_num_rows($r)==0) {
		
		if(!is_numeric($pwd)) {
			echo " Non numerical password!";		
		}
		else{
			if(in_array($pwd, $column)) {
				echo " Password " . $pwd . " already in the database.";
			}else{
				mysqli_query($dbc, "INSERT INTO passwords (serial) VALUES ($pwd);");
				echo "The first password " . $pwd . " has been added to database";
			}
		}
	}
	else{//Records in result set are > 0
		while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
			$column[] = $row[0];
		}
		if(in_array($pwd, $column)) {
			echo " Password " . $pwd . " already in the database.";
		}
		elseif(!is_numeric($pwd)) {
			echo " Password non numerica!";     
		}		
		else{
			mysqli_query($dbc, "INSERT INTO passwords (serial) VALUES ($pwd);");
			echo "The password " . $pwd . " has been added to database";
		}
	}
}else{//result set query is not ok
	echo '<p>' . mysqli_error($dbc) . '</p>';
}
?>
