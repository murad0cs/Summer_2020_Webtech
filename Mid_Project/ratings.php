<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Management System</title>
</head>
<body>
   
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
                        <a href="changename.php"> Change Name</a>
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
                        <a href="searchhospti.php">Search Hospitals</a>
                    </td>
                </tr>
                </form>
            </table>
		
		<table>
			<tr>
				<td>Welcome to System<a href="home.php"> Home</a>  <a href="Logout.php"> Logout</a> </td>
				
			</tr>
            <tr>
                <td>
                    <fieldset>
                        <h1><?php 
                            echo($_SESSION['userName']);
                            
                            ?> <br>
                            Your Rating is :(This ratings is collected from Customers.)
                        </h1>
                          
</fieldset>
                    <fieldset>
                        <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
</head>
<body>


<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

</body>
</html>

                    </fieldset>
                </td>
            </tr>
			
			
            </table>
    </fieldset>
    </body>
</html>