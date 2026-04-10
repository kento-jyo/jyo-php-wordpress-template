PHPをまなびます<br>
<?php
function dbConnect(){
    $dsn = 'mysql:host=localhost;dbname=testdb;charset=utf8';
    $user = 'root';
    $password = 'Kentochair528';

    try {
        $dbh = new \PDO($dsn, $user, $password,[
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
        return $dbh;
    } catch (\PDOException $e) {
        echo 'DB接続エラー:' . $e->getMessage();
        exit();
    };

    return $dbh;
}

?>