<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Now here's your receipt Mister <?php echo $_POST['user']?></h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Cost per item</th>
            <th>SubTotals</th>
        </tr>
        <tr>
            <td>Watch</td>
            <td><? echo $_POST['q_watch']?></td>
            <td>$200</td>
            <td>$<?php echo $_POST['q_watch'] * 200 ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><? echo $_POST['q_phone']?></td>
            <td>$900</td>
            <td>$<?php echo $_POST['q_phone'] * 900 ?></td>
        </tr>
        <tr>
            <td>Pen</td>
            <td><? echo $_POST['q_pen']?></td>
            <td>$2</td>
            <td>$<?php echo $_POST['q_pen'] * 2 ?></td>
        </tr>
        <tr>
            <th>Total</th>
            <td></td>
            <td></td>
            <th>$<?php echo $_POST['q_pen'] * 2 + $_POST['q_phone'] * 900 + $_POST['q_watch'] * 200?></th>
        </tr>
    </table>
    <p>And remember, this here is your password: <?php echo $_POST['pass']?></p>
</body>
</html>