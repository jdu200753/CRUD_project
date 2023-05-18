<?php 

    $f = $_POST['firstname'];
    $l = $_POST['lastname'];
   

    $users = json_decode(file_get_contents("data.json"), true);
    //$users = json_decode(readfile("data.json"), true);
    //$users = json_decode(fopen("data.json", "a+"), true);

    
    if(isset($_POST['submit']))
    { 
        $filepath = "images/" . $_FILES["file"]["name"];
    };
    
    $newUser = [
        "id" => sizeof($users) + 1,
        "firstname" => $f,
        "lastname" => $l,
        "img" => $filepath
    ];

    $users[] = $newUser;

    file_put_contents("data.json", json_encode($users));

    header("Location: read.php");
?>