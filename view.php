
<?php
session_start();
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'corona';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  

$email = $_SESSION['email'];



$insertquery = "SELECT * FROM patientsform where hospitalemailid = '$email'";
$iquery = mysqli_query($conn, $insertquery);
if($iquery) 
		{

			?>
 
			<!DOCTYPE html>
			<html>
			<style>
				{font-family: Arial, Helvetica, sans-serif; 
				box-sizing: border-box}

				/* Full-width input fields */
				input, button {
				  width: 100%;
				  padding: 15px;
				  margin: 5px 0 22px 0;
				  display: inline-block;
				  border: none;
				  background: #dfd 	;
				}
			</style>
			    <head>
			        <title> Patient data of your center </title>

			        <p>Data entered by you:</p>	
			    </head>
			    <body>
			
			    
			    <table align="center" border="1px" style="width:100%; line-height:60px;">

			        <t><th>id </th>
			            <th> Name </th>
			            <th> Age </th>
			            <th> Status </th>
			            <th> Admission Date </th>
			            <th> Previous History </th>
			            <th> Transmission Method </th>
			            <th> Treatement Method</th>
			            <th> Discharge Date </th>
			           
			        </t>
			    <?php 
			        while($rows=mysqli_fetch_assoc($iquery))
			        {
			    ?>        
			            <tr>
			            	<td><?php echo $rows['id']; ?></td>
			                <td><?php echo $rows['name']; ?></td>
			                <td><?php echo $rows['age']; ?></td>
			                <td><?php echo $rows['status']; ?></td>
			                <td><?php echo $rows['admissiondate']; ?></td>
			                <td><?php echo $rows['Predisease']; ?></td>
			                <td><?php echo $rows['methodofinfection']; ?></td>
			                <td><?php echo $rows['treatementmethod']; ?></td>
			                <td><?php echo $rows['dischargedate']; ?></td>
			                
			            </tr>
			       <?php
			   }
			   ?>
			        
			        
			        
			    <button name="back" onclick="Back()" value = "Back">Back</button>
			    </table>
			    <script type="text/javascript">
			    	function Back() {window.location.assign('yash1.php')}
			    		// body...
			    	
			    </script>
			</body>
			</html> 
			 <?php 
			 }	
			 
					
			
	?>        	


