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
		
		<table>
			<tr>
				<td>Welcome to XCompany        Loagged in as<a href="profile.php"> Home</a>  <a href="Logout.php"> Logout</a> </td>
				
			</tr>
            <tr>
                <td>
                    <fieldset>
                        <h1>Welcome Home
                            <?php 
if(isset($_COOKIE['userName'])){

		
    //name == $_COOKIE['userName'];
		
    echo $_COOKIE['userName'];
}
?>
                        </h1>
                          
</fieldset>
                </td>
            </tr>
			
			<tr>
				<td><footer> Copyright &copy; 2017</footer>
</td>
				
			</tr>
            </table>
    </fieldset>
    </body>
</html>
