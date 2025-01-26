<?php
$id = (int) $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts WHERE post_id = ?", [$id])->findOrAbort();
$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY rating DESC LIMIT 5;")->findAll();

$title = 'Blog/Post';
$header = $post['title'];
$content = $post['content'];
$rating = $post['rating'];


require_once(VIEWS . '/post.tmpl.php');
?>