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
    <title>Celsius to Fahrenheit</title>
  </head>
  <body>
    <h1 class="display-4">Convert Celsius to Fahrenheit</h1>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <form action="" method="POST" class="lead">
      <label for="celsius">Enter Temperature in Celsius: </label>
      <input type="number" id="celsius" name="celsius" step="0.01" required />
      <br /><br />
      <button type="submit" class="btn btn-primary">Convert to Fahrenheit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $celsius = $_POST['celsius'];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "<h4>The equivalent temperature in Fahrenheit is $fahrenheit °F</h4>";
    }
    ?>
  </body>
</html>

<?php
