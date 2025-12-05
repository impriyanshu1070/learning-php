<?php
require 'connection.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>BR Public School</title>
    <link rel="stylesheet" href="registration.css" />
</head>

   <body>

     <div class="container">
    <h1>BR PUBLIC SCHOOL</h1>

    <form method="POST">
    <label>Roll no</label>
   <input type="text" name="roll" required>
    <label>Name</label>
   <input type="text" name="sname" required>
    <label>Gender</label>
    <input type="text" name="gender" required>
    <label>Marks</label>
    <input type="text" name="mark" required>
    <button type="submit" name="sb">Submit</button>
    </form>
   

<?php


if(isset($_POST['sb']))
{
    $rollno= $_POST['roll'];
    $name  = $_POST['sname'];
    $gender= $_POST['gender'];
    $marks = $_POST['mark'];

        echo $query = "INSERT INTO studentdata(`Roll no`,`Name`,`Gender`,`Marks`)
        VALUES ('$rollno','$name','$gender','$marks')";

      $run = mysqli_query($con,$query);

       if($run){
        echo "<div class='msg'> Data Inserted Successfully </div>";
     }else{  

        echo mysqli_error($con);
    }
   }
?>

</div>
<script>

    
</script>
</body>
</html>