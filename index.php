<?php
require_once('define.php');

$dsn = 'mysql:dbname=' . DBNAME . ';host=' . DBHOST . ';charset=utf8';
$user = DBUSER;
$password = DBPASS;
$query = 'SELECT * FROM posts';
try {
    $dbh = new PDO($dsn, $user, $password);
    $stmt = $dbh->prepare($query);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
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
<pre>
    <?php var_dump($stmt->fetchAll()); ?>
</pre>
    </body>
</html>
