<?php session_start(); ?>
<fieldset>
			<h1>Doctor Management System</h1>
            <table>
                <legend>Account</legend>
                <form>
             
                <tr>
                  <td>
                      <a href="profile.php"> View Profile</a>
                  </td>
                </tr> 
                <tr>
                    <td>
                        <a href="changename.html"> Change Name</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="picture.html">Upload Profile Picture</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="change_password.html"> Change Password </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="logout.php"> Logout</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="givs.php"> Give Suggestion </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="eduqua.html"> Add Degree</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="ratings.php">My Ratings</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="about.php"> About Me</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="firstaid.php"> First Aid </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchdoc.html">Search Doctors</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchhos.html">Search Hospitals</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="home.php">Home</a>
                    </td>
                </tr>
                </form>
            </table>
    </fieldset>



<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php 
                     $host="localhost";
    $user="root";
    $pass="";
    $db="intern";
    $conn= mysqli_connect($host,$user,$pass,$db);
 $result = mysqli_query($conn,"select Name,Email,Password,User_Name,Password,Gender,DOB,Phone from intern where User_Name='" . $_SESSION['userName'] . "' ");

$row = mysqli_fetch_array($result);
echo $row['Name']

?>
     </td>
				<td rowspan="7" align="center">
                    <br/>
                    
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php 
                    
echo $row['Email'];
    //echo $_COOKIE['email'];

?>
     </td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php 
	
    echo $row['Gender'];

?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>: </td>
				<td><?php 

		
        echo $row['DOB'];
       
?>
     </td>
                
			</tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
				<td>Phone</td>
				<td>: </td>
				<td><?php 

		
        echo $row['Phone'];
       
?>
     </td>
                
			</tr>
          <?php 
            mysqli_close($conn);
            session_destroy(); ?>
            
		</table>	
        <hr/>
       	
	</form>
</fieldset>