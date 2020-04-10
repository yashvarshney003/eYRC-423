<?php
$servername = "localhost";
$username = "root";;
$password = "";
$dbname ="corona";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  exit('Could not connect');
}


$emailaddress = $_POST["email"];

$password1 = $_POST["psw"];

$query = "SELECT * FROM center_data where email_address = '$emailaddress';";



$result1 = mysqli_query($conn, $query);
if($result1)
{
$rowcount=mysqli_num_rows($result1);
  if($rowcount==0)
  {
      echo"<h1>This is  not valid or genuine emailid of hospital<h1>";
      echo"<a href ="."https://complaisant-train.000webhostapp.com/signup.html>Back to Signup</a>";
     
      
  }

else{
#echo $result1;
    
    
}


while($rows = mysqli_fetch_array($result1))

{
   
$verified = $rows['verified'];

if($verified==1)

 {
echo"<h1>Already Verified</h1>";
echo"<a href ="."https://complaisant-train.000webhostapp.com/login.html>Go to Login Page</a>";
?>
 	<script type="text/javascript">
 		alert("you are already registered go to login form")
 	</script>
 	<?php
 }
 else
 {
 	$vkey = md5(time().$password.$emailaddress);
    $password1 = md5($password1);
 	
 	$query1 = "UPDATE center_data  set password1 = '$password1' , verification_code ='$vkey'where email_address ='$emailaddress' ;";
 	$result = mysqli_query($conn, $query1);
 	
 	if($result)
 	{
 	    #echo"inserted successfully";
 	}
 	else
 	{
 	        exit('updationis not successful');
 	    #echo"insertion is not complete";
 	}
 	$subject = "Email verification";
	$message = "<a href ='https://complaisant-train.000webhostapp.com/verify.php?verification_code=$vkey>	PLs click to verify</a>";
	$headers = "FROM: yash.varshney003@gmail.com";
	$headers = "Content-type:text/html;Charset = UTF.8"."\r\n";




	$mail=mail($emailaddress, $subject, $message,$headers);

if ($mail){
	
echo"<h1>Verification link  been sent to Gmail ID </h1>";
echo"<a href ="."https://complaisant-train.000webhostapp.com/login.html>Go to Login Page</a>";
}
else{
echo"<h1>Message not sent this time because server is local ans offline  but if server is offine verfi link will be on hospitalemailid </h1>";


}
}
  
 


}
}

mysqli_close($conn)

 
?>
<h1><a href="login.html"> GO to Login </a></h1>


