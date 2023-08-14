<?php

class Post {
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    private string $author;

    public function aumentarLikes () {
        $this->likes ++;
    }

    // utilizar set and get e a melhot forma de ter controle nas variáveis
    public function setAuthor($nome) {
        $this->author = ucfirst($nome);                 
    }

    public function getAuthor () {
        if (strlen($this->author) < 5) {
            echo "O autor deve ter no minimo 5 caracteres";
        }else{    
        return $this->author;
        }
    }
}

$post1 = new Post();
$post1->setAuthor("cloud");
// echo $post1->author; agora com a propriedade privada não tem mais como ter o acesso direto 
// somente pela função getAuthor.
echo $post1->getAuthor();
$post2 = new Post();


?>