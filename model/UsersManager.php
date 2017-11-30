<?php

class UsersManager
{
    function getUsers()
    {
        $res = $this->getDb()->query('SELECT * FROM users');

        $users = $res->fetchAll();

        foreach ($users as $key => $value){

            $users[$key] = new ListUsers($value);


        }

        return $users;
    }
    function deleteUsers($users)
    {
        $db = $this->getDb()->prepare("DELETE FROM users WHERE id = ?");
        $db->execute([$users->getId()]);

    }
    function getUser($id)
    {

        $q = $this->getDb()->prepare('SELECT * FROM users  WHERE id = :id');
        $q->execute(Array('id'=> $id));
        $User = $q->fetch();
        return $User;
    }
    /**
     * @return PDO
     */
    public function getDb()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=evaluation2;charset=utf8', 'root', 'zekri59100');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $bdd;
        return $bdd;

    }
}