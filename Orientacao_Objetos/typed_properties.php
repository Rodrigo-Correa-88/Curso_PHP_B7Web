<?php
class Post {
    /* define o tipo da propriedade da classe */
    public int /* tipo de propriedade */ $likes = 0;
    public array $comments = [];
    public string $author = '';
};

$post1 = new Post();
$post1->likes = 2;
$post1 -> aumentarLikes();
echo $post1 -> likes . "\n";