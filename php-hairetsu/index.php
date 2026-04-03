PHPをまなびます<br>
<?php
//// 配列
echo "配列<br>";
$a = array(3);
$a[0] = "apple";
$a[1] = "banana";
$a[2] = "cherry";

echo $a[0]. "<br>";
echo $a[1]. "<br>";
echo $a[2]. "<br>";
echo "<br>";

// 直接データを入れる
$b = array("dog", "cat", "bird");
echo $b[0]. "<br>";
echo $b[1]. "<br>";
echo $b[2]. "<br>";
echo "<br>";

// 二次元配列
echo "二次元配列<br>";
$c = [["luffy", "zoro", "usopp"], ["roger", "lairy", "shankusu"], ["akainu", "aokiji", "kizaru"]];
echo $c[0][0]. "<br>";
echo $c[0][1]. "<br>";
echo $c[1][2]. "<br>";
echo $c[2][0]. "<br>";
echo "<br>";

//// 連想配列
echo "連想配列<br>";
$tanjiro = "炭治郎";
$hashira = [
    '水柱' => '冨岡義勇',
    '炎柱' => '煉獄杏寿郎',
    '音柱' => '宇髄天元',
    '恋柱' => '甘露寺蜜璃',
    '霞柱' => '時透無一郎',
    '蛇柱' => '伊黒小芭内',
    '岩柱' => '悲鳴嶼行冥',
    '風柱' => '不死川実弥',
    '蟲柱' => '胡蝶しのぶ',
    $tanjiro => '無の呼吸',
];
echo $hashira['水柱']. "<br>";
$hashira['水柱'] = "冨岡義勇さん";
echo $hashira['水柱']. "<br>";
echo $hashira[$tanjiro]. "<br>";
echo "<br>";

//// 配列関数
$numbers = [10, 20, 30];
array_push($numbers, 40);
print_r(count($numbers));
echo "<br>";
// 配列同士の合体
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo "<br>";
echo "<br>";
//// ループ処理
for($i = 0; $i <= 4; $i++) {
    echo $i. "<br>";
}

echo "<br>";
for($i = 0; $i <= 4; $i++) {
    echo $i. "<br>";
    if ($i >= 3){
        break;
    }
}

echo "<br>";
for($i = 0; $i <= 4; $i++) {
    if ($i == 3){
        continue;
    }
    echo $i. "<br>";
}

echo "<br>";
$arr = [2, 4, 6, 8, 10];
for($i = 0; $i <= 4; $i++) {
    echo $arr[$i]. "<br>";
}
?>