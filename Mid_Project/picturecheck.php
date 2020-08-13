<?php
	if(isset($_POST['submit']))
    {
        $file = $_FILES['picture'];
        print_r($file);
        $fileName = $_FILES['picture']['name'];
        $fileTmpName = $_FILES['picture']['tmp_name'];
        $fileSize = $_FILES['picture']['size'];
        $fileError = $_FILES['picture']['error'];
        $fileType = $_FILES['picture']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','png');
        if(in_array($fileActualExt, $allowed))
        {
            echo"Uploaded file";
            $fileNewname = uniqid('',true ).".".$fileActualExt;
            $filedestination = 'upload/'. $fileNewname;
            move_uploaded_file( $fileTmpName,$fileNewname );
            echo"File Uploaded";
            header("refresh:2; url= picture.html");
        }
        else
       {
          echo"Insert a Valid file please";
         }
    }
else
{
    echo"Insert a file please";
}
           
?>