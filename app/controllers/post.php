<?php
$id = (int) $_GET['id'] ?? 0;
$action = $_POST['action'] ?? null;

// Получение данных поста
$post = $db->query("SELECT * FROM posts WHERE post_id = ?", [$id])->findOrAbort();
$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY rating DESC LIMIT 5;")->findAll();

$title = 'Blog/Post';
$header = $post['title'];
$content = $post['content'];
$rating = $post['rating'];

// Обновляем данные рейтинга
if ($action === 'up') {
    $db->query("UPDATE posts SET rating = rating + 1 WHERE post_id = ?", [$id]);
} elseif ($action === 'down') {
    $db->query("UPDATE posts SET rating = rating - 1 WHERE post_id = ?", [$id]);
}

require_once(VIEWS . '/post.tmpl.php');
?>