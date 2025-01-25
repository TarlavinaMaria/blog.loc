<?php

$title = 'Blog/Home';
$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->fetchAll();

require_once(VIEWS . '/post.tmpl.php');
?>