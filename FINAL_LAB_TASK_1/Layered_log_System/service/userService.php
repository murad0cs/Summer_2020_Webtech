<?php
	require_once('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
    }
    function getByID1($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company where id={$id}";
        $result = mysqli_query($conn, $sql);
        //print_r($result);
        $row = mysqli_fetch_assoc($result);
        //print_r($row);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from user where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
	}


	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into user values('', '{$user['username']}','{$user['password']}', '{$user['email']}', 'admin')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update user set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
    }
    function delete($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `user` WHERE id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
    }
    
    
    function getAllUser1(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from company";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
    }
    function insertcom($user1){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into company values('', '{$user1['company_name']}','{$user1['profile_description']}', '{$user1['industry']}','{$user1['company_website']}','{$user1['company_logo']}', '{$user1['user_account_id']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
        }
        function getAllUser1(){
            $conn = dbConnection();
    
            if(!$conn){
                echo "DB connection error";
            }
    
            $sql = "select * from company";
            $result = mysqli_query($conn, $sql);
            $users = [];
    
            while($row = mysqli_fetch_assoc($result)){
                array_push($users, $row);
            }
    
            return $users;
        }
    }
    function deletecom($user1){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM `company` WHERE id={$user1['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
    }
    function updatecompany($user1){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update  company set company_name = '{$user1['company_name']}', profile_description = '{$user1['profile_description']}', industry= '{$user1['industry']}', company_website= '{$user1['company_website']}', company_logo= '{$user1['company_logo']}', user_account_id='{$user1['user_account_id']}' where id={$user1['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
        }
    }
?>