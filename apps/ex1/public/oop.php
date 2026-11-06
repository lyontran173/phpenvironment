<?php include_once '../includes/student.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
  <?php include_once "../includes/styles.php"; ?>
</head>

<body>
  <h1>OOP and Classes</h1>
  <a href="index.php">Home</a>

  <div>
    <?php
    $student1 = new Student("Dave", "Burchill");
    echo $student1->firstName;
    $student1->firstName = "David";
    echo "<br>";

    echo $student1->getFullName();

    $student2 = new Student("Rina", "Allexander");
    $student3 = new Student("Gilles", "Robichaud");
    $student4 = new Student("Kurt", "Kobain");

    $students = [$student1, $student2, $student3];
    array_push($students, $student4);
    ?>

    <ol>
      <?php
      for ($i = 0; $i < count($students); $i++) {
        echo "<li>" . $students[$i]->getFullName() . "</li>";
      }
      ?>
    </ol>
    <ul>
      <?php
      // for foreach the collection is first then the the interative var
      // as == in C#
      foreach ($students as $s) {
        echo "<li>" . $s->getFullName() . "</li>";
      }
      ?>
    </ul>
  </div>
</body>

</html>