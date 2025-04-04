<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <style>
        body {
          background: radial-gradient(circle at top, rgba(27, 77, 62, 0.6), transparent),
          linear-gradient(to bottom, rgba(27, 77, 62, 0.4), white);
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
          height: 100vh;
          margin: 0;
        }
        .header {
            width: 100%;
            height: 80px;
            background-color: white;
            border-radius: 0px 0px 90px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .container {
            margin: 50px auto;
            width: 50%;
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
        }
        .shop-items {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .item {
            background: white;
            color: black;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            width: 200px;
        }
        .add-to-cart {
            background: green;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .total {
            margin-top: 20px;
            font-size: 20px;
        }
        h1 {
            text-align: center;
            color: #001C04;
        }
      h2{
        font-size:60px;
      }
    </style>
</head>
<body>
    <div class="header">
        <h1>FLOVER'S</h1>
    </div>
  <h2>Welcome to Flover Flower Shop</h2>
    <div class="container">

        <form method="post">
            <div class="shop-items">
                <?php
                $flowers = [
                    "Roses" => 10,
                    "Lilies" => 12,
                    "Tulips" => 8,
                    "Orchids" => 15,
                    "Daisies" => 7
                ];
                foreach ($flowers as $name => $price) {
                    echo "<div class='item'>
                            <h3>$name</h3>
                            <p>\$$price</p>
                            <input type='checkbox' name='cart[$name]' value='$price'> Add to Cart
                            <br>
                            <input type='number' name='quantity[$name]' min='1' value='1' style='width: 50px;'>
                          </div>";
                }
                ?>
            </div>
            <br>
            <button type="submit" class="add-to-cart">Calculate Total</button>
        </form>
        <div class="total">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cart'])) {
                $total = 0;
                foreach ($_POST['cart'] as $name => $price) {
                    $quantity = isset($_POST['quantity'][$name]) ? (int)$_POST['quantity'][$name] : 1;
                    $total += $price * $quantity;
                }
                $tax = $total * 0.12;
                $totalWithTax = $total + $tax;
                echo "Total: \$" . number_format($totalWithTax, 2) . " (including tax)";
            } else {
                echo "Total: \$0.00 (including tax)";
            }
            ?>
        </div>
    </div>
</body>
</html>
