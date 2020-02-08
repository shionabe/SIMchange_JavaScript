<!DOCTYPE html>
<html>
  <head>
    <!-- 文字 -->
    <meta charset="UTF-8">
    <!-- viewportを読み込む=メディアクエリ-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- サイトの権限者に関する記述 -->
    <meta name="name" content="SIMチェンジ">
     <!-- サイト説明に関する記述 -->
    <meta name="description" content="格安SIM比較サイト「SIMチェンジ」は、格安SIMカードを比較することで、あなたにぴったりのSIM選びをサポートするサイトです。快適なスマホ生活にお役立て下さい。">
    <!-- サイトのキーワードに関する記述 -->
    <meta name="keywords" content="格安SIM,スマホ,">
    <title>SIM診断コンテンツ</title>
    <!-- スタイルシートの読み込み -->
    <link rel="stylesheet" type="text/css" href="CSS/sim_shindan_top.css">
    <!-- レスポンシブ・タブレット1000px以下の時スタイルシート -->
     <link rel="stylesheet" href="CSS/sim_shindan_top_tb.css">
    <!-- レスポンシブ・スマホ670px以下の時スタイルシート -->
     <link rel="stylesheet" href="CSS/sim_shindan_top_sp.css">
    <!-- ブートストラップアイコンに関する記述 -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- jQueryに関する記述 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>


  <body>

  <h2>結果</h2>
    <?php

    try{
        $dsn = 'mysql:dbname=shindan;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // $sql = 'SELECT code,sim_name,min_price FROM shindan WHERE 1';



                        $q1 = $_GET['q1'];

                        if($_GET['q1'] == "そのまま利用する"){
                            $q21 = $_GET['q21'];
                           }else{
                            $q22 = $_GET['q22'];
                           }



                        $q3 = $_GET['q3'];


                        $q4 = $_GET['q4'];
                        // $q5 = $_GET['q5'];

                        if($_GET['q4'] == "データ専用SMS"){
                          $q5 = $_GET['q5'];
                          }




                $sql =  'SELECT code,sim_name,min_price  FROM shindan WHERE' ;

                  if($q1 == "そのまま利用する" ){
                          $sql.=  '  kaisen LIKE  "%' . $q21 . '%" ' ;
                          $sql.=  ' AND data >  "' . $q3 . '"' ;
                          // $sql.=  ' AND value_sim LIKE  "%' . $q4 . '%"' ;


                              if($q4 ==  "音声SIM"){
                                $sql.=  ' AND value_sim LIKE  "%' . $q4 . '%"' ;
                              }else{
                                $sql.=  ' AND value_sim LIKE  "%' . $q4 . '%"' ;
                                $sql.=  ' AND sms = "' . $q5 . '" ' ;
                              }





                       }elseif($q1 == "新規で購入する" ){
                        $sql.=  ' terminal LIKE  "%' . $q22 . '%"' ;
                        $sql.=  ' AND data >  "' . $q3 . '"' ;
                        // $sql.=  ' AND value_sim LIKE  "%' . $q4 . '%"' ;

                              if($q4 ==  "音声SIM"){
                                $sql.=  ' AND value_sim LIKE  "%' . $q4 . '%"' ;
                              }else{
                                $sql.=  ' AND value_sim LIKE  "%' . $q4 . '%"' ;
                                $sql.=  ' AND sms = "' . $q5 . '" ' ;

                               }
                        }else{
                           echo '該当するものはありません';
                        }



                     //SQLを閉じる
                     echo $sql.';';
                      // echo $sql;

                       $stmt = $dbh->prepare($sql);
                       $stmt->execute();
                       $dbh = null;

                       while(true){
                           $rec = $stmt->fetch(PDO::FETCH_ASSOC);
                           if($rec == false){
                               break;
                           $array =  array($rec['code']);
                           }

                       echo '<input type="radio" name="simcode" value="'.$rec['code'].'">';
                       echo $rec['sim_name'].'---';
                       echo $rec['min_price'].'円';
                       // コードの個数を調べる
                       // echo '<br/>';
                       $array =  array($rec['code']);
                       echo '結果' .count($array);
                     }


                     // $code = $rec['code'];
                     // $array_count = count($code);
                     // echo 'count : '.$array_count;







    // $value = $_GET['q1'];
    }  catch(Exception $e){
        echo 'ただいま障害により大変ご迷惑をお掛けしております。';
        exit();
    }


    ?>

  </body>
</html>
