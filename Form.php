<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
</head>
<body>

<?php

$firstName=$lastName= $Gender=$Email=$userName=$password=$rMail="";
$firstNameErr=$GenderErr=$LastNameErr=$EmailErr=$UserErr=$PassErr=$REmailErr="";
if($_SERVER['REQUEST_METHOD'] == "POST") {


if (empty($_POST['fname'])) {

$firstNameErr="Please Enter Name";}
else {$firstName=$_POST['fname'];
		}
if (empty($_POST['lname'])) {
$LastNameErr="Please Enter Last Name";}
else {$lastName=$_POST['lname'];
		}
if (empty($_POST['email'])) {
$EmailErr="Please Enter Email";}
else {$Email=$_POST['email'];
}

if(empty($_POST['gmale']) && empty($_POST['gfemale']) ) {
$GenderErr = "Please Select Gender";}
else {if(!empty($_POST['gmale'])){
$Gender = $_POST['gmale'];}else
{$Gender = $_POST['gfemale'];}
}
if (empty($_POST['uname'])) {
$UserErr="Please Enter User";}
else {$userName=$_POST['uname'];}
if (empty($_POST['pass'])) {
$PassErr="Please Enter Password";}
else {$password=$_POST['pass'];}

if (empty($_POST['remail'])) {
$REmailErr="Please Enter email";}
else {$rMail=$_POST['remail'];}
if ($firstNameErr=="" && $GenderErr=="" && $LastNameErr== "" && $EmailErr== "" && $UserErr== "" && $PassErr== "" && $REmailErr=="") {
echo "Success" .$firstName;

 $hostname = "localhost";
			$username = "wt_user_1";
			$password = "123";
			$dbname = "user";

&conn1 = new mysqli(&hostname ,&username, &password, &dbname);
if ($conn1->connected_error)
{
  echo "Database connection fail ";
  echo $conn1->connected_error;
}

else {
	$sql1 =  "insert into user "(firstName,lastname, gender ,username ,password) values ('".$firstName"','".$lastName"','".$gender"','".$email"','".$username"','".$password"',)
}

if($conn1->quary($sql1))
{
		    echo "Data Successfully saved <br>";
		}
         header("location: Login.php");
		}

      

	}




      

	}


	  ?>
	<h1>File upload</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

	<fieldset>
    <legend>Basic Information :</legend>

	<label for="firstName">First Name : </label>
	<input type="text" id="firstName" name="fname" value="<?php echo $firstName ?>">
	<?php echo $firstNameErr; ?>

	<br>

	
        <label for="lastName">Last Name : </label>
		<input type="text" name="lname" id="lastName" value="<?php echo $lastName ?>">
		<p><?php echo $LastNameErr; ?></p>
	<br>

		
		<label>Gender : </label>
		<input type="Radio" name="gmale" value="Male" id="male">
		<label for="male">Male</label>
		<input type="Radio" name="gfemale" value="Female" id="female">
		<label for="female">Female</label>
		<p><?php echo $GenderErr; ?></p>
     <br>

     
		<label for="Email">Email : </label>
		<input type="email" name="email" id="Email" value="<?php echo $Email ?>">
		<p><?php echo $EmailErr; ?></p>
	<br>

	</fieldset>


	<fieldset>
		
	   <legend>User Information :</legend>

       
		<label for="userName">User Name : </label>
		<input type="text" name="uname" id="userName" value="<?php echo $userName ?>">
		<p><?php echo $UserErr; ?></p>
		<br>
       
		<label for="password">Password : </label>
		<input type="password" name="pass" id="password" value="<?php echo $password ?>">
		<p><?php echo $PassErr; ?></p>
		<br>
        
		<label for="rMail">Recovery Email : </label>
		<input type="email" name="remail" id="rMail" value="<?php echo $rMail ?>">
		<p><?php echo $REmailErr; ?></p>
		<br>
        
    </fieldset>


	<input type="submit" name="submit">
    </form>

</body>
</html>