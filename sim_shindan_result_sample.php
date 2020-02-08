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
    <link rel="stylesheet" type="text/css" href="CSS/sim_shindan_result.css">
    <!-- レスポンシブ・タブレット1000px以下の時スタイルシート -->
     <link rel="stylesheet" href="CSS/sim_shindan_top_tb.css">
    <!-- レスポンシブ・スマホ670px以下の時スタイルシート -->
     <link rel="stylesheet" href="CSS/sim_shindan_top_sp.css">
    <!-- ブートストラップアイコンに関する記述 -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- jQueryに関する記述 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>

<!-- ヘッダー -->
  <header>
    <img src="img/simly.png" alt="ヘッダーのロゴ画像">
  </header>
  <!-- ナビ -->
  <nav>
    <div class="nav_tie">
      <h2>格安SIM診断結果</h2>
      <h2>あなたにおすすめの格安SIMは[]件</h2>
    </div>
    <div class="nav_bottom">
      <p>表示順序を並び替え</p>
      <p><select class="" name="narabikae">
        <option value="">人気ランキング順</option>
        <!-- 運営者が売りたい順番 -->
        <option value="">料金が安い順</option>
        <option value="">総合満足度が高い順</option>
      </select></p>
    </div>

  </nav>
  <body>


<main>


    <div class="result_wrapper">
      <div class="result_content">


        <!-- 左側のコンテンツ -->
      <div class="left">
        <div class="left_top">
          <img src="" alt="ここにコンテンツ画像">
          <p>ここにSIM名前</p>
        </div>
        <div class="left_table">
              <table>
            	<tbody>
            		<tr>
            			<td>データ通信量</td>
            			<td>ここにデータの変数</td>
            		</tr>
            		<tr>
            			<td>回線の種類</td>
            			<td>ここに回線の変数</td>
            		</tr>
            		<tr>
            			<td>SIMの種類</td>
            			<td>ここにSIMの変数</td>
            		</tr>
            		<tr>
            			<td>総合満足度</td>
            			<td>ここに満足度の変数</td>
            		</tr>
            		<tr>
            			<td>人気度</td>
            			<td>ここに人気度の変数</td>
            		</tr>
            	</tbody>
            </table>
        </div>
      </div>

      <!-- 右側のコンテンツ -->
      <div class="right">
        <table>
          	<tbody>
          		<tr>
          			<td>月額料金</td>
          			<td>〇〇円</td>
          		</tr>
          		<tr>
          			<td colspan="2">ここにテキスト</td>
          		</tr>
          		<tr>
          			<td colspan="2">リンクボタン追加</td>
          		</tr>
          	</tbody>
          </table>
      </div>


      </div>

    </div>

    </main>
  </body>

  <footer>
  </footer>

</html>
