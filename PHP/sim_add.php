

<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>格安SIM追加ページ</title>
    </head>
    <body>
      じゃんじゃん追加しよう。<br/>
      <br/>

      <form method="post" action="sim_add_check.php" enctype="multipart/form-data">

        格安SIMの名前を入力してください。<br/>
        <input type="text" name="sim_name" style="width:200px"><br/>

        通信回線を入力してください。<br/>
        <input type="text" name="line" style="width:200px"><br/>

        iPhoneかAndroidの扱いを入力してください。<br/>
        <input type="text" name="terminal" style="width:200px"><br/>

        データ容量を選んでください。<br/>
        <input type="text" name="data" style="width:200px"><br/>

        音声SIMかデータSIMかを選んでください。<br/>
        <input type="text" name="value_sim" style="width:200px"><br/>

        最低料金を入力してください。<br/>
        <input type="text" name="min_price" style="width:200px"><br/>

        <br/>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">
      </form>


    </body>
</html>
