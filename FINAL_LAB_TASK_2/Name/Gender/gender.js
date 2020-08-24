"use strict"









function validate(){

	var gender1 = document.getElementById("Male");
	
    var gender2 = document.getElementById("Female");

    var gender3 = document.getElementById("Other");


	if(gender1.checked  == true || gender2.checked == true || gender3.checked == true ){

		
        return true;
        
    }
    
    else{
    
        alert("Cant not be null ");
        
       
        return false;
    }

    
    


}

