<?php
$id = (int) $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts WHERE post_id = ?", [$id])->findOrAbort();
$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->findAll();

$title = 'Blog/Post';
$header = $post['title'];
$content = $post['content'];


require_once(VIEWS . '/post.tmpl.php');
?>