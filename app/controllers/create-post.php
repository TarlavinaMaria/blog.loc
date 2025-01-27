<?php
$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY rating DESC LIMIT 5;")->findAll();
$title = 'Blog/New Post';
$header = 'Create New Post';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fillable = ['title', 'excerpt', 'content'];
    $data = loadReqData($fillable);

    $errors = [];
    // dump($data);

    if (empty(trim($data['title']))) {
        $errors['title'] = 'Title is required';
    }
    if (empty(trim($data['excerpt']))) {
        $errors['excerpt'] = 'Excerpt is required';
    }
    if (empty(trim($data['content']))) {
        $errors['content'] = 'Content is required';
    }
}

require_once(VIEWS . '/create-post.tmpl.php');
?>