<?php



    session_start();

    $mydata=file_get_contents("form.txt");
     $data=json_decode($mydata);

   if(isset($_POST['submit'])) {$error="";

    if (empty($_POST['username']) || empty($_POST['password'])) {

	$error="Please Enter username or password";}

	else {
    for ($i=0; $i < 3; $i++) 
    {if ($_POST['username'] ==  $data[$i]->username && $_POST['password']== $data[$i]->password) {

	$_SESSION["username"] = $data[$i]->username;
    $_SESSION["firstname"] = $data[$i]->firstName;
    $_SESSION["lastname"] = $data[$i]->lastname;
    $_SESSION["email"] = $data[$i]->email;
				
			}
		}
     echo $_SESSION["username"] . " 
       " . $_SESSION["firstname"] . "
       " . $_SESSION["lastname"]." 
       ".  $_SESSION["email"];


            

			

		}

		
		}


?>

