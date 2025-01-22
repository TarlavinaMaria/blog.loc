<?php
$title = 'Blog/Home';
$header = 'Recent Posts';


$posts = [
    1 => [
        'title' => 'Title 1',
        'desc' => 'With supporting text below as a natural lead-in to additional
    content',
        'slug' => 'title-1'
    ],
    2 => [
        'title' => 'Title 2',
        'desc' => 'With supporting text below as a natural lead-in to additional
    content',
        'slug' => 'title-2'
    ],
    3 => [
        'title' => 'Title 3',
        'desc' => 'With supporting text below as a natural lead-in to additional
    content',
        'slug' => 'title-3'
    ],
    4 => [
        'title' => 'Title 4',
        'desc' => 'With supporting text below as a natural lead-in to additional
    content',
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
        'title' => 'First post',
        'slug' => 'item-1'
    ],
    2 => [
        'title' => 'Second post',
        'slug' => 'item-2'
    ],
    3 => [
        'title' => 'Third post',
        'slug' => 'item-3'
    ],
    4 => [
        'title' => 'Fourth post',
        'slug' => 'item-4'
    ],
    5 => [
        'title' => 'Fifth post',
        'slug' => 'item-5'
    ]
];

require_once('../app/views/index.tmpl.php');
?>