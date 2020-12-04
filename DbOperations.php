<?php
class DbOperations{
		private $con;
		function __construct(){
			require_once dirname(__FILE__).'/DbConnect.php';
			$db = new DbConnect();
			$this->con = $db->connect();
		}
		function createUser($enroll_no, $name, $year, $college, $semester, $branch, $pass, $conf_password, $email, $conf_email, $gender, $mobile_no){
			$password = md5($pass);
			$stmt = $this->con->prepare("INSERT INTO 'studentregister' (`enroll_no`, `name`, `year`, `college`, `semester`, `branch`, `password`, `conf_password`, `email`, `conf_email`, `gender`, `mobile_no`, `stud_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NULL);");
			$stmt->bind_param("sss",$enroll_no, $name, $year, $college, $semester, $branch, $password, $conf_password, $email, $conf_email, $gender, $mobile_no);
			if($stmt->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
?>