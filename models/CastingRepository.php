<?php
require_once '../controllers/Casting.php';

class CastingRepository{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addCasting(Casting $casting){
        $q = $this->bdd->prepare('INSERT INTO `casting` (`id_film`, `id_acteur`) 
            VALUES(:id_film, :id_acteur)');

        $q->execute(array(':id_film' => $casting->getIdFilm(), ':id_acteur' => $casting->getIdActeur()));
    }

    public function updateCasting(Casting $casting, $id)
    {
        $q = $this->bdd->prepare('UPDATE `casting` SET id_film=?, id_acteur = ? WHERE id = ?');

        $q->execute(array($casting->getIdFilm(), $casting->getIdActeur(), $id));
    }

    public function delete($id)
    {
        $q = $this->bdd->prepare('DELETE FROM casting WHERE id = ?');
        $q->execute(array($id));
    }

    public function get($id)
    {
        $id = (int) $id;

        $q = $this->bdd->prepare('SELECT * FROM casting WHERE id = ?');
        $q->execute(array($id));
        $donnees = $q->fetch();
        return new Casting($donnees['id_film'], $donnees['id_acteur']);
    }

    public function getAllCasting()
    {
        $q = $this->bdd->prepare('SELECT * FROM casting');
        $q-> execute();
        foreach($q as $data){
            $id=$data['id'];
            $id_film=$data['id_film'];
            $id_acteur=$data['id_acteur'];
            echo "<tr><td>$id</td><td>$id_film</td><td>$id_acteur</td><td><a href='castingView.php?id=$id'><i class='fas fa-times'></i></a></td><td><a href='modif_casting.php?id=$id'><i class='fas fa-pen'></i></a></td></tr>";
        }
    }

}
?>