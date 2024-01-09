<?php

//課題１ 作成した関数名：multiplited
function multiplied($number){
    $new_number = $number * 2;
    return $new_number;
} 
//課題１　関数テスト
echo multiplied(5);



//課題２　作成した関数名：add
function add($a,$b){
    $sum = $a + $b;
    return $sum;
}
//課題２　関数テスト
echo add(3,3);



//課題２　作成した関数名：multiplied2
function multiplied2($arr){
    $total = $arr[0];
    for($i = 0;$i < count($arr);$i ++){
    $total = $total * $arr[$i];
    }
    return $total;
}

//array(1,3,7,9)を引数に渡して計算
$arry = array(1,3,5,7,9);

echo multiplied2($arry);

//課題４
function max_number($arr){
//とりあえず配列の最初の要素を１番大きい値とする
$max_number = $arr[0];
foreach($arr as $a)
//ここで配列の中の一番大きい値を探したい
    if($max_number < $a){
        $max_number = $a;
    }
    return $max_number;
}

 $arry = array(1,3,5,7,9);
//課題４　テスト

echo max_number($arry);

/*課題５　array_push 
用途：配列の末尾に要素を追加する時に使用する鵜。
使い方：array_push(要素を追加する配列名,追加したい要素)*/
//実際に使用する

$foods = ['牛丼','かつ丼','天丼','カレー'];
foreach($foods as $food){
echo $food;
}

array_push($foods,'豚丼');
foreach($foods as $food){
    echo $food;
}

/*課題5 strip_tags
用途：指定した文字列からHTMLタグを取り除く。
使い方：strip_tags()*/
//実際に使用する
$aitem = "<h1>結果</h1>";
echo $aitem;
echo strip_tags($aitem);

/*課題５；array_merge
用途：配列や連想配列を結合する時に使用。
使い方：array_merge(結合したい配列名,結合したい配列名)*/
//実際に使用する
$color1 = ['赤','青'];
$color2 = ['白','黄色'];
$colors = array_merge($color1,$color2);
print_r($colors);

/*課題５　time、mktime
用途：time 現在時刻のUNIXタイムスタンプを取得する。
　　　mktime　指定した日時のUNIXタイムスタンプを取得する。
使い方：time() 現在時刻のタイムスタンプ取得の場合、引数は特になし。
        mktime(時間,分,秒,月,日,年,サマータイムフラグ)  
        ☆()内に指定したいタイムスタンプ時間を記入する。記入しない場合は現在日時から指定された引数の日時だけ置き換わって取得される。
          右から省略される。*/
//実際に使用する　time
echo time();

//実際に使用する　mktime:２０２４年３月５日　１２時１５分３０秒のタイムスタンプを設定。
$time2 = mktime(12,15,30,3,5,2024);
echo $time2;

/*課題５　date
用途：UNIXのタイムスタンプを元に日付や時刻を表示する。
使い方：date(表示のフォーマット,タイムスタンプ)
　　　　第１引数に入れるフォーマット例　「"Y年m月d日　H時i分s秒"」や「"Y-m-d"」等*/
//実際に使用する
echo date("Y-m-d H時i分s秒",1709640930);