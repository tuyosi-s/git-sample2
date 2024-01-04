<?php


//課題１
$name = "つよし";
if($name === "つよし"){
    echo "私はあなたの名前です";
}else{
    echo "あなたの名前ではありません";
}


//課題２
$total = 0;
for($i=1;$i<=10000;$i++){
    $total += $i;
}
echo $total;


//課題３
$fruits=["りんご","みかん","ばなな","すいか","柿"];
foreach($fruits as $fruit){
    echo $fruit;
}


//課題４
$start = 1;
$end = 100;

for($i = $start;$i <= $end;$i ++){
    if($i % 5 == 0){
    echo $i; 
    }
}

