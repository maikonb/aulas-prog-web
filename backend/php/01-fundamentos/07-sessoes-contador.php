<?php
  session_start();

  if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
  }
  else {
    $_SESSION['counter'] = 1;
  }
  
  $msg = "Você visitou este site " . 
         $_SESSION['counter'] .  " vezes.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador de visitas</title>
</head>
<body>
  <?php echo ($msg) ; ?>
</body>
</html>