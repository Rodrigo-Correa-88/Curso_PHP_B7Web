<?php

class Post {
    public $likes = 0;
    public $comments = [];
    public $author = '';
};

$post1 = new Post();

$post1->likes = 2;
echo $post1 -> likes . "\n";

$post1->comments[] = "Olá tudo bem?";
$post1->comments[] = "Olá como vai?";

print_r($post1->comments);

$post2 = new Post();

$post2->likes = 10;
echo $post2->likes;


