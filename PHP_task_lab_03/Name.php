<?php

	if(isset($_GET['submit'])){

		$a = $_GET['sname'];
        $e = $_GET['email'];
        $g = $_GET['gender'];
        $d = $_GET[Date];
        $m = $_GET[Month];
        $y = $_GET[Year];
        
          
        $alphats = array_merge(range('A', 'Z'), range('a', 'z'),array('.','/'));
        
        
        if(str_word_count($a)<2)
        {
            echo"Invalid name!!!! Must be two words.";
        }
        

		if(strlen($a)==null){

			echo "Invalid request";
        }
        
        if(is_array($a,$alphats)==false){
            echo"Invalid name!!!! Must be 1st letter in name ";
        }
        if(is_numeric($a[0])==true){
            echo"Invalid name!!!! Must start with a letter ";
        }
               
        if (strlen($e)==null)
        {
            echo"Invalid email";
        }
        if (!filter_var($e, FILTER_VALIDATE_EMAIL)) 
        {
           echo "Invalid email format";

	    }
       
        
        else
        {
            echo $e,$a;
        }
        if (empty($g)) 
        {
            echo "Gender is required";
         } else 
        {
            echo $g;
        }
        
        if (!in_array($d,range(0,30)))
        {
            if (!in_array($m,range(1,12)))
            {
                if(!in_array($y,range(1900,2000)))
                {
                    echo"Invalid Date";
                }
            }
        }
                             
        else 
        {
            echo " Date:$d";
            echo"Month: $m";
            echo"Year: $y";
        }
    }
	

?>

<!DOCTYPE html>

<html>

<head>

	<title>Name Input</title>

</head>

<body>



	<form action="#" method="GET">

		<fieldset>

			NAME<br>

			<input type="text" name="sname" value=""><br>
            <input type="submit" name="submit" value="Submit"><br>
            Email <br>
            <input type="email" email="email" value=""> <button style="border: 3px solid blue; color: blue; width: 10px;" title='hint: sample@example.com'><b>i</b></button> <br>
            <input type="submit" name="submit" value="Submit"> 
            <legend> Gender </legend>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other<br><br>

			<input type="submit" name="submit" value="Submit"><br>
             <legend>Date of Birth<legend
                    
                        <form>
                            <input type="number" name="Date" value="" placeholder="" size=".25px"> 
                            /
                            <input type="number" name="Month" value="" placeholder="" size=".25px"> 
                            /
                           <input type="number" name="Year" value="" placeholder="" size=".25px"> 
                            (dd/mm/yyyy)  <br>
                            <input type="submit" name="submit" value="Submit"><br>
                            
                        </form>
                
            
           
                   

		</fieldset>

	</form>

</body>
</html>