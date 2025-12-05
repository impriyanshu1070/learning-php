<?php
require 'connection.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>BR Public School</title>
    <style>
        body{
            background:#f2f2f2;
            font-family: Arial;
        }
        .container{
            width:400px;
            margin:80px auto;
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 0 10px gray;
        }
        h1{
            text-align:center;
        }
        label{
            font-weight:bold;
            display:block;
            margin-top:10px;
        }
        input{
            width:100%;
            padding:8px;
            margin-top:5px;
        }
        button{
            width:100%;
            margin-top:15px;
            padding:10px;
            background:#0d6efd;
            color:white;
            border:none;
            cursor:pointer;
        }
        .msg{
            text-align:center;
            margin-top:10px;
            color:green;
            font-weight:bold;
        }
        a{
            display:block;
            text-align:center;
            margin-top:10px;
        }
    </style>
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