<?php
if (isset($_GET['submit'])) 
{
    if (isset($_GET['blood'])) {
        echo"Your Blood Group is:";
        echo"<br>";
        echo $_GET['blood'];
    }

}
?>