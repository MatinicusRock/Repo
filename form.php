<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action ="form.php" method="get">
      Name: <input type="text" name="username">
      <br>
    Age: <input type="number" name="age">
    Skills: <input type="text" name="skills">
      <input type="submit">
      <br>
      Your name is: <?php echo $_GET["username"] ?>
      <br>
      Your age is: <?php echo $_GET["age"] ?>

      Your skill is: <?php echo $_GET["skills"] ?>



  </body>
</html>
