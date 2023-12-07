<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title></title>
 </head>

 <body>
    <p>
      <?php

      //変数と基本的な出力
      $user_name = '田中';
      $today_temperature = 20;
      $today_weather = '晴れ';

      echo 'こんにちは、' . $user_name . 'さん！' . '今日の気温は' . $today_temperature . '度で、' . '湿度は' . $today_weather . '%です。';
      '<br>';

      //配列とループ
      $user_names = ['田中','鈴木','木村','森山','山田'];

      echo $user_names[1];
      '<br>';
      echo $user_names[2];
      '<br>';
      echo $user_names[3];
      '<br>';
      echo $user_names[4];
      '<br>';
      echo $user_names[5];
      '<br>';

      //分岐と条件文
      while ($sum) {
        $num = mt_rand(1,10);

        if ($num % 2 === 0){
          echo 'これは偶数です。';
        }

        else {
          echo 'これは奇数です。';
        }

      }
      '<br>';

      //ループと条件文の複合利用
      for ($i = 1; $i <= 30; $i++) {
        if ($i % 3 === 0) {
          continue;
        }

        echo $i . '<br>';
      }

      ?>

    </p>
</body>

</html>