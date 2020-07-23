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
<html>
	<head>
		<title>Image 1</title>
	</head>
	<body>

			<table width="100%" border="1">
				<tr height="100px">
					
					<td colspan="3" align="center">
						<h1>Person Profile</h1>

					</td>
				</tr>
				<tr>
					<td>
                        Name: <br>
                    </td>
                    <td>
                        <form>
                          <input type="text" name="sname" value=""><br>
    
                        </form>
                    </td>
                    
                    
                    <td width="100px">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Email: <br>
                    </td>
                    <td>
                        <form>
                                        <input type="email" email="email" value=""> <button style="border: 3px solid blue; color: blue; width: 10px;" title='hint: sample@example.com'><b>i</b></button> <br>

                        </form>
                    </td>
                    <td>
                        
                    </td>
                    
                </tr>
                <tr>
                     <td>
                        Gender: <br>
                    </td>
                    <td>
                        <form>
                            <input type="radio" name="gender" value="" >  Male 
				            <input type="radio" name="gender" value="" > Female
				            <input type="radio" name="gender" value="" > Other <br>
                        </form>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Date of Birth: <br>
                    </td>
                    <td>
                        <form>
                            <input type="number" name="Date" value="" placeholder="" size=".25px"> 
                            /
                            <input type="number" name="Month" value="" placeholder="" size=".25px"> 
                            /
                           <input type="number" name="Year" value="" placeholder="" size=".25px"> 
                            (dd/mm/yyyy)  <br>
                            <input type="submit" name="submit" value="Submit"><br>                
                        </form>
                    </td>
                    <td>
                        
                    </td>
                    
                </tr>
                <tr>
					<td>
                        Blood Group: <br>
                    </td>
                    <td>
                        <form>
                            <select name="">
                                 <option value="">A+</option>
				                 <option value="">A-</option>
				                <option value="">B+</option>
				                <option value="">B-</option>
                            </select> <br>

                        </form>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
					<td>
                        Degree: <br>
                    </td>
                    <td>
                        <form>
                            <input type="checkbox" name="checkbox1"> SSC 
					        <input type="checkbox" name="checkbox2"> HSC 
					        <input type="checkbox" name="checkbox3"> BSC. <br>
					       
                        </form>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Photo: <br>
                    </td>
                    <td colspan="2">
                        <input type="file" name="file_name"> <br><br>
                    </td>
                </tr>
                <tr height="100%">
                    
					<td colspan="3">
                        
                        <br>
                        <br>
                        <br>
                        
                        
                        
					</td>
                    
                </tr>
                <tr>
                    <td colspan="3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        <input type="submit" name="" value="Submit"> 
			                                                                              <input type="reset" name="" value="Reset"> 
                        
                    </td>
                </tr>
                
                    		
					
			</table>

	</body>
</html>