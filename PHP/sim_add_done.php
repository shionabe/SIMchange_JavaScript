<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>格安SIMの追加ページ</title>
    </head>
    <body>
      <?php

      try{

          require_once('../../common/common.php');

          $post=sanitize($_POST);

          $sim_name=$post['sim_name'];
          $sim_line=$post['line'];
          $sim_terminal=$post['terminal'];
          $sim_data	=$post['data'];
          $sim_value_sim	=$post['value_sim'];
          $sim_min_price=$post['min_price'];

          $dsn = 'mysql:dbname=shindan;host=localhost;charset=utf8';
          $user = 'root';
          $password = '';
          $dbh = new PDO($dsn,$user,$password);
          $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

          $sql = 'INSERT INTO shindan(sim_name,line,terminal,data,value_sim,min_price) VALUES (?,?,?,?,?,?)';
          $stmt = $dbh->prepare($sql);
          $data[] = $sim_name;
          $data[] = $sim_line;
          $data[] = $sim_terminal;
          $data[] = $sim_data;
          $data[] = $sim_value_sim;
          $data[] = $sim_min_price;
          $stmt->execute($data);

          $dbh = null;

          echo $sim_name;
          echo 'を追加しました。<br/>';
      }
      catch(Exception $e){
          echo 'ただいま障害により大変ご迷惑をお掛けしております。';
          exit();
      }
      ?>

      <a href="sim_list.php">戻る</a>

    </body>
</html>
