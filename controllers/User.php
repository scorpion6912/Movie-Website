<?php
class User{
    private $login;
    private $pseudo;
    private $pwd;
    private $rank;


    public function __construct($login, $pseudo, $pwd, $rank)
    {
        $this->login = $login;
        $this->pseudo = $pseudo;
        $this->pwd = $pwd;
        $this->rank = $rank;
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPwd()
    {
        return $this->pwd;
    }


    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }


    public function getRank()
    {
        return $this->rank;
    }


    public function setRank($rank)
    {
        $this->rank = $rank;
    }


}
?>