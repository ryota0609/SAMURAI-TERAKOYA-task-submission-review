<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <p>
      <?php

      $country_capitals = ['China' => 'Beijing', 'Canada' => 'Ottawa', 'Brazil' => 'Brasília', 'French' => 'Paris', 'Australia' => 'Canberra',];

      print_r($country_capitals);
      echo '<br>';

      echo '<br>';

      foreach ($country_capitals as $key => $value) {
        echo "{$key} <br> {$value} <br>";
      }

      ?>
    </p>
</body>

</html>