<?php
//Set timezone and user
date_default_timezone_set('Europe/Rome');

//Functions to return date and greeting
function display_date() {
	setlocale(LC_TIME, 'eng');
	echo '<h1>' . strftime("%A %d %B %Y");
	/*return date('l, j F Y');*/
}
function welcome() {
	$hour = date('H:i:s');//H is 24h format, h is 12h format
	switch($hour) {
		case $hour<8: $saluto= ', it\'s ' . $hour . '.</h1><br><p>Just awake?! ';break;
		case $hour<13: $saluto= ', it\'s ' . $hour . '.</h1><br><p>Good day! ';break;
		case $hour<18: $saluto= ', it\'s ' . $hour . '.</h1><br><p>Good afternoon! ';break;
		case $hour<24: $saluto= ', it\'s ' . $hour . '.</h1><br><p>Good evening!'; break;
		default: echo "Salve!";
	}
	return $saluto;
}
/*Display user and greeting
echo display_date();
echo welcome();*/
?>
