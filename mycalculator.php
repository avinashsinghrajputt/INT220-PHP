<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Form</title>
  </head>
  <body>
    <h1 class="display-3">Add two numbers</h1>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <form action="" method="POST" class="lead">
      <label for="num1">Enter 1st Number: </label>
      <input type="number" id="num1" name="firstnumber" required />
      <br /><br />
      <label for="num2">Enter 2nd Number: </label>
      <input type="number" id="num2" name="secondnumber" required />
      <br /><br />
      <button type="submit" class="btn btn-outline-success" name="operation" value="add">+</button>
      <button type="submit" class="btn btn-outline-danger" name="operation" value="subtract">-</button>
      <button type="submit" class="btn btn-outline-primary" name="operation" value="multiply">*</button>
      <button type="submit" class="btn btn-outline-secondary" name="operation" value="divide">/</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $n1 = $_POST['firstnumber'];
      $n2 = $_POST['secondnumber'];
      $operation = $_POST['operation'];

      switch ($operation) {
        case "add":
          $result = $n1 + $n2;
          echo "<h4>The result of the addition is $result</h4>";
          break;
        case "subtract":
          $result = $n1 - $n2;
          echo "<h4>The result of the subtraction is $result</h4>";
          break;
        case "multiply":
          $result = $n1 * $n2;
          echo "<h4>The result of the multiplication is $result</h4>";
          break;
        case "divide":
          if ($n2 != 0) {
            $result = $n1 / $n2;
            echo "<h4>The result of the division is $result</h4>";
          } else {
            echo "<h4>Division by zero is not allowed</h4>";
          }
          break;
        default:
          echo "<h4>Invalid operation selected</h4>";
      }
    }
    ?>
  </body>
</html>
