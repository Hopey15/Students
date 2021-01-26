<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="Style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student</title>  
</head>
<body>
<?php

include_once 'DBConnection.php';
if (isset($_POST['submit'])){
	
    $name = $_POST['name'];
    $surname=$_POST['surname'];
    $studentnumber=$_POST['studentnumber'];
    $no=$_POST['no'];
    $subjectcode=$_POST['subjectcode'];
    $subjectname=$_POST['subjectname'];
   
    $sql= "INSERT INTO dbo.studentinfo (name,surname,studentno,subjectno,subjectcode,subjectname)
    Values($name,$surname,$studentnumber,$no,$subjectcode,$subjectname)";
    $stmt = sqlsrv_query($conn, $sql);
    
    if($stmt){	
    echo "<script>alert('Information submitted successfully');</script>"; 
    }else{
    die( print_r( sqlsrv_errors(), true));  }	
}
?>
<form method="post" name="student" onsubmit= "return Validate()"> 

<label for="name">Name:</label>
    <input type="text" name="name" id = "name" />

</div>

<div>
    <label for="surname">Surname:</label>
    <input type="text" name="surname" id="surname" />
</div>

<div>
    <label for="studentnumber">Student Number:</label>
    <input type="text" name="studentnumber" id="studentnumber"  />
</div>

<br>
        
 <div>

    <table >
      <tr>
       
        <th>No</th>
        <th>Subject code </th>
        <th>Subject Name</th>
      </tr>
      <tr>
         
          <td><input type="text" name="no"  value="1" id="no" readonly/></td>
          <td><input type="text" name="subjectcode"  id="subjectcode"/></td>
          <td><input type="text" name="subjectname" id="subjectname" /></td>
     <tr>
     <tr>
         
         <td><input type="text" name="no"  value="2" id="no" readonly/></td>
         <td><input type="text" name="subjectcode"  id="subjectcode"/></td>
         <td><input type="text" name="subjectname" id="subjectname" /></td>
    <tr>
    <tr>
         
         <td><input type="text" name="no"  value="3" id="no" readonly/></td>
         <td><input type="text" name="subjectcode"  id="subjectcode"/></td>
         <td><input type="text" name="subjectname" id="subjectname" /></td>
    <tr>
    </table>
	<br>
    <input type="submit" value="Submit" name="submit" />
</form>


</body>
</html>