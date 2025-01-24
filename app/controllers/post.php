<?php
$most_popular_posts = [
    1 => [
        'title' => 'Первый пост',
        'slug' => 'item-1'
    ],
    2 => [
        'title' => 'Второй пост',
        'slug' => 'item-2'
    ],
    3 => [
        'title' => 'Третий пост',
        'slug' => 'item-3'
    ],
    4 => [
        'title' => 'Четвертый пост',
        'slug' => 'item-4'
    ],
    5 => [
        'title' => 'Пятый пост',
        'slug' => 'item-5'
    ]
];

require_once(VIEWS . '/post.tmpl.php');
?>