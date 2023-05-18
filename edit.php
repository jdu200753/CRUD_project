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

 //$students = json_decode(fopen("data.json", "r"), true);

  foreach($students as $student) {
      if($student['id'] == $id) {
        $s = $student;
        
      }
  }
?>
<h1>Add new user</h1>
    <form action="update.php">
        <input type="text" name="firstname"  value = "<?php echo $s['firstname']?>" >
        <br><br>
        <input type="text" name="lastname" value = "<?php echo $s['lastname']?>" >
        <br><br>
        <img src="<?php echo $student['img']?>" alt="">
        <br><br>
        <input type="hidden" name = "id" value = "<?php echo $s['id'] ?>">
        <input type="submit" value="Update">
    </form>
  
</body>
</html>
