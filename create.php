<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Add new user</h1>
    <form action="store.php" method = "POST" enctype="multipart/form-data">
        <input type="text" name="firstname" placeholder="Firstname">
        <br><br>
        <input type="text" name="lastname" placeholder="Lastname">
        <br><br>
        <input type = "file" name = "file">
        <br><br>
        <input type="submit" value="Add new user" name = "submit">
    </form>
</body>
</html>