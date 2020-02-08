

<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>格安SIMの追加ページ</title>
    </head>
      <body>
        <?php

          require_once('../../common/common.php');

          $post=sanitize($_POST);

          $sim_name=$post['sim_name'];
          $sim_line=$post['line'];
          $sim_terminal	=$post['terminal'];
          $sim_data	=$post['data'];
          $sim_value_sim	=$post['value_sim'];
          $sim_min_price=$post['min_price'];

          // if($pro_name == ''){
          //     echo '商品名が入力されていません。<br/>';
          // }else{
          //     echo '商品名：';
          //     echo $pro_name;
          //     echo '<br/>';
          //     }
          //
          // if(preg_match("/^[0-9]+$/",$pro_price) == 0){
          //   echo '半角数字で入力してください。<br/>';
          // }else{
          //   echo '価格：';
          //   echo $pro_price;
          //   echo '円<br/>';
          //   }
          //
          //   if($pro_genre == "未選択"){
          //       echo 'ジャンルが選択されていません。<br/>';
          //   }else{
          //       echo 'ジャンル：';
          //       echo $pro_genre;
          //       echo '<br/>';
          //       }
          //
          //   if($pro_gazou['size']>0){
          //     if($pro_gazou['size'] > 1000000){
          //         echo '画像が大き過ぎます。';
          //     }else{
          //         move_uploaded_file($pro_gazou['tmp_name'],'./gazou/'.$pro_gazou['name']);
          //         echo '<img src="./gazou/'.$pro_gazou['name'].'">';
          //         echo '<br/>';
          //     }
          //   }
          //
          // if($pro_name == '' || preg_match("/^[0-9]+$/",$pro_price) == 0 || $pro_genre == "未選択" || $pro_gazou['size'] > 1000000){
          //     echo '<form>';
          //     echo '<input type="button" onclick="history.back()" value="戻る">';
          //     echo '</form>';
          // }else{
              echo '上記の商品を追加します。<br/>';
              echo '<form method="post" action="sim_add_done.php">';

              echo '<input type="hidden" name="sim_name" value="'.$sim_name.'">';
              echo '<input type="hidden" name="line" value="'.$sim_line.'">';
              echo '<input type="hidden" name="terminal" value="'.$sim_terminal.'">';
              echo '<input type="hidden" name="data" value="'.$sim_data.'">';
              echo '<input type="hidden" name="value_sim" value="'.$sim_value_sim.'">';
              echo '<input type="hidden" name="min_price" value="'.$sim_min_price.'">';


              echo '<br/>';
              echo '<input type="button" onclick="history.back()" value="戻る">';
              echo '<input type="submit" value="OK">';
              echo '</form>';
          // }
        ?>
    </body>
</html>
