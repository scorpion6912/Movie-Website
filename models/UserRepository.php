<?php
require_once '../controllers/User.php';

class UserRepository{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function addUser(User $user){
        $q = $this->bdd->prepare('INSERT INTO `user` (`login`,`pseudo`, `pwd`, `rank`) VALUES (:login, :pseudo, :pwd, :rank)');

        $q->execute(array(':login' => $user->getLogin(), ':pseudo' => $user->getPseudo(), ':pwd' => $user->getPwd(), ':rank' => $user->getRank()));
        return true;
    }

    public function removeUser(User $user){
        $q =$this->bdd->prepare('DELETE from `user` where `login` = :login');

        $q->execute(array(':login' => $user->getLogin()));
    }

    public function updateUser(User $user){
        $q = $this->bdd->prepare('UPDATE `user` SET `login` = :login, `pseudo`= :pseudo, `pwd` = :pwd, `rank` = :rank WHERE `login` = :login');

        $q->execute(array(':login' => $user->getLogin(), ':pseudo' => $user->getPseudo(), ':pwd' => $user->getPwd(), ':rank' => $user->getRank()));
    }

    public function getRank(User $user){
        $q = $this->bdd->prepare('SELECT `rank` FROM `user` WHERE `login` = :login');
        $q->execute(array(':login' => $user->getLogin()));
        return $q;
    }

    public function getUser($login){
        $q = $this->bdd->prepare('SELECT * FROM `user` WHERE `login` = :login');
        $q->execute(array(':login' => $login));

        $row = $q->fetch();

        if ($row)
            return new User($row['login'], $row['pseudo'], $row['pwd'], $row['rank']);
        else
            return null;
    }
}
?>