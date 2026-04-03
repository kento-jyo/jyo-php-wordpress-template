PHPをまなびます<br>
<?php
    //// ビルトイン関数
    // 配列をカウントする関数
    $arr = [1, 2, 3];
    $x = count($arr);
    echo $x;
    echo "<br>";

    // 絶対値を取る関数
    $y = abs(-5);
    echo $y;
    echo "<br>";

    //// ユーザー定義関数
    function add($x, $y){
        $z = $x + $y;
        return $z;
    }

    $z = 0;

    $sum = add(16, 34);
    echo $sum. "<br>";
    echo $z;
    echo "<br>";

    //// クラス、インスタンス
    //メソッド
    class Student {
        public $name;

        // コンストラクタ
        public function __construct() {
            $this -> name = "tanaka";
        }

        function avg($math, $english){
            echo (($math + $english) / 2). "<br>";
        }
    }

    $a001 = new Student();
    $a001->avg(80, 70);
    $a001 -> name = "sato";
    echo $a001 -> name. "<br>";
    echo "<br>";

    // プロパティ
    $a002 = new Student();
    $a002 -> avg(80, 70);
    echo $a002 -> name. "<br>";
    echo $a002 -> gender. "<br>"; // 存在しないプロパティを呼び出すとエラーになる
    echo "<br>";
?>