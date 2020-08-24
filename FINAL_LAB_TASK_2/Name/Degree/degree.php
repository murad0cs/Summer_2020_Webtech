<?php
if (isset($_GET['submit'])) 
{
    if (isset($_GET['SSC']) || isset($_GET['HSC']) || isset($_GET['BSc'])) 
	{
		if (isset($_GET['SSC'])) 
		{
            echo"Your selected Degree is :";
            echo'<br>';
            echo $_GET['SSC'];
            echo'<br>';
		}
		if (isset($_GET['HSC'])) 
		{
            echo"Your selected Degree is :";
            echo'<br>';
            echo $_GET['HSC'];
            echo'<br>';
		}
		if (isset($_GET['BSc'])) 
		{
            echo"Your selected Degree is :";
            echo'<br>';
            echo $_GET['BSc'];
            echo'<br>';
		}
	
	}

}
?>