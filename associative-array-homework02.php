<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <p>
      <?php

      $product_price = ['Meat' => '3.0', 'Fish' => '2.5', 'vegetable' => '1.5', 'Fruits' => '1.3', 'Drink' => '1',];

      print_r($product_price);
      echo '<br>';

      echo '<br>';

      foreach ($product_price as $key => $value) {
        if ($value < 2) {
          continue;
        }
        echo "{$key}" . "<br>";
      }
      
      ?>
    </p>
</body>

</html>