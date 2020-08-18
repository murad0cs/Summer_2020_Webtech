<?php 
	session_start();
	require_once('../php/session_header.php');
    require_once('../service/userService.php');
   



	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_user_list.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_user_list.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
    }
    //delete user
    if(isset($_POST['delete'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}
		else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'id'=> $id
			];

			$status = delete($user);

			if($status){
				header('location: ../views/all_user_list.php?success=done');
			}
			else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
    }
    //add compnay info
    if(isset($_POST['create_company'])){
        
		$cname 	= $_POST['company_name'];
		$pd 	= $_POST['profile_description'];
        $i 		= $_POST['iindustry'];
        $web 	= $_POST['company_website'];
      
      
        $id11 = $_POST[user_account_id];
        
        $file = $_FILES['company_logo'];
        $fileName = $_FILES['picture']['name'];
        $fileTmpName = $_FILES['picture']['tmp_name'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','png');
        $fileNewname = uniqid('',true ).".".$fileActualExt;
        $filedestination = 'upload/'. $fileNewname;
        move_uploaded_file( $fileTmpName,$fileNewname );


        
        
        
        $allowed = array('jpg','png');





		if(empty($cname) || empty($pd) || empty($i)|| empty($web)|| empty($filedestination) || empty($id11)){
			header('location: ../views/ccreate.php?error=null_value');
		}else{

			$user1 = [
				'company_name'=> $cname,
				'profile_description'=> $pd,
                'industry'=> $i,
                'company_website'=> $web,
                'company_logo'=> $filedestination,
                'user_account_id'=> $id11
			];

            $status = insertcom($user1);
            //move_uploaded_file('image','tmp_name');


			if($status){
				header('location: ../views/allcompany.php?success=done');
			}else{
				header('location: ../views/ccreate.php?error=db_error');
			}
		}
    }
    
//delete Company
    if(isset($_POST['delete_company']))
    {
        
            $cname 	= $_POST['company_name'];
            $pd 	= $_POST['profile_description'];
            $i 		= $_POST['industry'];
            $web 	= $_POST['company_website'];
            $image 	= $_POST['company_logo'];
            $id11 = $_POST[user_account_id];
    
            if(empty($cname) || empty($pd) || empty($i)|| empty($web)|| empty($image) || empty($id11)){
                header('location: ../views/editcompany.php?id={$id}');
            }else
            {
			$user1 = [
				'company_name'=> $cname,
				'profile_description'=> $pd,
                'industry'=> $i,
                'company_website'=> $web,
                'company_logo'=> $image,
                'user_account_id'=> $id11
				
			];

			$status = deletecom($user1);

			if($status){
				header('location: ../views/allcompany.php?success=done');
			}
			else{
				header('location: ../views/editcompany.php?id={$id}');
            }
        }
        
        
      
    }
//edit company or update

    if(isset($_POST['edit_company'])){

        $cname 	= $_POST['company_name'];
        $pd 	= $_POST['profile_description'];
        $i 		= $_POST['industry'];
        $web 	= $_POST['company_website'];
        $image 	= $_POST['company_logo'];
        $id11 = $_POST[user_account_id];

        if(empty($cname) || empty($pd) || empty($i)|| empty($web)|| empty($image) || empty($id11)){
            header('location: ../views/editcompany.php?id={$id}');
        }else
        {
        $user1 = [
            'company_name'=> $cname,
            'profile_description'=> $pd,
            'industry'=> $i,
            'company_website'=> $web,
            'company_logo'=> $image,
            'user_account_id'=> $id11
            
        ];

			$status = updatecompany($user1);

			if($status){
				header('location: ../views/allcompany.php?success=done');
			}else{
				header('location: ../views/editcompany.php?id={$id}');
			}
		}
    }





?>