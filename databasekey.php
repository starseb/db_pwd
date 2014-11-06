<!doctype html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Databasekey</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="q_style.css" rel="stylesheet" type="text/css">
<script src="http_request.js"></script>
<?php require('show_date.php'); require('db_info.php');?>
</head>
<body onfocus="requestDb()">
<div id="main">
	<section id="info">
		<?php display_date();echo welcome(); echo $db_conn;?>
	</section>
	<section id="query">
		<form method="post" action="akey_process.php">
			<fieldset>
				<!--<legend>Akey database</legend>-->
				<label for="key">Your password to be verified:</label>
				<input id="key" name="key" required>
				<input type="submit" value="verify">
			</fieldset>
		</form>
		<p id="pwd_db"><?php echo $pwd_db ?></p>
	</section>
</div>
</body>
</html>
