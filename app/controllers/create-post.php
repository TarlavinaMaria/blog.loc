<?php
require_once(CORE . "/classes/Validator.php");

$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY rating DESC LIMIT 5;")->findAll();
$title = 'Blog/New Post';
$header = 'Create New Post';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fillable = ['title', 'excerpt', 'content'];
    $data = loadReqData($fillable);

    $errors = [];

    $rules = [
        'title' => [
            'required' => true,
            'min' => 7,
            'max' => 30
        ],
        'excerpt' => [
            'required' => true,
            'min' => 15,
            'max' => 100
        ],
        'content' => [
            'required' => true,
            'min' => 15,
            'max' => 300
        ]
    ];

    $validator = new Validator();
    $validator->validate($data, $rules);


    if (!$validator->hasErrors()) {
        if ($db->query("INSERT INTO posts (title, excerpt, content) VALUES (:title, :excerpt, :content)", $data)) {
            echo "Post created";
        } else {
            echo "Error";
        }
    }
}

require_once(VIEWS . '/create-post.tmpl.php');
?>