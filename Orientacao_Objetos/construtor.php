<?php

use Post as GlobalPost;

class Post {
    public $likes = 0;
    public $comments = [];
    public $author = '';


    /* Sempre que se criar um objeto o constructor é chamado */
    public function __construct($author) {
        echo 'teste Construtor ...';
        $this->likes = 5;
        $this->comments[] = 'Bem Vindo aos comentários';
        /* sempre lembbrar que parâmetros e caracteristicas são coisas diferentes embora possam ter o mesmo nome */
        $this->author = $author;        
    }

    public function aumentarLikes () {
        $this->likes++;
    }
};

$var = new Post("Rodrigo");

echo $var->author;
echo " " . $var->comments[0];
echo "\n" . $var->likes;
$var->aumentarLikes();
echo "\n" . $var->likes;
