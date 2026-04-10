PHPをまなびます<br>
<?php
require_once 'dbc.php';

$id = $_GET['id'];

if(empty($id)){
exit('IDが不正です');
}

$dbh = dbConnect();

// 1. SQLを準備（IDで検索する）
// :id は「あとで入れるよ」という目印（プレースホルダ）
$stmt = $dbh->prepare("SELECT * FROM blog WHERE id = :id");

// 2. 目印に実際のIDを紐付ける（型を整数に指定して安全に！）
$stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);

// 3. 実行！
$stmt->execute();

// 4. 結果を1件取り出す
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// 5. データがなかった場合の処理
if (!$result) {
    exit('指定されたIDの記事は見つかりませんでした。');
}

// 6. 画面に表示する
?>

<hr>
<h2>記事詳細</h2>
<div class="post-detail">
    <h3>タイトル：<?php echo htmlspecialchars($result['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
    <p>投稿者：<?php echo htmlspecialchars($result['author'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p>日付：<?php echo htmlspecialchars($result['post_date'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p>内容：<br><?php echo nl2br(htmlspecialchars($result['content'], ENT_QUOTES, 'UTF-8')); ?></p>
</div>
?>