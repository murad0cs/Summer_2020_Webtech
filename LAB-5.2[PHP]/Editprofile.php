<!DOCTYPE html>
<html>
<head>
	<title>XCompany</title>
   
</head>
<body>
    
      
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
                        <a href="Change_passwort.html"> Change Password </a>
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
                
    
    
    <form action="Regcheck.php" method="post">
		<fieldset>
			<legend>Edit Profile</legend>
		
		<table>
			<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			
					
			
					
			
					
		
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio">Male
						<input name="gender" type="radio">Female
						<input name="gender" type="radio">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input name= "date" type="text" size="2" />/
						<input name ="month" type="text" size="2" />/
						<input name ="year" type="text" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>>
			<tr>
				<td></td>
				
                
			</tr>
		</table>
        
		<hr/>
		<input name="submit" type="submit" value="Submit">
        </fieldset>
	</form>
    <form>
<table>
                		
			<tr>
				<td><footer> Copyright &copy; 2017</footer>
</td>
				
			</tr>      
            
		</table>
		
	</form>
</body>
</html>

