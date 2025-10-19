<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>

  <?php $result=0?>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="num1">
    <select name="operation">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" name="num2"><br>
    <button>Submit</button><br>
    <input type="text" name="answer" value="<?php htmlspecialchars($result) ?>">
  </form><br>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //taking input and cleaning them before use
    $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
    $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
    $operation = htmlspecialchars($_POST["operation"]);
    $answer = htmlspecialchars($_POST["answer"]);

    //error handling
    $errors = false;

    if (empty($num1) || empty($num2) || empty($operation)) {
      echo "fill in all the fields";
      $errors = true;
    }
    if (!is_numeric($num1) || !is_numeric($num2)) {
      echo "fill the fields with numbers";
      $errors = true;
    }

    //calculate
    if (!$errors) {
      $result = 0;
      switch ($operation) {
        case "add":
          $result = $num1 + $num2;
          break;
        case "subtract":
          $result = $num1 - $num2;
          break;
        case "multiply":
          $result = $num1 * $num2;
          break;
        case "divide":
          $result = $num1 / $num2;
          break;
        default:
          echo "something went wrong";
      }
      echo "<p class=result>Result =" . $result . "</p>";
    }
    echo $answer;
  }

  ?>
</body>

</html>