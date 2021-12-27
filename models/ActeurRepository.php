<?php
require_once '../controllers/Acteur.php';

class ActeurRepository{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addActeur(Acteur $acteur){
        $q = $this->bdd->prepare('INSERT INTO `acteur` (`nom_act`, `prenom_act`) 
            VALUES(:nom, :prenom)');

        $q->execute(array(':nom' => $acteur->getNom(), ':prenom' => $acteur->getPrenom()));
    }

    public function updateActeur(Acteur $acteur, $id)
    {
        $q = $this->bdd->prepare('UPDATE `acteur` SET nom_act=?, prenom_act = ? WHERE id_acteur = ?');

        $q->execute(array($acteur->getNom(), $acteur->getPrenom(), $id));
    }

    public function delete($id)
    {
        $q = $this->bdd->prepare('DELETE FROM acteur WHERE id_acteur = ?');
        $q->execute(array($id));
    }

    public function get($id)
    {
        $id = (int) $id;

        $q = $this->bdd->prepare('SELECT * FROM acteur WHERE id_acteur = ?');
        $q->execute(array($id));
        $donnees = $q->fetch();
        return new acteur($donnees['nom_act'], $donnees['prenom_act']);
    }

    public function getAllActeur()
    {
        $q = $this->bdd->prepare('SELECT * FROM acteur');
        $q-> execute();
        foreach($q as $data){
            $id=$data['id_acteur'];
            $nom=$data['nom_act'];
            $prenom=$data['prenom_act'];
            echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td><td><a href='acteurView.php?id=$id'><i class='fas fa-times'></i></a></td><td><a href='modif_acteur.php?id=$id'><i class='fas fa-pen'></i></a></td></tr>";
        }
    }

}
?>