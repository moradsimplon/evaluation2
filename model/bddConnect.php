<?php


// connect in database


public $bdd;
/**
 * @return PDO
 */
public function getDb($bdd)
{
    $bdd = new PDO('mysql:host=localhost;dbname=evaluation2;charset=utf8', 'root', 'zekri59100');
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $this->db = $bdd;
    return $bdd;
}