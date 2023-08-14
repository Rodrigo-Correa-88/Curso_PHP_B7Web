<?php

class Postagem {
    private int $id;
    private int $likes = 0;

    /* encapsulamento */
    public function setId ($i) {
        $this->id = $i;
    }

    public function getId() {
        return $this->id;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }

    public function getLikes() {
        return $this->likes;
    }
}

/* extends da acesso a todos os atributos e funçoes da clasee definida(Herança) */
class Foto extends Postagem {
    private $url;
     
    public function __construct($id) {
        /* setId foi herdado de Postagem */
        $this->setId($id);
    }

    public function setUrl($u)
    {
        $this->url = $u;
    }
    
    public function getUrl() {
        return $this->url;
    }   
}

$foto = new Foto(20);
$foto-> setLikes(12);
$foto->setUrl("Oi");

echo "Foto: #".$foto->getId()."-".$foto->getLikes()." likes ".$foto->getUrl();


?>