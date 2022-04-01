<?php 
   session_start();
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "project";
    $conn = mysqli_connect($server,$username,$password,$database);
   if ($conn){
   echo'<script>console.log("Connection Successful")</script>';
   }
   else{
       die("Connection failed: " . mysqli_connect_error());
   }
if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$personalno = $_POST['personalno'];
$parentno = $_POST['parentno'];
$class = $_POST['class'];
$faculty = $_POST['faculty'];
$query = "INSERT INTO `data` (`sn`, `firstname`, `lastname`, `fathername`, `mothername`, `personalno`, `parentsno`, `class`, `faculty`) values( NULL,'$firstname','$lastname','$fathername','$mothername','$personalno','$parentno','$class','$faculty')";
$data = mysqli_query($conn,$query);
if($data){
  echo '<script>alert("Registration Compelete")</script>';
}
else{
  echo '<script>alert("Registration Error!! Please Try Again!")</script>';
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission</title>

</head>

<body>

  <form method="POST" action="?">

    <div >
      <div>
        <label  for="grid-first-name">
          First Name
        </label>
        <input  required name="firstname"  id="grid-first-name" type="text" placeholder="Sandip">
      </div>
      <div >
        <label for="grid-last-name">
          Last Name
        </label>
        <input  required name="lastname"  id="grid-last-name" type="text" placeholder="Sapkota">
      </div>
    </div>
    <div >

      <div >
        <label for="grid-first-name">
          Fathers Name
        </label>
        <input  required name="fathername"  id="grid-first-name" type="text" placeholder="">
      </div>
      <div >
        <label for="grid-first-name">
          Mother Name
        </label>
        <input required name="mothername"  id="grid-first-name" type="text" placeholder="">
      </div>
    </div>
    </div>
    <div >
      <label for="grid-first-name">
        Personal Mobile Number
      </label>
      <input required name="personalno" id="grid-first-name" type="text" placeholder="98XXXXXXXX">
    </div>
    <div >
      <label for="grid-first-name">
        Parent's Mobile Number
      </label>
      <input  required name="parentno" id="grid-first-name" type="text" placeholder="98XXXXXXXX">
    </div>


    </div>



    <div >

      <div >
        <label for="grid-state">
          Class
        </label>
        <div >
          <select name="class" id="grid-state">
          <option value="Not-Selected">Select</option>  
          
          <option value="11">11</option>
            <option value="12">12</option>

          </select>
          <div >
            
          </div>
        </div>
      </div>
      <div >
        <label for="grid-state">
          Faculty
        </label>
        <div >
          <select name="faculty" name="faculty" id="grid-state">
            
          <option value="Not-Selected">Select</option>
          <option value="Science">Science</option>
            <option value="Management">Management</option>

          </select>
          <div class="">
            
          </div>
        </div>
      </div>

      
    
    
    </div>
    <button  name="submit" type="submit">
      Submit
    </button>
    
  
  </form>

</body>

</html>