<?php
require_once('define.php');

$dsn = 'mysql:dbname=' . DBNAME . ';host=' . DBHOST . ';charset=utf8';
$user = DBUSER;
$password = DBPASS;
$query = 'SELECT post_id, title, message FROM posts';
try {
    $dbh = new PDO($dsn, $user, $password);
    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':post_id', $insert_post_id);
    $stmt->bindValue(':title', $insert_title);
    $stmt->bindValue(':message', $insert_message);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
</title>
    </head>
    <body>

    </body>
</html>
