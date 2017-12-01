<?php
/**
 * Created by PhpStorm.
 * User: morad
 * Date: 29/11/17
 * Time: 13:52
 */

class BookManager
{

    function addBooks($book)
    {
        $db = $this->getDb();
        $q = $db->prepare("INSERT INTO books SET  Title=?, Author=? , RealeaseDate=? , Resume=? ,Category=?");
        $q->execute([
            $book->getTitle(),
            $book->getAuthor(),
            $book->getRealeaseDate(),
            $book->getResume(),
            $book->getCategory(),
        ]);

        return "book Added";
    }
    function getBooks()
    {
        $res = $this->getDb()->query('SELECT * FROM books');

        $books = $res->fetchAll();

        foreach ($books as $key => $value){

            $books[$key] = new ListBook($value);


        }

        return $books;
    }
    function deleteBook($book)
    {
        $db = $this->getDb()->prepare("DELETE FROM books WHERE id = ?");
        $db->execute([$book->getId()]);



    }

    function getBook($id)
    {

        $q = $this->getDb()->prepare('SELECT * FROM books  WHERE id = :id');
        $q->execute(Array('id'=> $id));
        $Book = $q->fetch();
        return $Book;
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