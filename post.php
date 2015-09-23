<?php
require_once('define.php');
$insert_title = $_POST['title'];
$insert_message = $_POST['message'];
$insert_post_id = getPostID();

$query = 'INSERT INTO posts(post_id, title, message) VALUES(:post_id, :title, :message)';

try {
    $dbh = new PDO(DSN, DBUSER, DBPASS);
    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':post_id', $insert_post_id);
    $stmt->bindValue(':title', $insert_title);
    $stmt->bindValue(':message', $insert_message);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
    header('location: index.html');
    exit();

function getPostID()
{
    $post_id = date('YmdHis');
    return $post_id;
}

?>
