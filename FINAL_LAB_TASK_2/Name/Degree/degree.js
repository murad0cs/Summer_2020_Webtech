"use strict"









function validate(){

	var ssc = document.getElementById("SSC");
	
    var hsc = document.getElementById("HSC");

    var bsc = document.getElementById("BSc");


	if(ssc.checked  == true || hsc.checked == true || bsc.checked == true ){

		
        return true;
        
    }
    
    else{
    
        alert("At lest one must be selected");
        
       
        return false;
    }

    
    


}

