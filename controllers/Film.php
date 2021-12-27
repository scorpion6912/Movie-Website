<?php
class Film {
    private $id;
    private $affiche;
    private $nom;
    private $desciption;
    private $annee;
    private $score;
    private $nbVotants;

/*
    public function checkAjFilm(Film $film){
        if (!empty($film->getNom() and $film->getAnnee() and $film->getScore() and $film->getNbVotants())) {
            return true;
        }
        return false;
    }
*/

    public function __construct($affiche, $nom, $annee, $description, $score, $nbVotants)
    {
        $this->affiche = $affiche;
        $this->nom = $nom;
        $this->annee = $annee;
        $this->description = $description;
        $this->score = $score;
        $this->nbVotants = $nbVotants;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function setScore($score)
    {
        $this->score = $score;
    }


    public function setNbVotant($nbVotants)
    {
        $this->nbVotants = $nbVotants;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getAffiche()
    {
        return $this->affiche;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAnnee()
    {
        return $this->annee;
    }


    public function getScore()
    {
        return $this->score;
    }


    public function getNbVotants()
    {
        return $this->nbVotants;
    }

}

?>
