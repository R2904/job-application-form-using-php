<!DOCTYPE html>
<html>
<head>
	<title>Job Application</title>
	<style>
		
input[type=text]{
	width: 25%;
	padding: 9px;
	margin: 5px 0;
	border: 1px solid #000000;
	outline: none;
}		
input[type=text]:focus{
	background-color: lightblue;
}
input[type=email]{
	width:25%;
	padding: 9px;
	margin: 5px 0;
	border: 1px solid #000000;
	outline: none;
}
input[type=email]:focus {
	background-color: lightblue;
}
input[type=number]{
	width: 25%;
	padding: 9px;
	margin: 5px 0;
	border: 1px solid #000000;
	outline: none;
}
input[type=number]:focus {
	background-color: lightblue;
}
input[type=file]{
	width:25%;
	margin: 5px 0;
	border: 1px solid #ccc;
    display: inline-block;
    padding: 9px;
    cursor: pointer;
    outline: none;
}
input[type=file]:focus{
	background-color: lightblue;
}
input[type=submit]{
	width: 10%;
	padding: 10px;
	margin:5px 0;
	box-sizing: border-box;
	border: 2px solid #000000;
	outline: none;
	background-color: brown;
	color: white;
}
input[type=submit]:focus{
	background-color: green;
}
input[type=radio]{
	width: 5%;

	margin: 5px 0;
}
	</style>
</head>
<body>
	<form action="#" method="post">
		Name:-&nbsp;&nbsp;
		<input type="text" name="name">
		<br>
		Gender:

		<input type="radio" name="gen"value="Male">Male<input type="radio" name="gen" value="Female">Female
		<br>
		Email:-&nbsp;&nbsp;
		<input type="email" name="email">
		<br>
		mobile:-
		<input type="number" name="mobile">
		<br>
		age:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="age">
		<br>

		exp:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="number" name="exp">
		<br>
		skills:-&nbsp;&nbsp;
		<input type="text" name="skills">
		<br>
		resume:
		<input name="file1" type="file" accept="application/pdf">
		<br>
		<input type="submit" name="submit" value="apply">
	</form>
	<?php
include("config.php");
if(isset($_Post['submit']))
{
	$name=$_Post['name'];
	$gen=$_Post['gen'];
	$email=$_Post['email'];
	$mobile=$_Post['mobile'];
	$age=$_Post['age'];
	$exp=$_Post['exp'];
	$skills=$_Post['skills'];
	$file1=$_Post['file1'];

    $result=mysqli_query($mysqli,"insert into users values('$name,'$gen','$email','$mobile','$age','$exp','$skills','$file1')");

    if($result)
    {
    	echo"applied successfully";
    }
    	else{
    		echo "application failed";
    	}
}


?>


</body>
</html>

