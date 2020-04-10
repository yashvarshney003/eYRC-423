<?php  
session_start();
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'corona';  
//include 'login.php';
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  


 if(isset($_POST['submit']))
{


$name =  $_POST['name'];
$email = $_SESSION['email'];
$age = $_POST['age'];
$status = $_POST['selection'];
$meth_infc= $_POST['meth_infc'];
$meth_trtmnt = $_POST['meth_trtmnt'];
$disdate =  $_POST['disdate'];
$admdate = $_POST['admdate'];

}
$insertquery ="INSERT INTO patientsform(name, age, hospitalemailid, status, admissiondate, methodofinfection,treatementmethod, dischargedate) VALUES ('$name','$age','$email', '$status', '$admdate', '$meth_infc', '$meth_trtmnt', '$disdate')";
			$iquery = mysqli_query($conn, $insertquery);
			if($iquery) {
			 ?>
          
          <h1>( "inserted successfully")</h1>;
          <a href="/addpatient.html"> back to add page</a>
          

        <?php
       

    		}
		else {	?>
         <h1>( "inserted successfully")</h1>;
          <a href="/addpatient.html"> back to add page</a>       
           <?php
    			}
		


/*INSERT INTO `patientsdata`(`center`, `patientid`, `patientname`, `age`, `infection_method`, `status`, `key`, `admissiondate`, `predisease`, `dischargedate`, `treatmentemethod`) VALUES 

*/

?>

