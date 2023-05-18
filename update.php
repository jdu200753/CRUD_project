<?php


  $id = $_GET['id'];
  $name = $_GET['firstname'];
  $lname = $_GET['lastname'];
  $students = json_decode(file_get_contents("data.json"), true);

  foreach($students as $key => $student) {
    if($student['id'] == $id) {
      $students[$key]['firstname'] = $name;
      $students[$key]['lastname'] = $lname;
    }
  }

  file_put_contents("data.json", json_encode($students));
  header("Location: read.php");
?>