<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>第一題</h3>
<?php

$child="女生";

if($child=="男生"){
    echo "一起成長";
}else if($child=="女生"){
     echo "是女兒欸 好可愛!!";
}
echo"<hr>";
?>
<h3>第二題</h3>
<?php

for ($i = 10; $i >= 1; $i--){
    echo $i . " , ";
}
echo"<hr>";
?>
<h3>第三題</h3>
<?php

$i=42;
if ($i % 2 == 0){
echo $i . "是偶數";
} else{
    echo $i . "不是偶數";
}
echo"<hr>";
?>
<h3>第四題</h3>
<h6>
請使用 PHP 撰寫一個程式，根據學生的分數來判斷其成績等級。成績等級的標準如下：<br>
90 分以上為 A 級<br>
80 分以上為 B 級<br>
70 分以上為 C 級<br>
60 分以上為 D 級<br>
60 分以下為 F 級<br>
<h6>
<?php

$score=69;
if ($score >=90){
    echo $score . "分" . "level = A級";
}else if($score >=80){
    echo $score . "分" . "level = B級";
}else if($score >=70){
    echo $score . "分" . "level = C級";
}else if($score >=60){
    echo $score . "分" . "level = D級";
}else{
    echo $score . "分" . "level = E級";
}
echo"<hr>";
?>
<h3>第五題</h3>
<?php

$score=4;
if ($score % 2 == 0 ){
    echo $score . "是偶數";
} else{
    echo $score . "不是偶數";
}
echo"<hr>";
?>
<h3>第六題</h3>

<?php
$year=2023;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0){
    echo "($year)年是閏年";
} else{
    echo "($year)年不是閏年";
}
echo"<hr>";
?>
<h3>第七題，請使用 PHP 撰寫一個程式，比較三個給定的數字，找出最大的數字。</h3>
<?php
$a=90;
$b=20;
$c=30;

$big = $a;
if ($b > $big){
    $big = $b;
}
if ($c > $big){
    $big = $c;
    }
echo "最大值 : $big";
echo "<hr>";
?>

<h3>第八題，請使用 PHP 撰寫一個程式，判斷一個給定的數字是否為奇數或偶數。</h3>

<?php

$score=27;

if ($score % 2 == 0){
    echo $score . "是偶數";
} else {
    echo $score . "是奇數";
}
echo "<hr>";
?>

<h3>第九題，請使用 PHP 撰寫一個程式，根據使用者輸入的身高和體重，計算其 BMI 值，並判斷其屬於正常、過重或過輕。</h3>

<?php

$height=1.65;
$weight=80;

$bmi = $weight / ($height * $height);

if ($bmi < 18.5){
    echo " BMI: (bmi) . 過輕 ";
} else if ($bmi >= 18.5 && $bmi < 24){
    echo " BMI: (bmi) . 正常 ";
} else if ($bmi >= 24 && $bmi < 27){
    echo " BMI: (bmi) . 過重 ";
} else{
    echo " BMI: ($bmi) . 肥胖";
}
echo "<hr>";
?>

<h3>第10提，請使用 PHP 撰寫一個程式，根據使用者輸入的年齡，判斷其屬於哪個年齡層（幼兒、兒童、青少年、青年、中年、老年）。</h3>

<?php

$age=11;

if ($age <= 5){
    echo "$age : 是幼兒 ";
} else if ($age > 5 && $age <= 10){
    echo "$age 歲 : 是兒童 ";
} else if ($age > 10 && $age <= 15){
    echo "$age 歲: 是青少年 ";
} else if ($age > 15 && $age <= 18){
    echo "$age 歲: 是青年 ";
} else if ($age > 18 && $age <= 45){
    echo "$age 歲: 是中年 ";
} else {
    echo "$age 歲: 是老年 ";
} 
?>
</body>
</html>