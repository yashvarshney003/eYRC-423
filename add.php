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


 
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_SESSION['email'];
$age = $_POST['age'];
$status =  $_POST['selection'];
$meth_infc=$_POST['meth_infc'];
$meth_trtmnt = $_POST['meth_trtmnt'];
$disdate = $_POST['disdate'];
echo $disdate;
$admdate = $_POST['admdate'];
$predisease = $_POST['predisease'];
if(empty($disdate))

{

$insertquery = "UPDATE  patientsform SET name = '$name' , age ='$age', Predisease = '$predisease', admissiondate ='$admdate' ,methodofinfection ='$meth_infc', treatementmethod ='$meth_trtmnt' where  id = '$id' ;";
      $iquery = mysqli_query($conn, $insertquery);

    }
    else{
      $insertquery = "UPDATE  patientsform SET name = '$name' , age ='$age', Predisease = '$predisease', admissiondate ='$admdate' ,methodofinfection ='$meth_infc', treatementmethod ='$meth_trtmnt', dischargedate = '$disdate' where  id = '$id' ;";
      $iquery = mysqli_query($conn, $insertquery);

    }
      
			if($iquery) {
			 ?>
          <h1>inserted</h1>
          <a href="update.php">go back to add</a>

        <?php
         
       

    		}
		else {	?>
          <h1>  not inserted inserted</h1>
          <a href="update.php">go back to add</a>        <?php
             			}
		


/*INSERT INTO `patientsdata`(`center`, `patientid`, `patientname`, `age`, `infection_method`, `status`, `key`, `admissiondate`, `predisease`, `dischargedate`, `treatmentemethod`) VALUES 

*/

?>


