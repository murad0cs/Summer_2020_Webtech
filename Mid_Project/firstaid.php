<fieldset>
			<h1>Doctor Management System</h1>
            <table>
                <legend>Account</legend>
                <form>
              <tr>
                  <td>
                      <a href="Dashboard.php"> Dashboard</a>
                  </td>
                </tr>
                <tr>
                  <td>
                      <a href="profile.php"> View Profile</a>
                  </td>
                </tr> 
                <tr>
                    <td>
                        <a href="changename.php"> Change Name</a>
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
                        <a href="about.html"> About Me</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="firstaid.php"> First Aid </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchdoc.php">Search Doctors</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="searchhospti.php">Search Hospitals</a>
                    </td>
                </tr>
                </form>
            </table>
    </fieldset>
<fieldset>
    <legend><b>First Aid:</b></legend>
    <form action="me.php" method="post">

        
        <br />
        <tr>
            <?php
           //$host="localhost";
          // $user="root";
           //$pass="";
           // $db="customer";
        //$username = $_POST['userName'];
    //$password = $_POST['password'];
   // $conn= mysqli_connect($host,$user,$pass,$db);
	        //$result = mysqli_query($conn, 'select * from customer');
            echo "</table>";
            ?>
            
<!DOCTYPE html>
<html>
<head>
      </head>
<body>
	<h1>Customer List</h1>

	<title>Customer List</title>


	
	<table border=1>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Disease</td>
			<td>Condition</td>
			
		</tr>

		<?php  //while($data = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo "122" ?></td>
			<td><?php echo 'Murad'?></td>
			<td><?php echo 'Cold' ?></td>
			<td><?php echo 'Normal' ?></td>
			
		</tr>
        <tr>
			<td><?php echo "123" ?></td>
			<td><?php echo 'Sabbir'?></td>
			<td><?php echo 'Diabe' ?></td>
			<td><?php echo 'Medium' ?></td>
			
		</tr>
        <tr>
			<td><?php echo "125" ?></td>
			<td><?php echo 'Rafi'?></td>
			<td><?php echo 'High Pressure' ?></td>
			<td><?php echo 'Medium' ?></td>
			
		</tr>
        <tr>
			<td><?php echo "126" ?></td>
			<td><?php echo 'Jubayer'?></td>
			<td><?php echo 'High Pressure' ?></td>
			<td><?php echo 'Medium' ?></td>
			
		</tr>
        
    

		<?php
                //} 
        ?>
    </table>
    <tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp<td>
				<td>:</td>
				<td><input name="id" type="text"></td>
				<td></td>
			</tr>
    <tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Reason&nbsp&nbsp&nbsp<td>
				<td>:</td>
				<td><input name="Reason" type="text"></td>
				<td></td>
			</tr>
    <tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Medicine<td>
				<td>:</td>
				<td><input name="Medicine" type="text"></td>
				<td></td>
			</tr>
    <br>
</body>
</html>          
        </tr>
        <tr>
            
        </tr>
       
				<tr>
            <td style="text-align: right;"><span><b>Note</b><br>
            (Please Type Any Note About Customer)</span></td>
            <td>
                <textarea cols="50" rows="5" name="cmnt"></textarea>
            </td>
        </tr>
			
        <hr />
        <input name="submit" type="submit" value="Submit">
		<input type="reset">
    </form>
    <table>
        
    </table>
</fieldset>
