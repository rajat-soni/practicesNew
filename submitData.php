<?php 
include '../config.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $mobile = $_POST['mobile'];
	 $add = $_POST['address'];
	 $city = $_POST['city'];
	  $course = $_POST['course'];
	  foreach($course as $key=>$value){


	 echo $sql = "INSERT INTO student_tbl (name,mobile,address,city,course)
	 VALUES ('$name','$mobile','$add','$city','$value')";
	 print_r($sql);
	 die;
    
	 $runQry=$connection->query($sql); 
	}

	 if($runQry){

		header("location:student.php");
	 }else{

	 	echo "data not get";
	 }
	 } else {
		echo "data not submitted";
}
?>
