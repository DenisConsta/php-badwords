<?php
  $paragraph= $_GET['paragraph'];
  $censored= $_GET['censored'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
</head>
<body>
  <h1>Results :</h1>
  <h3>paragraph: <?php echo $paragraph ?></h3>
  <h3>censored: <?php echo $censored ?></h3>
</body>
</html>