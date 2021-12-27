<?php
class Casting {
    private $id;
    private $id_film;
    private $id_acteur;

    public function __construct($id_film, $id_acteur)
    {
        $this->id_film = $id_film;
        $this->id_acteur = $id_acteur;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdFilm($id_film)
    {
        $this->id_film = $id_film;
    }


    public function setIdActeur($id_acteur)
    {
        $this->id_acteur = $id_acteur;
    }



    public function getId()
    {
        return $this->id;
    }


    public function getIdFilm()
    {
        return $this->id_film;
    }


    public function getIdActeur()
    {
        return $this->id_acteur;
    }

}

?>
