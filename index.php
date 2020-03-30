<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>Practice</h2>
<pre>

<?php
// print("合計金額は" . ($sum*1.08) . "円です。");
?>
<br>
<!-- 合計金額は　<?php /*print($sum)*1.08 */?>　円です。 -->
<!-- 繰り返し -->
<?php
// $i=1;
// while($i<=365/*繰り返したい条件 */){
// print($i . "\n"/*繰り返したい内容*/);
//     $i++;//インクリメント（⇄デクリメント）
// }
?>
<br>


<?php
// $sum = 100+1050+200+50;
?>

<!-- 合計金額は：<?php/* print($sum); */?>円です<br>
税込金額は：<?php /*print($sum*1.1);*/ ?>円です -->

<?php 
// $tax=1.1;
?>
<?php
// print($sum*$tax);
?><br>
<?php
// $sum=8+2;
// print($sum);
?>
<br>
<?php
// for($i=1/*初期化処理 */; $i<=365/*$iの条件 */; $i++/*更新処理*/){
//     print ($i);/*繰り返す内容*/
// }
// ?>
<br>
<?php
// for($i=2;$i<=100;$i=$i+2){
//     print($i . "<br>");
// }
?>

<!-- sample07.php -->
<?php
// for($i=1; $i<=365; $i++){
//     $day=date('n/j(D)',strtotime('+' . $i .'day'));
//     print($day . "\n");
// }
// $time=time();
// print($time);

// $day=date('n/j(D)',86400);
// print($day . "\n");

// $day_after_tomorrow=strtotime('+2day');
// $day=date('n/j(D)',$day_after_tomorrow);
// print($day . "\n");

// 1年後までのカレンダー
// for($i=1; $i<=365; $i++){
//     // $timestamp=strtotime('+' . $i . 'day');
// $day=date('n/j(D)',strtotime('+' . $i . 'day'));
// print($day . "\n");
// }
?>

<!-- sample08 -->
<?php
// print(date('w'));
// $week_name=['日','月','火','水','木','金','土'];
// print('今日は' . $week_name['w'] . '曜日です');

//れんしゅう
// $gene=['10代','20代','30代','40代','50代','60代'];
// print($gene[2]);

?>
<!-- sample09 -->
<?php
// $fruits=[
//     'apple'=>'りんご',
//     'grape'=> 'ぶどう',
//     'lemon'=>'レモン',
//     'tomato'=>'トマト',
//      'peach'=>'もも'
// ];

// foreach($fruits as $english => $japanese){
//     print($english . ' : ' . $japanese . "\n");
// }
// print("\n");
// $computers=[
//     'win'=>'Windows',
//      'mac'=>'Macintosh',
//      'iphone'=>'IPhone',
//      'ipad'=>'IPad',
//      'android'=>'Android'
// ];
// foreach($computers as $small => $large){
//     print($small .':' . $large . "\n");
// }

?>

<!-- sample10 -->
<?php
// if(date('G')<9){
//     print('※受付時間外です。');
// }else{
//     print('ようこそ');
// }

// $x=0;
// if(!$x){
//     print('xは0です');
// }
// $answer=0;
// if($answer==0){
//     print('1以上の数字を指定してください。');
// }
// ?>

<!-- sample11 少数の切り上げなど -->
<?php
// print(floor(100/3000*100));
//print(round(100/3000*100,1));//四捨五入した値＝round(【元の値】,【少数第一位を対象とするか】);
?>

<!-- sample12 書式を整える-->
<?php
// $fix=sprintf('%d','abc');
// print($fix);
//　%d　は数字として整えるという意味がある。　dはdigit
// $fix=sprintf('%s','abc');//sはstring(文字)
// print($fix);
// print( "\n");

// $fix=sprintf('%05d','10');
// print($fix);
// print( "\n");

// $date=sprintf('$04d年 %02d月 %02d日', 2018, 1,23);
// print($date);
?>
<!-- sample13 ファイルに内容を書き込む-->
<?php
// $success=file_put_contents('./news_data_news.txt', '2018-06-01 ホームページをリニューアルしました');//（【ファイルパス名】,【書き込み内容】);
// if($success){
//     print('ファイルへの書き込みが完了しました。');
// }else{
//     print('書き込みに失敗しました。フォルダの権限などを確認してください。');
// }
// print( "\n");
// file_put_contents('../../data/news_data_news.txt', '比較的安全にファイルを保存できます');

?>
<!-- sample14 ファイルの読み込み-->
<?php
// $news=file_get_contents('./news_data/news.txt');
// print($news);//編集が必要なときにはこちら
// //読んでそのまま表示するだけならreadfileが早い
// readfile('./news_data/news.txt');
// //ファイルの追記
// $doc=file_get_contents('./news_data/news.txt');
// $doc .="<br />2018-06-02　ニュースを追加しました";
// //$doc =$doc . "<br />2018-06-02　ニュースを追加しました";　と同じ
// file_get_contents('./news_data/news.txt' . $doc);//file_get_contentsはファイルの上書き

// readfile('./news_data/news.txt');
?>
<!-- sample15 XMLの情報を読み込む-->
<?php
// $xmlTree->channel->title
// $xmlTree->channel->item[0]
// $xmlTree->channel->item[0]->title
// $xmlTree=simplexml_load_file('https://h2o-space.com/feed');
// foreach($xmlTree->channel->item as $item) :
// ?>
 <!-- ・<a href="<?php/* print($item->link);*/ ?>"><?php /*print($item->title); */?></a> -->
<?php
// endforeach;
 ?>

<!-- sample16 Jsonを読み込む-->
<?php
// $file=file_get_contents('https://h2o-space.com/feed/json');
//これをjson_decodeとよぶ。
// $json=json_decode($file);
// $json->items[0]->title
// foreach($json->items as $item) :
    ?>
    <!-- ・<a href="<?php /*print($item->url);*/ ?>"><?php /*print($item->title);*/ ?></a> -->
<?php
// endforeach;
?>
<?php
// $json_sample=array(
//     'title'=>'JSONサンプル',
//     'items'=>array(
//         'item01'=>'1つめ',
//         'item02'=>'二つ目')
// );

// $file=json_encode($json_sample,JSON_UNESCAPED_UNICODE);
// file_put_contents('./json_sample.json',$file);

?>

<!-- sample17 フォームに入力した内容を取得する　この章はhtmlで-->
<form action="submit.php" method="get">
  <label for="my_name">お名前：</label>
  <input type="text" id="my_name" name="my_name" maxlength="225" value="">
  <input type="submit" value="送信する">
</form>

<!-- print($_REQUEST['my_name']);
print($_GET['my_name']); -->

get post　request

get　データ量が軽いものしか送れないし、丸見えだが簡単に共有できる（URL貼り付けるだけ）
http://...submit_php?キー1=値1。。。

post 内容はURLには表示されない　問合せフォームなどに
print(htmlspecialchars($_POST['my_name'], ENT_QUOTES));

request　オールマイティ


</pre>
</main>
</body>    
</html>