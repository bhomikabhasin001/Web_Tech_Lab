<?php
$filename="counter.txt";
if(!file_exists($filename)){
    file_put_contents($filename, "0"); 
}
$count=(int)file_get_contents($filename); 
$count++; 
file_put_contents($filename, $count); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visitor Counter</title>
    <style>
        body {
            background-color: #e09eb8ff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            color: #1a1919;
            margin-bottom: 20px;
        }
        h2 {
            color: #284b70ff;
        }
        p {
            font-size: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Welcome Back 🙂</h1>
    <p>This page displays the number of visitors visiting the page.</p>
    <p>The page is created using HTML,CSS and php:)</p>
    <h2>Total Visitors:</h2>
    <p><?php echo $count; ?></p>
</body>
</html>
