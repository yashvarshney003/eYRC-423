
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corona";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>
 <!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" href="w3.css">


    
    
  
	<title>testing going on</title>
</head>
<body>
  <style type="text/css">
    .margin-top{
      margin-top: 100px;
    }
  </style>
  
<div id ="check">  </div>

	  

<form class="margin-top">   
  <! state choice be carefull -->
  
<div >
  SELECT STATE:
 <select class ="w3-select w3-blue"  id="state" name="state" onchange="myfun()">
  <option value = "" selected> None </option>
    <?php
    $q = "SELECT DISTINCT(state) from center_data c,patientsform p where c.email_address = p.hospitalemailid ;";
     $result = mysqli_query($conn,$q);
     while($rows = mysqli_fetch_array($result))
     {
      echo "<option value=".$rows["state"] .">".$rows["state"]."</option>";

     }
     mysqli_free_result($result);

mysqli_close($conn)
    ?>
  </select>

  

<! age  show -->

  <div >  AGE :
    <div  id ="age_shower">   </div>
  <input type="number" min="1" max="100" value="50" class="slider" id="age" onchange="myfun();showage(this.value)">
</div>
<div>
 <script type="text/javascript">
   function showage(str){
    document.getElementById("age_shower").innerHTML = str
   }
 </script>
</div>


 <!-- status -->
 <div>
  STATUS OF PATIENT
   <select  id="status"  name ="status" onchange="myfun()">
  <option value = "" selected> None </option>
   <option value = "quarantine">quarantine </option>
    <option value = "stage1">stage1 </option>
     <option value = "stage2"> stage2 </option>
      <option value = "crtical">critical </option>
       <option value = "dead"> dead </option>
        <option value = "free"> free </option>
      </select>
  

  
 </div>


<!--  pre disease       -->
 <div>
  IF ANY PREDISEASE
   <select  id="predisease" name ="predisease" onchange="myfun()">
  <option value = "" selected> No </option>
   <option value ="yes">Yes </option>
   
  
 </div>

 <!--    date of admission     -->
 <div>
 <br>
 ADMISSION DATE
 Enter date  of admission <input type="date" id="admission" name="admissiondate" onchange="myfun()">
  
</div>



  <! text where table  shows it's data -->
<div id ="txthint"  class ="w3-table w3-bordered w3-striped w3-centered">
  

</div>

<script type="text/javascript">
    
        function myfun(){
      
      var state = document.getElementById("state").value
      var age  = document.getElementById("age").value
      var ele = document.getElementById("status").value
      var disease = document.getElementById("predisease").value
      var date1 = document.getElementById("admission").value
      var str = "state="+ state +"&age="+age +"&status="+ele+"&predisease="+disease+"&admissiondate="+date1
      
  if (str == "") {
    document.getElementById("txthint").innerHTML = "";
    return;
  }
  var xhttp =  new XMLHttpRequest();
  xhttp.open("GET", "showtables.php?"+str,true);         
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txthint").innerHTML = this.responseText;
    };

  };
  
  
}
</script>

</form>
<button  class =" w3-button  w3-green w3-margin-top " type="button"><a href="addpatient.html">add more  patient's</button> 
  <br>
  <button  class =" w3-button  w3-red  w3-margin-top" type="button"><a href="view.php">view my patient's</button> <br>
    
    <button  class =" w3-button w3-blue   w3-margin-top" type="button"><a href="update.php">update</a></button>
</body>
</html>

