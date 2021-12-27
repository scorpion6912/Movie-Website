<?php
require_once '../controllers/Film.php';

class FilmRepository{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addFilm(Film $film){
        $q = $this->bdd->prepare('INSERT INTO `film` (`affiche`, `nom`, `annee`, `description`, `score`, `nbVotants`) 
            VALUES(:affiche, :nom, :annee, :description, :score, :nbVotants)');

        $q->execute(array(':affiche' => $film->getAffiche(), ':nom' => $film->getNom(), ':annee' => $film->getAnnee(), ':description' => $film->getDescription(), ':score' => $film->getScore(),
                ':nbVotants' => $film ->getNbVotants()));
    }

    public function updateFilm(Film $film, $id)
    {
        $q = $this->bdd->prepare('UPDATE `film` SET `affiche`=?, `nom` = ?, `annee` = ?, `description`=?, `score` = ?, `nbVotants` = ? 
                                    WHERE `id` = ?');

        $q->execute(array( $film->getAffiche(), $film->getNom(),$film->getAnnee(),$film->getDescription(),$film->getScore(), $film->getNbVotants(),$id));
    }

    public function delete($id)
    {
        $q = $this->bdd->prepare('DELETE FROM film WHERE id = ?');
        $q->execute(array($id));
    }

    public function get($id)
    {
        $id = (int) $id;

        $q = $this->bdd->prepare('SELECT * FROM film WHERE id = ?');
        $q->execute(array($id));
        $donnees = $q->fetch();
        return new Film($donnees['affiche'], $donnees['nom'], $donnees['annee'], $donnees['description'], $donnees['score'], $donnees['nbVotants']);
    }

    public function getAllList()
    {
        $q = $this->bdd->prepare('SELECT * FROM film');
        $q-> execute();

        foreach($q as $data){
            $id=$data['id'];

            $q2 = $this->bdd->prepare('SELECT nom_act, prenom_act FROM acteur, casting where casting.id_acteur = acteur.id_acteur and id_film=?');
            $q2->execute(array($id));
            include '../views/listeFilm.php';
            
        }
    }

    public function getFilmById($id)
    {
        $q = $this->bdd->prepare('SELECT * FROM film where id=?');
        $q-> execute(array($id));

        foreach($q as $data){
            $id=$data['id'];
            $q2 = $this->bdd->prepare('SELECT nom_act, prenom_act FROM acteur, casting where casting.id_acteur = acteur.id_acteur and id_film=?');
            $q2->execute(array($id));
            include '../views/voter_film.php';
        }
    }

    public function Voter($score, $id){
        $q = $this->bdd->prepare('UPDATE film SET score=(score*nbVotants+?)/(nbVotants+1), nbVotants= nbVotants+1 where id=?');
        $q-> execute(array($score, $id));
        require '../views/vote_effectue.php';
    }

    public function getAllFilm()
    {
        $q = $this->bdd->prepare('SELECT * FROM film');
        $q-> execute();
        foreach($q as $data){
            $id=$data['id'];
            $affiche=$data['affiche'];
            $nom=$data['nom'];
            $annee=$data['annee'];
            $description=$data['description'];
            $score=$data['score'];
            $nbVotants=$data['nbVotants'];
            echo "<tr><td>$id</td><td>$affiche</td><td>$nom</td><td>$annee</td><td>$description</td><td>$score</td><td>$nbVotants</td><td><a href='filmView.php?id=$id'><i class='fas fa-times'></i></a></td><td><a href='modif_film.php?id=$id'><i class='fas fa-pen'></i></a></td></tr>";
        }
    }
}
?>