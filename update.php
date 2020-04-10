<?php
$servername = "localhost";
$username = "root";;
$password = "";
$dbname ="corona";
$conn1 = new mysqli($servername, $username, $password, $dbname);
if($conn1->connect_error) {
  exit('Could not connect');
}
session_start();
$email=$_SESSION["email"];
echo $email;


?>
<form action="add.php" method= "post" style="border:1px solid #ccc">
  <div class="container">
    <h1>update patient details</h1>  
    <hr>
    <label>SELECT ID FOR UPDATE</label>
    <select class ="w3-select w3-blue"  id="id" name="id" required>
  <option value =  "1"  selected> 1 </option>
  <?php
    $q = "SELECT DISTINCT(id) from patientsform where  hospitalemailid= '$email' ;";
    echo $q;
     $result = mysqli_query($conn1,$q);
     while($rows = mysqli_fetch_array($result))
     {
      echo "<option value=".$rows["id"] .">".$rows["id"]."</option>";

     }
     mysqli_free_result($result);

mysqli_close($conn1)
    ?>
  </select>



    <label for="name"><b>Patient Name</b></label>
    <input type="text" placeholder="Enter patient's name" name="name" required><br>

    <br>
    <br>

    <label for="email"><b>Patient's age</b></label>
    <input type="number" placeholder="Enter Patient's age" name="age" required>
    <br>
    <br>
    <label><b>Current state of patient</b></label><br>
    <SELECT id="s1" name="selection" required>
    <Option value="stage1">Stage 1</option>
    <Option value="stage2">Stage 2</option>
    <Option value="stage3">Stage 3</option>
    <Option value="critical">Critical</option>
    </SELECT><br>

    <br>
    
    <label for="name"><b>Method of transmission</b></label><br>
    <textarea name="meth_infc" placeholder = "Method of transmissi" rows="5" cols="30" required >  </textarea><br>
    <br>
    <br>
    <label for="name"><b>Treatment used</b></label><br>
    <textarea name="meth_trtmnt" placeholder = "Treatment method used"rows="5" cols="30" require>  </textarea> <br>

<label>Information about pre-disease if patient have</label>
<br>
    <textarea name="predisease" placeholder = "predisease" rows="5" cols="30">  </textarea><br>
    <br>


    <br>
    <br>
    <label for="name"><b>Admission Date </b></label><br>
    <input type="date" placeholder="Admission date" name="admdate" required><br>

  

    <label for="name"><b>Discharge date</b></label><br>
    <input type="date" placeholder="Discharge date" name="disdate" default= "N/A"><br>
        
    
   

    <div class="clearfix">
      
      <button type="reset" class="cancelbtn">Reset</button>
      <button type="submit" class="signupbtn" name = "submit">UPDATE </button>
      <button name="back" onclick="Back()" value = "Back">Back</button>
          <script type="text/javascript">
            function Back() {window.location.assign('yash1.php')}</script>
    </div>
  </div>
</form>
<h1><a href="/yash1.php">  Back to view </a></h1>

