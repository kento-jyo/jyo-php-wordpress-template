<?php
    namespace phpmanabu;

    // useで特定の名前空間の関数を呼び出す（ここでは存在しないのでエラーになる）
     use function GroupA\Common\Main\send;

    function aiueo() {
        echo "aiueo関数はphpmanabu名前空間に属しており、別ファイルで同名で定義できます。<br>";
    }

    aiueo();
     send();
?>