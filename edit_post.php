<?php

$id = $_GET['id'];
print($id);


?>

<!DOCTYPE html>
<html ng-app="view">
    <head>
    <script type="text/javascript" src="angular-1.4.3/angular.js"></script>
    <script type="text/javascript" src="angular-1.4.3/angular-resource.js"></script>
    <script type="text/javascript" src="app.js"></script>
        <meta charset="utf-8">
        <title>
</title>
    </head>
    <body>

<div ng-controller="postCtrl">

{{get}}

<form class="" action="post.php" method="post">
<input type="text" name="title" id="title" value="" placeholder="title" required></input>
<input type="text" name="message" id="message" value="" placeholder="本文" required></input>
<button type="submit" name="button">submit</button>
</form>

----------------------------------------------------
<br/>

<div ng-controller="postCtrl">

<div class="post" ng-repeat="post in get | orderBy:'-id'">

<div class="post_title">{{post.title}}</div>
<div class="post_created_time">{{post.created_time}}</div>
<div class="post_message">{{post.message | truncate:50}}</div>
<a ng-href="edit_post.php?id={{post.post_id}}">編集</a>
<a ng-href="delete.php?id={{post.post_id}}">削除</a>
<br/>
---------------------------------------------------


    </body>
</html>
