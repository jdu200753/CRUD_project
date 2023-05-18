<?php
  $id = $_GET['id'];

 $students = json_decode(file_get_contents("data.json"), true);
   // $students = json_decode(fopen("data.json", "r"), true);

  foreach($students as $key => $student) {
    if($student['id'] == $id) {
      array_splice($students, $key, 1);
    }
  }
  

  file_put_contents("data.json", json_encode($students));
  header("Location: read.php");
?>