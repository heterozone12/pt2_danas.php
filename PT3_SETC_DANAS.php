<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stat</title>
    <style>
        body {
            background-color: white;
            color: black;
            font-family: Arial, sans-serif;
        }
        .calculator {
            background-color: #2E8B57; /* Steel Green */
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
  <div class="calculator">
    <h2>Net Income Calculator</h2>
    <form method="post">
        <input type="number" name="hourly_rate" placeholder="Hourly Rate" step="0.01" required><br><br>
        <input type="number" name="working_days" placeholder="Working Days" required><br><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <div id="result">
        <?php
        if (isset($_POST['calculate'])) {
            $hourlyRate = (float) $_POST['hourly_rate'];
            $workingDays = (int) $_POST['working_days'];

            $netIncome = $hourlyRate * 8 * $workingDays;

            echo "The employee's net income is: $" . number_format($netIncome, 2) . "<br>";

            if ($netIncome <= 15000) {
                $tax = 0;
                echo "The tax is: $" . number_format($tax, 2) . "<br>";
            } elseif ($netIncome <= 30000) {
                $tax = ($netIncome - 15000) * 0.05;
                echo "The tax is: $" . number_format($tax, 2) . "<br>";
            } else {
                $tax = ($netIncome - 30000) * 0.10 + (15000) * 0.05;
                echo "The tax is: $" . number_format($tax, 2) . "<br>";
            }

            $totalIncome = $netIncome - $tax;
            echo "The total income after tax is: $" . number_format($totalIncome, 2) . "<br>";
        }
        ?>
    </div>
  </div>
</body>
</html>
