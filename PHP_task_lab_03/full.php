<?php

	if(isset($_GET['submit'])){

		$a = $_GET['sname'];
        $e = $_GET['email'];
        $g = $_GET['gender'];
        $d = $_GET[Date];
        $m = $_GET[Month];
        $y = $_GET[Year];
        $deg1 = $_GET['checkbox1'];
        $deg2 = $_GET['checkbox2'];
        $deg3 = $_GET['checkbox3'];
        $blood = $_GET['value'];
        $id = $_GET[user_id];
        $file = $_GET['file_name'];
        
          
        $alphats = array_merge(range('A', 'Z'), range('a', 'z'),array('.','/'));
        
        //Validating Word
        if(str_word_count($a)<2)
        {
            echo"Invalid name!!!! Must be two words.";
        }
        
        //validating Empty
		if(strlen($a)==null){

			echo "Invalid request";
        }
        //Validating !st letter
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
        //Date validation
        if($d == null and $m == null and $y == null)
        {
            echo"Cant not be empty";
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
        //degree validation
        
        if($deg1== null || $deg2==null || $deg3==null)
        {
           echo"Not valid";
        }
        else
        {
          echo $deg1;
          echo $deg2;
          echo $deg3;
        }
        //blood validation 
        if($blood==null)
        {
            echo"Must select one Group !!!";
        }
        else
        {
            echo $blood;
        }
        //Profile picture validation
        if($id==null and id<0)
        {
            echo "Invalid id!!!!";
        }
        
        else
        {
            echo $id;
        }
        if(empty($file))
        {
            echo"Please insert Picture ";
        }
        else
        {
            echo $file;
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
            <legend>Degree</legend>
             
                            <br><input type="checkbox" name=""> SSC
					        <input type="checkbox1" name=""> HSC 
					        <input type="checkbox2" name=""> BSC. 
					        <input type="checkbox3" name=""> MSc. <br>
                            <input type="submit" name="submit" value="Submit"><br>

                        </form>
          <legend>Blood Group</legend>
           <form>
                            <select name="">
                                 <option value="">A+</option>
				                 <option value="">A-</option>
				                <option value="">B+</option>
				                <option value="">B-</option>
                            </select> <br>
                            <input type="submit" name="submit" value="Submit"><br>


                        </form>
                    
                
        <legend>Profile Picture</legend>
        <form>
        User Id:
          <input type="number" name="user_id" value="" placeholder="" size="80px"> <br>
        Picture:
           <input type="file" name="file_name"> <br><br>
           <input type="submit" name="submit" value="Submit"><br>

        </form>

        

		</fieldset>

	</form>

</body>
</html>