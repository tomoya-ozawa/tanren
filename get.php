<?php
require_once('define.php');

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
}

if (isset($_GET['since'])) {
    $since = $_GET['since'];
} else {
    $since = 0;
}

if (isset($_GET['until'])) {
    $until = $_GET['until'];
} else {
    $until = 19;
}

if (isset($post_id)) {
    $query = 'SELECT id, created_time, post_id, title, message FROM posts WHERE post_id = :post_id';
} else {
    $query = 'SELECT id, created_time, post_id, title, message FROM posts ORDER BY post_id DESC LIMIT :since, :until';
}

try {
        $dbh = new PDO(DSN, DBUSER, DBPASS);
        $stmt = $dbh->prepare($query);
        if (isset($post_id)) {
            $stmt->bindValue(':post_id', $post_id, PDO::PARAM_STR);
        }
        $stmt->bindValue(':since', $since, PDO::PARAM_INT);
        $stmt->bindValue(':until', $until, PDO::PARAM_INT);
        $stmt->execute();
        $post_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($post_data, JSON_NUMERIC_CHECK);

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit();
    }
