<fieldset>
			<h1>XCompany</h1>
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
                        <a href="Editprofile.php"> Edit Profile</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="picture.html"> Change Profile Picture</a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="change_password.html"> Change Password </a>
                    </td>
                </tr>
                    <tr>
                    <td>
                        <a href="logcheck.php"> Logout</a>
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
if(isset($_COOKIE['userName'])){
		
    echo $_COOKIE['userName'];
}
?>
     </td>
				<td rowspan="7" align="center">
					<img width="128" src="../image/user.png"/>
                    <br/>
                    <a href="../write/picture.html">Change</a>
				</td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php 
if(isset($_COOKIE['email'])){		
    echo $_COOKIE['email'];
}
?>
     </td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php 
if(isset($_COOKIE['gender'])){

		
    echo $_COOKIE['gender'];
}
?></td>
			</tr>
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?php 

		
        echo $_COOKIE['date'];
        echo "/";
        echo $_COOKIE['month'];
        echo "/";
        echo $_COOKIE['year'];
?>
     </td>
			</tr>
		</table>	
        <hr/>
        <a href="Editprofile.php">Edit Profile</a>	
	</form>
</fieldset>