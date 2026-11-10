<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Throwing Exceptions in a function</title>
  <?php include_once("../includes/styles.php") ?>
</head>

<body>
  <h1>Throwing Exceptions in a function</h1>
  <a href="index.php">Home</a>
  <div>
    <?php
    function divide($a, $b)
    {
      if ($b == 0) {
        throw new InvalidArgumentException("Cannot divide by zero");
      }

      return $a / $b;
    }

    try {
      echo divide(1, 12);
    } catch (InvalidArgumentException $ex) {
      echo "Error: " . $ex->getMessage();
    }
    ?>
  </div>
</body>

</html>