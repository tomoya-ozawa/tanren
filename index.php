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
    exit();
}


?>

<!DOCTYPE html>
<html ng-app="view">
    <head>
<script type="text/javascript" src="angular-1.4.3/angular.js"></script>
<script type="text/javascript" src="angular-1.4.3/angular-resource.js"></script>
<script type="text/javascript" src="app.js"></script>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<div ng-controller="viewCtrl">
{{ppp}}
    <ul>
        <li ng-repeat="list in list">{{list.name}}</li>
    </ul>
</div>

<pre>
    <?php var_dump($stmt->fetchAll()); ?>
</pre>
    </body>
</html>
