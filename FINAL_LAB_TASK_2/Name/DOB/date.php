<?php
if(isset($_GET['submit']))
{
    $d = $_GET['date'];
    $m = $_GET['month'];
    $y = $_GET['year'];
    if (in_array($d,range(0,30)))
    {
        if (in_array($m,range(1,12)))
        {
            if(in_array($y,range(1900,2000)))
            {
                
                echo "Date:$d";
                echo"Month: $m";
                echo"Year: $y";
            }
            else{
                echo"Year is not in range";
            }
        }
        else{
            echo"Month is not in range";
        }
    }
                         
    else 
    {
        echo"Date is not in range";
    }

}


?>