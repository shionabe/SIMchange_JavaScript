
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>アニメグッズ</title>
    </head>
    <body>
      <?php

      try{
          $dsn = 'mysql:dbname=shindan;host=localhost;charset=utf8';
          $user = 'root';
          $password = '';
          $dbh = new PDO($dsn,$user,$password);
          $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

          $sql = 'SELECT code,sim_name FROM shindan WHERE 1';
          $stmt = $dbh->prepare($sql);
          $stmt->execute();

          $dbh = null;

          echo '格安SIM一覧<br/><br/>';

          echo '<form method="post" action="shindan_branch.php">';

          while(true){
              $rec = $stmt->fetch(PDO::FETCH_ASSOC);
              if($rec == false){
                  break;
              }
              echo '<input type="radio" name="simcode" value="'.$rec['code'].'">';
              echo $rec['sim_name'].'---';
              echo '<br/>';
          }
          echo '<input type="submit" name="disp" value="参照">';
          echo '<input type="submit" name="add" value="追加">';
          echo '<input type="submit" name="edit" value="修正">';
          echo '<input type="submit" name="delete" value="削除">';
          echo '</form>';
      }

      catch(Exception $e){
          echo 'ただいま障害により大変ご迷惑をお掛けしております。';
          exit();
      }

      ?>

      <br/>
      <a href="../sim_shindan_top.html">トップメニューへ</a><br/>

    </body>
</html>
