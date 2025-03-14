<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sum of the Reciprocals</title>
    <style>
        h2{
            color:#0D4715;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
            text-align: center;
            background: radial-gradient(circle at top, rgba(27, 77, 62, 0.6), transparent),
            linear-gradient(to bottom, rgba(27, 77, 62, 0.4), white);
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }
        input[type="number"] {
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px;
            background-color: #1B4D3E;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            color:#690B22;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Sum of Series Calculator</h2>
    <form method="post">
        <label for="n">Enter N:</label><br>
        <input type="number" name="n" id="n" required><br>
        <button type="submit" name="submit">Calculate Sum</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["n"];
            $sum = 0.0;

          
            $i = 1;
            while ($i <= $n) {
                $sum += 1.0 / $i;
                $i++;
            }

           
            echo "<div class='result'>Sum is: " . number_format($sum, 11) . "</div>";
        }
    ?>

</div>

</body>
</html>