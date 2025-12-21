<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number </title>
</head>
<body>
    <form action="" method="POST">
        Enter a number: <input type="number" name="no"> <br>
        <input type="submit" value="check"></input>
    </form>
    <?php
  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST['no'];
    $isprime=true;
    if($number<=1){
    $isprime=false;
    } else {
      for($i=2;$i*$i<=$number;$i++)
      if($number%$i==0){
        $isprime=false;
        break;
      }
    }
    if ($isprime) {
        echo "$number is a Prime Number";
    } else {
        echo "$number is Not a Prime Number";
    }
}
?>
</body>
</html>
