<?php
include("../../functions/centerstageFlowers-connect.php");

$error = ($_POST["strName"] && $_POST["strEmailAddress"])?false:true;

if ($error)
{
	header("location:index.php?pagesID=5?error=true");
}else{

	$sql = "INSERT INTO users (
		strName, 
		strEmailAddress,
		nPhoneNumber,
		strMessage
		) 

	VALUES (
		'".$_POST["strName"]."', 
		'".$_POST["strEmailAddress"]."',
		'".$_POST["nPhoneNumber"]."', 
		'".$_POST["strMessage"]."'
	)";

	insertSql($sql);

	header("location: index.php?pagesID=6");
}

if(isset($_POST['submit'])) {
	$strName=$_POST['strName'];
	$strEmailAddress=$_POST['strEmailAddress'];
	$nPhoneNumber=$_POST['nPhoneNumber'];
	$strMessage=$_POST['strMessage'];

	$to='';
	$subject='Form Submission';
	$message="Name: ".$strName."\n"."Email address: ".$strEmailAddress."\n"."Phone number: ".$nPhoneNumber."\n"."Message: ".$strMessage;
	$headers="From: ".$strEmailAddress;

	if(mail($to, $subject, $message, $headers)){
		header("location: index.php?pagesID=6");
	}
	else {
		echo "Something went wrong";
	}
}
?>