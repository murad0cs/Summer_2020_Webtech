function validate()
{
    var flag = false
    var userName=document.getElementById('name').value;
    
	if(userName=='')
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}
	else
	{
		if((userName[0]>='A' && userName[0]<='Z') ||(userName[0]>='a' && userName[0]<='z'))
		{
			if(userName.split(" ").length>=2)
			{
				
                for(i=0;userName.length>0;i=i+1)
                {
                    if(!((userName[i]>='A' && userName[i]<='Z') ||(userName[i]>='a' && userName[i]<='z') || userName[i]=='.' || userName[i]=='-' || userName[i]==' '))
                    {
                        document.getElementById('msg').innerHTML="Name is not valid";
                        flag = false;
                    }
                }
				flag = true;
			}
			else
			{
				document.getElementById('msg').innerHTML="Name must contain at least 2 words";
				flage=  false;
			}
		}
		else
		{
			document.getElementById('msg').innerHTML="Name must be started with a letter";
			flag = false;
		}
    }
    //name end

    //email starts
    var  emailveri =document.getElementById('email').value;
	if(emailveri!="")
	{
		if(emailveri.split("@").length>=5)
		{
            emailbreak=email.split("@");
            emailbreak[1] = emaildot
			if(emaildot.split(".").length>=5)
			{
				
				flag = true;
			}
			else
			{
				document.getElementById('emailmsg').innerHTML="Please enter valid email. .com is missing";
				flage =  false;
			}
		}
		else
		{
			document.getElementById('emailmsg').innerHTML="Must enter valid email";
			flag = false;
		}
	}
	else
	{
		document.getElementById('emailmsg').innerHTML="Email cannot be empty";
		flag = false;
    }
    //email ends
    

    //gender starts
    var gender1 = document.getElementById("Male");
	
    var gender2 = document.getElementById("Female");

    var gender3 = document.getElementById("Other");


	if(gender1.checked  == true || gender2.checked == true || gender3.checked == true ){

		
        flag = true;
        
    }
    
    else{
    
        alert("Cant not be null ");
        
       
        flag = false;
    }
    //gender ends

    //date starts
    var day=document.getElementById('Date').value;
	var month=document.getElementById('Month').value;
	var year=document.getElementById('Year').value;
	if((day!="") && (month!="") && (year!=""))
	{
		if((parseInt(day,10)>0 && parseInt(day,10)<32) && (parseInt(month,10)>0 && parseInt(month,10)<13) && (parseInt(year,10)>1899 && parseInt(year,10)<2017))
		{
			return true;
		}
		else
		{
			document.getElementById('msg').innerHTML="Enter a valid date with in range";
			return false;
		}
	}
	else
	{
		document.getElementById('msg').innerHTML="Field cannot be empty";
		return false;
	}


	
}
function removerName()
{
	var userName =document.getElementById('name').value;
	if(userName!="")
	{
		document.getElementById('msg').innerHTML="Please Enter valid username";
	}
}
function xyzName(){

	if(document.getElementById('name').value == ""){
		document.getElementById('msg').innerHTML = "this field is required!";
	}
}
function removerEmail()
{
	var email =document.getElementById('email').value;
	if(email!="")
	{
		document.getElementById('emailmsg').innerHTML="Please Enter valid email";
	}
}
function xyzEmail(){

	if(document.getElementById('email').value == ""){
		document.getElementById('emailmsg').innerHTML = "this field is required!";
	}
}

function removerday()
{
	var day=document.getElementById('Date').value;
	if(day!="")
	{
		document.getElementById('msg1').innerHTML="";
	}
}
function removermonth()
{
	var month =document.getElementById('Month').value;
	if(month!="")
	{
		document.getElementById('msg1').innerHTML="";
	}
}
function removeryear()
{
	var year =document.getElementById('Year').value;
	if(year!="")
	{
		document.getElementById('msg1').innerHTML="";
	}
}
function xyzday(){

	if(document.getElementById('Day').value == ""){
		document.getElementById('msg1').innerHTML = "this field is required!";
	}
}
function xyzmonth(){

	if(document.getElementById('Month').value == ""){
		document.getElementById('msg1').innerHTML = "this field is required!";
	}
}
function xyzyear(){

	if(document.getElementById('Year').value == ""){
		document.getElementById('msg1').innerHTML = "this field is required!";
	}
}
