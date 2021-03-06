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
  <!-- トップページ -->
  <body>
    <div id="wrapper">
      <!-- ヘッダー -->
       <header>
           <img src="img/simly.png" alt="ヘッダーのロゴ画像">
       </header>
       <!-- メインボディ -->
       <main>

         <!-- ボディ上部 -->
         <div class="main-wrapper">
             <!-- 上部左 -->
             <div class="left-wrapper">
               <div class="title-wrapper">
                 <h2>ぴったり</h2>
                 <h1>SIM診断</h1>
               </div>
               <!-- 上部スタートボタン -->
               <div class="btn">
                　<input type="radio" id="top" class name="top" onclick="topChange();" >
                  <label for="top" class="top">Start.</label>
               </div>
             </div>
             <!-- 上部右 -->
             <div class="right-wrapper" >
               <img src="img/top.png" alt="トップページメイン画像" class="right_img" >
             </div>
          </div>

        <!-- ボディ中間 -->

          <!-- フッター固定バナーセクション -->
         <section class="fix_wrapper">
           <!-- リスト番号 -->
           <ul>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
             <li></li>
           </ul>
         </section>
         <!-- メインボディ送信フォームボタン -->
         <form name="result" action="sim_shindan_result.php">
           <!-- クエスチョンセクション -->
          <div class="content_wrapper">
            <div class="question_wrapper">
             <!-- クエスチョン１ -->
             <div id="q1" class="q1" style="display: none;">
               <!-- 質問内容 -->
                   <h2>
                     <p class="number">1</p>
                     <p class="text">お手持ちのスマホをそのまま利用しますか？</p>
                   </h2>
                   <!-- ボタン -->
                   <div class="twoColumn">
                     <!-- inputタグの「id属性」の値と同じにする事でラベルのテキストとラジオボタンを関連づけることができる -->
                     <input type="radio" id="q1-1" class name="q1" value="そのまま利用する" onclick="q1Change();" >
                     <label for="q1-1" class="radio">そのまま利用する</label>
                     <input type="radio" id="q1-2" class name="q1" value="新規で購入する" onclick="q1Change();" >
                     <label for="q1-2" class="radio">新規で購入する</label>
                     <!-- 質問事項1に関するJSの外部読み込み -->
                       <script src="JS/sim_shindan_top.js"></script>
                   </div>
             </div>
             <!-- クエスチョン２(パターン1) -->
             <div id="q2-1" class="q2" style="display: none;">
               <!-- 質問内容 -->
                   <h2>
                     <p class="number">2</p>
                     <p class="text">現在ご利用中の携帯会社はどこですか？</p>
                   </h2>
                   <!-- ボタン -->
                   <div class="fourColumn">
                     <input type="radio" id="q2-1-1" class name="q21" value="docomo" onclick="q2_1Change();" >
                     <label for="q2-1-1" class="radio">docomo</label>
                     <input type="radio" id="q2-1-2" class name="q21" value="au" onclick="q2_1Change();">
                     <label for="q2-1-2" class="radio">au</label>
                     <input type="radio" id="q2-1-3" class name="q21" value="SoftBank" onclick="q2_1Change();">
                     <label for="q2-1-3" class="radio">SoftBank</label>
                     <input type="radio" id="q2-1-4" class name="q21" value="その他(ガラケー)" onclick="q2_1Change();">
                     <label for="q2-1-4" class="radio">その他(ガラケー)</label>
                     <!-- 質問事項2に関するJSの外部読み込み -->
                       <script src="JS/sim_shindan_top.js"></script>
                   </div>
             </div>
             <!-- クエスチョン２(パターン2) -->
             <div id="q2-2" class="q2" style="display: none;">
               <!-- 質問内容 -->
                   <h2>
                     <p class="number">2</p>
                     <p class="text">ご希望のスマホはありますか？</p>
                   </h2>
                   <!-- ボタン -->
                   <div class="twoColumn">
                     <input type="radio" id="q2-2-1" class name="q22" value="iPhone" onclick="q2_2Change();">
                     <label for="q2-2-1" class="radio">iPhone</label>
                     <input type="radio" id="q2-2-2" class name="q22" value="Android" onclick="q2_2Change();">
                     <label for="q2-2-2" class="radio">Android</label>
                     <!-- 質問事項2に関するJSの外部読み込み -->
                       <script src="JS/sim_shindan_top.js"></script>
                   </div>
             </div>
             <!-- クエスチョン３ -->
             <div id="q3" class="q3" style="display: none;">
               <h2>
                 <!-- 質問内容 -->
                 <p class="number">3</p>
                 <p class="text">あなたの利用スタイルに合ったデータ通信量はどれですか？</p>
               </h2>
               <!-- ボタン -->
               <div class="twoColumn" >
                 <!-- あえての2カラム -->
                   <!-- ボタン1 -->
                   <div class="q3block">
                     <ul class>
                       <li>メールやLINEはテキストが中心</li>
                       <li>ネットやSNSをほとんど利用しない</li>
                     </ul>
                   <input type="radio" id="q3-1" class name="q3" value="1" onclick="q3Change();">
                   <label for="q3-1" class="radio">1GB</label>
                   </div>
                   <!-- ボタン2 -->
                   <div class="q3block">
                     <ul class=>
                       <li>ネットやSNSを1日1～2時間ほど利用する</li>
                       <li>動画はあまり観ない</li>
                     </ul>
                     <input type="radio" id="q3-2" class name="q3" value="3" onclick="q3Change();">
                     <label for="q3-2" class="radio">3GB</label>
                   </div>
                   <!-- ボタン3 -->
                   <div class="q3block">
                     <ul class>
                       <li>ネットやSNSを頻繁に利用する</li>
                       <li>動画を観る機会が多い</li>
                       <li>家ではWiFiを使用する</li>
                     </ul>
                     <input type="radio" id="q3-3" class name="q3" value="9" onclick="q3Change();">
                     <label for="q3-3" class="radio">9GB</label>
                   </div>
                   <!-- ボタン4 -->
                   <div  class="q3block">
                     <ul class>
                       <li>動画を長時間観る</li>
                       <li>WiFiは使用しないことが多い</li>
                       <br>
                     </ul>
                     <input type="radio" id="q3-4" class name="q3" value="14" onclick="q3Change();">
                     <label for="q3-4" class="radio">14GB~</label>
                   </div>
                  <script src="JS/sim_shindan_top.js"></script>
               </div>

             </div>
             <!-- クエスチョン４ -->
             <div id="q4" class="q4" style="display: none;">
               <!-- 質問内容 -->
                   <h2>
                     <p class="number">4</p>
                     <p class="text">音声通話は利用しますか？</p>
                   </h2>
                   <!-- ボタン -->
                   <div class="twoColumn">
                     <input type="radio" id="q4-1" class name="q4" value="音声SIM" onclick="q4Change();">
                     <label for="q4-1" class="radio">利用する（音声SIM）</label>
                     <input type="radio" id="q4-2" class name="q4" value="データ専用SMS" onclick="q4Change();">
                     <label for="q4-2" class="radio">利用しない（データSIM）</label>
                     <script src="JS/sim_shindan_top.js"></script>
                   </div>
             </div>
             <!-- クエスチョン５ -->
             <div id="q5" class="q5" style="display: none;">
               <!-- 質問内容 -->
                   <h2>
                     <p class="number">5</p>
                     <p class="text">SMSは利用しますか？</p>
                   </h2>
                   <!-- ボタン -->
                   <div class="twoColumn">
                     <input type="radio" id="q5-1" class name="q5" value="あり" onclick="q5Change();">
                     <label for="q5-1" class="radio">利用する</label>
                     <input type="radio" id="q5-2" class name="q5" value="なし" onclick="q5Change();">
                     <label for="q5-2" class="radio">利用しない</label>
                      <script src="JS/sim_shindan_top.js"></script>
                   </div>
             </div>
             <!-- 診断結果のボタン -->

               <input type="submit" id="result" name="result_btn" value="診断結果を見る"  class="button" disabled>
               <!--<input type="text" id="result"> -->
               <!-- <button class name="reslut_btn"  disabled>診断結果を見る</button> -->
               <!-- disabled=jQueryの記述？ボタンを押せないようにする-->

           <!-- </section> -->
           </div>
         </div>
         </form>
         <!-- インフォセクション -->
         <section class="info">

             <!-- インフォ注意事項セクション -->
             <section class="attention">
               <h3>当サイトご利用にあたっての注意事項</h3>
               <!-- 注意事項その1 -->
                <div>
                  <h4>当サイトについて</h4>
                    <ul>
                      <li>あああああああああああああ</li>
                      <li>あああああああああああああ</li>
                      <li>あああああああああああああ</li>
                    </ul>
                </div>
               <!-- 注意事項その2 -->
                <div>
                  <h4>個人情報の取り扱いについて</h4>
                    <ul>
                      <li>あああああああああああああ</li>
                      <li>あああああああああああああ</li>
                      <li>あああああああああああああ</li>
                    </ul>
                </div>
               <!-- 注意事項その3 -->
                <div>
                  <h4>当サイトご利用の注意事項</h4>
                    <h5>免責事項</h5>
                      <ul>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                      </ul>
                    <h5>禁止事項</h5>
                      <ul>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                      </ul>
                    <h5>履歴情報</h5>
                      <ul>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                      </ul>
                    <h5>商標</h5>
                      <ul>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                        <li>あああああああああああああ</li>
                      </ul>
                </div>
             </section>
             <!-- インフォISOセクション -->
             <section class="iso">
               <img src="" alt="">
               <h4>ISOを取得しています</h4>
               <p>あああああああああああああああああああ</p>
             </section>
             <!-- インフォリンクセクション -->
             <section class="link">
               <ul class="flex-list">
               <!-- 運営情報 -->
               <li><a href="#">運営会社</a>｜</li>
               <!-- プライバシーポリシー -->
                <li><a href="#">プライバシーポリシー</a>｜</li>
               <!-- お問い合わせ -->
                 <li><a href="#">お問い合わせ</a></li>
               </ul>
             </section>

         </section>

       </main>
       <!-- フッター -->
       <footer>
         <p>Copyright © 2019 <a href="#" target="_blank" rel="noopener">Simly</a>.All rights reserved.</p>
       </footer>
    </div>
  </body>
  <!-- トップページここまで -->
</html>
