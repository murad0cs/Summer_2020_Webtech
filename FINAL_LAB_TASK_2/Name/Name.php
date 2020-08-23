<?php
if(isset($_GET['submit']))
{
	
    $name=$_GET['username'];
	if(strlen($name)>0)
	{
		if(str_word_count($name)>=2)
		{
			if(($name[0]>='A' && $name[0]<='Z') || ($name[0]>='a' && $name[0]<='z'))
			{
				
				
				for( $i=0;$i<strlen($name);$i++) 
				{
					if($name[$i]<'A' && $name[$i]!=' ' && $name[$i]!='.' && $name[$i]!='-')
					{
						echo "Name atleast contain two words Name";
						break;
					}
					elseif ($name[$i]>'Z') 
					{
						if($name[$i]<'a')
						{
							echo "Name is not correct";
							break;
						}
						elseif ($name[$i]>'z') {
							echo "Name is not correct";
							break;
                        }
                        else{
                            echo"Name entered";
                            echo "<br>";    echo $name;
                        break;
                        }
					}
				}
			
			}
			else
			{
				echo "Name Can contain only A-Z , a-z";
			}
		}
		else
		{
			echo "Name must contain atleast 2 words";
        }
       
		
	}
	else
	{
		echo "Name can not be empty";
    }
    
	
    
}



?>