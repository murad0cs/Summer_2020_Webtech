"use strict"





function validate(){

	var username = document.getElementById('id').value;
	var password = document.getElementById('file').value;
	
	

	if(username == "" || Math.sign(username)!=1){
		document.getElementById('userMsg').innerHTML = "user id can't left empty or It can not be negative number";
		return false;

	}else if(password == ""){
		document.getElementById('fileMsg').innerHTML = "file can't left empty";
		return false;
    }
    


}

function remover(){
    document.getElementById('userMsg').innerHTML = "";
    document.getElementById('fileMsg').innerHTML = "";
    
}

function xyz(){

	if(document.getElementById('id').value == "" || Math.sign(document.getElementById('id').value) !=1) {
		document.getElementById('userMsg').innerHTML = "this field is required!";
    }
    elseif(document.getElementById('file').value == "")
    {
        document.getElementById('fileMsg').innerHTML = "this field is required!";

    }
}