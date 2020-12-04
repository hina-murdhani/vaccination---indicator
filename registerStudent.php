<?php

require_once'../includes/DbOperations.php';
 $response=array();

 if($_SERVER['REQUEST_METHOD']=='POST'){
	
	/*$enroll_no=$_POST['enroll_no'];
	$name=$_POST['name'];
	$year=$_POST['year'];
	$college=$_POST['college'];
	$semester=$_POST['semester'];
	$branch=$_POST['branch'];
	$password=$_POST['password'];
	$conf_password=$_POST['conf_password'];
	$email=$_POST['email'];
	$conf_email=$_POST['conf_email'];
	$gender=$_POST['gender'];
	$mobile_no=$_POST['mobile_no'];
	
	$password=password_hash($password,PASSWORD_DEFAULT);
	$conf_password=password_hash($conf_password,PASSWORD_DEFAULT);
	
	require_once'Dbconnect.php';
	$sql="INSERT INTO studentregister (enroll_no,name,year,college,semester,branch,password,conf_password,email,conf_email,gender,mobile_no,stud_id) VALUES ('$enroll_no', '$name', '$year', '$college', '$semester', '$branch', '$password', '$conf_password', '$email', '$conf_email', '$gender', '$mobile_no')";
	if(mysqli_query($conn,$sql)){
		$result["success"]="1";
		$result["message"]="success";
		
		echo json_encode($result);
		mysqli_close($conn);
	}else{
		$result["success"]="0";
		$result["message"]="error";
		
		echo json_encode($result);
		mysqli_close($conn);

	}*/
	if(
		isset($_POST['enroll_no']) and 
			isset($_POST['name']) and
				isset($_POST['year']) and
					isset($_POST['college']) and
						isset($_POST['semester']) and
							isset($_POST['branch']) and
								isset($_POST['password']) and
									isset($_POST['conf_password']) and
										isset($_POST['email']) and
											isset($_POST['conf_email']) and
												isset($_POST['gender']) and
													isset($_POST['mobile_no']))
		{
			//operate the data further
			$db=new DbOperations();
			if($db->createUser(
				$_POST['enroll_no'],
				$_POST['name'],
				$_POST['year'],
				$_POST['college'],
				$_POST['semester'],
				$_POST['branch'],
				$_POST['password'],
				$_POST['conf_password'],
				$_POST['email'],
				$_POST['conf_email'],
				$_POST['gender'],
				$_POST['mobile_no']
			)){
				$response['error']=false;
				$response['message'] ="User registered sucessfully";
			}else{
				$response['error']=true;
				$response['message'] ="Some error occurred please try again";
			}
	}else{
		$response['error']= true;
		$response['message'] = "Required fields are missing";

	}	
}else{
	$response['error'] = true;
	$response['message'] = "oh Invalid Request";
}
echo json_encode($response);
?>