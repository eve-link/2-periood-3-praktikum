<DOCTYPE! HTML>
<html>
  <head>
    <title>2-periood-3-praktikum</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type"text/css" href="style.css">
  </head>
  <body>
  <?php 
      $username = $_POST["username"];
      $password = $_POST["password"];
    ?>

    <pre>
    <?php 
    print_r($_POST);
    ?>

<?php
  if (isset($_POST["username"])) {
    $username = $_POST["username"];
  } else {
    $username = "puudub";
  }
?>

<?php 
    echo "Tere {$username}! Teie parool on {$password}.";
    ?>
    <br><br>

<?php 
if 
  ($password = $_POST["password"])
  {echo "Tere {$username}! Teie parool on {$password}";} 
else 
  {echo "Kasutajanimi või parool on puudu.";}
?>
  </body>
</html>