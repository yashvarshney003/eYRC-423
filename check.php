<?php
$servername = "localhost";
$username = "id13201197_yash";;
$password = "n/9x%]JsFn{&9P#n";
$dbname ="id13201197_corona";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  exit('Could not connect');
}

$state = $_POST["state"];
$center_name =$_POST["name"];
$postal_code = $_POST["postal"];
$email_address = $_POST["emailaddress"];
$password = $_POST["password"];
$query = "SELECT verified from  where  email_address = '$email_address'";
$result1 = mysqli_query($conn, $query);
while($rows = mysqli_fetch_array($result1))
{
$verified = $rows["verified"];
if($verified==1)
 {
 	?>
 	<script type="text/javascript">
 		alert("you are already registered go to login form")
 	</script>
 	<?php
 }
 else
 {
 	$vkey = md5(time().$password.$email_address);
 	mysqli_free_result($result1);
 	$query = "UPDATE center_data  set password = '$password' , verification_code ='$vkey' where email_address ='$email_address' ;";
 	$result1 = mysqli_query($conn, $query);
 	$subject = "Email verification";
	$message = "<a href ='https://complaisant-train.000webhostapp.com/verify.php?verification_code=$vkey>	PLs click to verify</a>";
	$headers = "FROM: yash.varshney003@gmail.com";
	$headers = "Content-type:text/html;Charset = UTF.8"."\r\n";

	$emailaddress = $email_address;
	if($result1)
	{

	$mail=mail($emailaddress, $subject, $message,$headers);

if ($mail){
	mysqli_free_result($result1);

echo"Message has been sent";
}
else{
echo"Message not sent this time";


}
}
 	?>
 	<h1> THANK YOU FOR SIGNING UP GO TO LOGIN PAGE verification mail has been sent to your  hospital mail id  </h1>
 	<?php




 }


