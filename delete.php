<?php
require_once('define.php');

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
}

$query = 'DELETE FROM posts WHERE post_id = :post_id';

try {
        $dbh = new PDO(DSN, DBUSER, DBPASS);
        $stmt = $dbh->prepare($query);
        $stmt->bindValue(':post_id', $post_id, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit();
    }


header('location: edit.html');
exit();
