var req= new XMLHttpRequest();
function requestDb() {
	if(req!=null) {
		req.open('GET', 'db_info.php', true);//prepare a request for the file
		req.onreadystatechange= updateDb;//set a function that handles the data
		req.send();//send the request
	}
}
function updateDb() {
	if((req.readyState==4) && (req.status==200)) {
		document.getElementById('pwd_db').innerHTML= req.responseText;
	}
}
