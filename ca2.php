<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        
        .result {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #28a745;
            background-color: #e9ffe9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Marksheet Generator</h2>
        <form method="post" action="">
            <label for="name">Student Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="subject1">Marks in Subject 1:</label>
            <input type="number" id="subject1" name="subject1" required>

            <label for="subject2">Marks in Subject 2:</label>
            <input type="number" id="subject2" name="subject2" required>

            <label for="subject3">Marks in Subject 3:</label>
            <input type="number" id="subject3" name="subject3" required>

            <label for="subject4">Marks in Subject 4:</label>
            <input type="number" id="subject4" name="subject4" required>

            <label for="subject5">Marks in Subject 5:</label>
            <input type="number" id="subject5" name="subject5" required>

            <button type="submit">Generate Marksheet</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $marks1 = $_POST['subject1'];
            $marks2 = $_POST['subject2'];
            $marks3 = $_POST['subject3'];
            $marks4 = $_POST['subject4'];
            $marks5 = $_POST['subject5'];
            $total = $marks1 + $marks2 + $marks3 + $marks4 + $marks5;
            $percentage = ($total / 500) * 100;

            if ($percentage >= 90) {
                $grade = "A+";
            } elseif ($percentage >= 80) {
                $grade = "A";
            } elseif ($percentage >= 70) {
                $grade = "B";
            } elseif ($percentage >= 60) {
                $grade = "C";
            } elseif ($percentage >= 50) {
                $grade = "D";
            } else {
                $grade = "F";
            }
            echo "<div class='result'>";
            echo "<h3>Marksheet for $name</h3>";
            echo "<p><strong>Total Marks:</strong> $total / 500</p>";
            echo "<p><strong>Percentage:</strong> $percentage%</p>";
            echo "<p><strong>Grade:</strong> $grade</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>