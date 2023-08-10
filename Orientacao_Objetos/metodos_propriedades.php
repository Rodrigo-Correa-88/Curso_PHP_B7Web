<?php

class Post {
    /* Propriedades são as caracteristicas que a classe possui */
    public /* public e quando a propriedade e acessivel fora da classe */ $likes = 0;
    private /* private e quando a propriedade so é acessivel dentro da classe */ $comments = [];
    public $author = '';

    /* métodos são fuções dentro da classe */
    public function aumentarLikes () {
        /* this faz referencia as propriedades da classe */
        $this->likes++;
    }
};


$post1 = new Post();
$post1->likes = 2;
$post1 -> aumentarLikes();
echo $post1 -> likes . "\n";