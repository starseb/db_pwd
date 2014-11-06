<?php
//CONNECTION
require ('db_connect.php');

// Check connection
if ($dbc) {
	$db_conn= " Password database connected. ";
	$q = "SELECT serial FROM passwords";
	$r = mysqli_query($dbc, $q);	
	if($r) {
		if(mysqli_num_rows($r)!=0) {
			$rows= mysqli_num_rows($r);
			$pwd_db= $rows . " passwords in database.</p>";
			printf($pwd_db);
			mysqli_free_result($r);
		}else {
			$pwd_db= "0 passwords in database";
			printf($pwd_db);
			
		}
	}
	else {
		'<p>' . mysqli_error($dbc) . '</p>';
	}
}
else {
	$db_conn= " No connection to the password database '$db'.<br>";
	echo $db_conn;
}
?>
