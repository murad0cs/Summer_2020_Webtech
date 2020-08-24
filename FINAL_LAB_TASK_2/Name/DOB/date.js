"use strict"



function validate(){

    var d = document.getElementById('date').value;
    var m = document.getElementById('month').value;
    var y = document.getElementById('year').value;


	
	

	if(d  == "" ||m  == "" ||y  == "" ){
		document.getElementById('userMsg').innerHTML = "Date can't left empty";
		return false;

	}else{
		return true;
	}


}

function remover(){
	document.getElementById('userMsg').innerHTML = "";
}

function Name(){

	if(document.getElementById('date').value == "" && document.getElementById('month').value == "" && document.getElementById('month').value == ""){
		document.getElementById('userMsg').innerHTML = "Every field is required!";
    }
    
}