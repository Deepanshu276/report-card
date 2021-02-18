<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>report card</title>
  </head>
  <body>
    <p>ROSE'S RESULT</p>
    <br>
    <p>subject's list</p>
    <li>MATHS</li>
    <li>COMPUTER GRAPHICS</li>
    <li>CIRCUIT AND SYSTEM</li>
    <br>
    <form action="associative_array.php" method="post">
    SUBJECT NAME:  <input type="text" name ="student">
      <br>
      <input type="SUBMIT">
     </form>
  MARKS IS:  <?php
    $grades=array("MATHS"=>99,"COMPUTER GRAPHICS"=>89,"CIRCUIT AND SYSTEM"=>80);
    echo $grades[$_POST["student"]];
    ?>
  </body>
</html>
