<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
  <?php include_once '../includes/styles.php' ?>
</head>

<body>
  <h1>Functions</h1>
  <a href="/">Home</a>
  <?php

  /**
   * Addes to values
   * @param int|float $x Value 1
   * @param int|float $y Value 2
   * @return float|int The sum of the two values
   */
  function add(int|float $x, int|float $y): int|float
  {

    return $x + $y;
  }

  /**
   * Substract to values
   * @param int|float $x Value 1
   * @param int|float $y Value 2
   * @return float|int The subtraction of the two values
   */
  function subtract(int|float $x, int|float $y): int|float
  {
    return $x - $y;
  }

  /**
   * Summary of multiply
   * @param int|float $x
   * @param int|float $y
   * @return float|int
   */
  function multiply(int|float $x, int|float $y): int|float
  {
    return $x * $y;
  }

  /**
   * Summary of divide
   * @param int|float $x
   * @param int|float $y
   * @return float
   */
  function divide(int|float $x, int|float $y): int|float
  {
    return $x / $y;
  }

  /**
   * Summary of modulus
   * @param int|float $x
   * @param int|float $y
   * @return int
   */
  function mod(int|float $x, int|float $y): int|float
  {
    return $x % $y;
  }
  ?>
  <div>3 + 5 = <?= add(3, 4) ?></div>
  <div>5 * 10 = <?= multiply(5, 10) ?></div>
  <div>127 - 22 = <?= subtract(127, 22) ?></div>
  <div>234 / 25 = <?= divide(234, 25) ?></div>
  <div>5 % 25 = <?= mod(5, 25) ?></div>
</body>

</html>