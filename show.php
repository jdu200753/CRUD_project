<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    $id = $_GET['id'];

    $students = json_decode(file_get_contents("data.json"), true);

    foreach($students as $student) {
      if($student['id'] == $id) {
        echo " student id: " .$student['id'];
        echo "<br>";
        echo "student firsname: " .$student['firstname'];
        echo "<br>";
        echo  "student lastname: " .$student['lastname'];
        echo "<br>";
        echo "<img src=".$student['img']." height=200 width=200 />"; 
        echo "<br>";
        
      }

    };
  ?>
  <br>
  <a href="read.php">Close</a>
  
</body>
</html>
