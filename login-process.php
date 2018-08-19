<?php
session_start();
require_once('config/config.php');

	if(isset($_POST)){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$indicator = NULL;
		$conn = new mysqli(HOST,UN,PASS,DB) or die('Connection failed');
		$password = hash('sha256',$password);
		if (strpos($username,'@')) {
				$indicator = 'email';
		}else{
			$indicator = 'username';

		}
		$query = $conn->prepare("select id from users where ".$indicator."= ? and password =?");
		$query->bind_param('ss',$username,$password);
		if( $query->execute()) {
				$query->bind_result($id);
				$query->store_result();
				//update the active and login time 
				$login_at =date('Y-m-d H:i:s');
				$is_active = 1;
				$conn1 = new mysqli(HOST,UN,PASS,DB) or die('Connection failed');
				$query1 = $conn1->prepare("UPDATE users set is_active = ?, login_at = ?  where ".$indicator."=? and password =?");
				$query1->bind_param("ssss",$is_active,$login_at,$username,$password);
				$query1->execute();
			if($query->num_rows > 0){
				$query->fetch();
				$_SESSION['id'] = $id;
			  header('Location: dashboard');
			}else{
					$_SESSION['message'] = '<div class="alert alert-danger"><strong>Incorrect Password or Username!</strong> Please try again.
		</div>';

					header('Location: login');
			}
		}
	}else{

		



		
	}


