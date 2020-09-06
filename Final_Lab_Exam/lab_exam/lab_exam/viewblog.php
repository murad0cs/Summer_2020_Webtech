<!DOCTYPE html>
<html>
<head>
	<title>Ajax Example</title>
</head>
<body>

		<h1 id="user">Search Blog</h1>

		<form>
            Enter the user name of the blogger:
			<input type="text" id="username" name="username" onkeyup="load()" /> 
			<input type="button" id="button" name="button" value="Click" /> 
		</form>

		<div id="searchdata"></div>

		<script>
			function load(){

				var username = document.getElementById('username').value;
				var xhttp = new XMLHttpRequest();
				
				xhttp.open('POST', 'getblog.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('username='+username);

				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){

						if(this.responseText != ""){
							document.getElementById('searchdata').innerHTML = this.responseText;
						}else{
							document.getElementById('searchdata').innerHTML = "";
						}
						
					}	
				}
			}
		</script>
</body>
</html>