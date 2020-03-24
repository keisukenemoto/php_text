<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit-fit=no">
    <title>Document</title>
</head>
<body>
    <?php
date_default_timezone_set('Asia/Tokyo');

    print('I\m studying "PHP"<br/>')    ; // opt+¥=\
    print('123+2*5/3<br/>');//クオーテーションつけるとそのまま反映される（評価されない）
    print(123+2*5/3);//(評価する)
print("<br />");
print(60*60*24);

print("<br />");

print(date('G'));
print(時);
print(date('i'));
print(分);
print(date('s'));
print(秒);
print("<br />");

print("現在の時刻は");
print(date("G時i分s秒"));
print(date("です。"));
print("’現在の時刻は date(G時i分s秒)'です。");

//文字列連結
print('1+1は' . (1+1) . 'です。');//計算部分が（）で囲む。
print("今日は" . date(Y年n月j日) . "です");
print("<br/>");
$today=new DateTime();//インスタンスを作成する。　DateTimeオブジェクトは全て日付関係がまとまっている。
print('現在は' . $today->format('G時 i分 s秒') . 'です。');//formatメソッドを使う。

//変数は一時的に計算結果を保管する。
$sum=(100+1050+200);
print("<br/>");
print($sum);
print("<br/>");
print($sum*1.08);
print("<br/>");
?>
<?php
print("合計金額は" . ($sum*1.08) . "円です。");
?>
<br>
合計金額は　<?php print($sum)*1.08 ?>　円です。
<!-- 繰り返し -->
<?php
$i=1;
while($i<=365/*繰り返したい条件 */){
print($i . "\n"/*繰り返したい内容*/);
    $i++;//インクリメント（⇄デクリメント）
}
?>
<br>
<?php
for($i=1/*初期化処理 */; $i<=365/*$iの条件 */; $i++/*更新処理*/){
    print ($i);/*繰り返す内容*/
}
?>
<br>
<?php
for($i=2;$i<=100;$i=$i+2){
    print($i . "<br>");
}
?>

<?php
/*
1年後までのカレンダー

string date(string $format[, int $timestamp=time()])
タイムスタンプ=str to time(日付を表す文字列[,計算のためのタイムスタンプ = time()]);
*/
// $time=time();
// print($time);
// $day=date('n/j(D)' . 86400);
// print($day . "\n");

// $day_after_tomorrow=strtotime('+2day');
// $day=date('n/j(D)', $day_after_tomorrow);
// print($day . "\n");



</body>
</html>
