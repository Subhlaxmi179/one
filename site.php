` `<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form action="site.php" method="post">
    First Num :<input type="number" name="num1" /><br />
    Op : <input type="text" name="op" /><br />
    Second Num :<input type="number" name="num2" /><br />
    <input type="submit" />
  </form  >
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_post["op"];

    if($op == "+"){
      echo $num1 + $num2;
    }
    
 ?>
</body>
</html>
