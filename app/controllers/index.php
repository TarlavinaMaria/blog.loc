<?php
$title = 'Blog/Home';
$header = 'Recent Posts';


$posts = [
    1 => [
        'title' => 'Первый пост',
        'desc' => 'Первый в мире пост',
        'slug' => 'title-1'
    ],
    2 => [
        'title' => 'Второй пост',
        'desc' => 'Второй в мире пост',
        'slug' => 'title-2'
    ],
    3 => [
        'title' => 'Третий пост',
        'desc' => 'Третий в мире пост',
        'slug' => 'title-3'
    ],
    4 => [
        'title' => 'Четвертый пост',
        'desc' => 'Четвертый в мире пост',
        'slug' => 'title-4'
    ],
    5 => [
        'title' => 'Title 5',
        'desc' => 'With supporting text below as a natural lead-in to additional
content',
        'slug' => 'title-5'
    ]
];
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

require_once(VIEWS . '/index.tmpl.php');
?>