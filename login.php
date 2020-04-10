<?php  
$servername = "localhost";
$username = "root";;
$password = "";
$dbname ="corona"; 
  
$conn = mysqli_connect($servername, $username, $password,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  





$email = $_POST['uname'];
#echo $email;
$pass = $_POST['psw'];
#echo $pass;
$pass = md5($pass);


// $password = password_hash($pass, PASSWORD_BCRYPT);
// $cpassword = password_hash($repass, PASSWORD_BCRYPT);
// echo $password, "\n" ;
// echo $cpassword;
// $token = bin2hex(random_bytes(15));

$emailquery = "select * from center_data where email_address = '$email' ;";
$query = mysqli_query($conn, $emailquery);

$emailcount = mysqli_num_rows($query);
echo $emailquery;
#echo $emailcount;
if($emailcount==0){
  echo"emial id is not correct and you are not valid user";
  echo"<a href ="."/login.html"."> login page</a>";
}
while($rows = mysqli_fetch_array($query))
{
  echo"inside while";
  if($rows['verified']==0)
  {
    echo"<h1> pls verify the link first</h1>";
    #sleep(5);
    #header('Location: login.html');
  echo"<a href ="."/login.html"."> login page</a>";
  }
  else{
    if($rows['password1']==$pass){
     echo"login successfully";
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $pass;
      header('Location:yash1.php');
      echo "<a href"."/mypatients.php".">mypatients</a>";

    }
    else{

      echo"<script>
      alert(". "Wrong password entered! login again".");</script>";
     #sleep(5);
      #header('Location: login.html');
      echo"password is wrong";
      echo"<a href ="."/login.html"."> login page</a>";
    }

  }
}






mysqli_close($conn);
?>