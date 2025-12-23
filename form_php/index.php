<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <style>
        body{
            background-color: beige;
            display: flex;
            justify-content: center;   
            align-items: center;       
            height: 50vh;
            font-family: Arial, sans-serif;
        }
        #A{
            background-color: white;
            padding: 30px;
            border: 2px solid black;
            width: 300px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="A">
    <form action="abc.php" method="POST">
    Enter email:<input type="text" name="email"> <br><br>
    Enter password: <input type="password" name="pass"><br><br>
    Enter username: <input type="text" name="user"><br><br>
    <label for="Suggestions">
         Please give us feedback.
    </label> <br>
    <textarea  name="sugg"> </textarea> <br>
    <input type="submit">
    </form>
    </div>
</body>
</html>
