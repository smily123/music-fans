<?php
	$email=$_POST['email'];
	$reg=$_POST['password'];
	

	$conn=mysqli_connect("localhost","root","","login");

	if(!$conn)
	{
		echo "connection is not created";
	}

	$a="insert into loginbox(email_address,email_password)values('".$email."','".$reg."');";
	//$a="insert into student(stu_id,stu_name,stu_reg,stu_college,stu_result)VALUES(NULL,'$nam','$reg','$clg','$result')";
	$query=mysqli_query($conn,$a);

	if($query==true)
	{
		echo "record is inserted";
	}
	else
	{
		echo "record is not inserted";
	}
	mysqli_close($conn);

?>

