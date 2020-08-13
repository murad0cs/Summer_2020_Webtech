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
    <legend><b>About Me:</b></legend>
    <form action="me.php" method="post">

        
        <br />
       
				<tr>
            <td style="text-align: right;"><span><b>About me</b><br>
            (Please Type About You)</span></td>
            <td>
                <textarea cols="50" rows="5" name="cmnt"></textarea>
            </td>
        </tr>
			
        <hr />
        <input name="submit" type="submit" value="Submit">
		<input type="reset">
    </form>
    <table>
        <tr>
				<td><footer> Copyright &copy; 2020</footer>
</td>
				
			</tr>
    </table>
</fieldset>
Comments: <?php echo $_POST["cmnt"]; ?><br>