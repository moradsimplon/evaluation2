<?php

/**
 * Class ListBook
 */
class ListBook {

    /**
     * @var
     */
    private $id ;
    /**
     * @var
     */
    private $title ;
    /**
     * @var
     */
    private $Author ;
    /**
     * @var
     */
    private $RealeaseDate ;
    /**
     * @var
     */
    private $Resume ;
    /**
     * @var
     */
    private $Category ;


    public function __construct($donnees)
    {
        $this->hydrate($donnees);
    }


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param mixed $Author
     */
    public function setAuthor($Author)
    {
        $this->Author = $Author;
    }

    /**
     * @return mixed
     */
    public function getRealeaseDate()
    {
        return $this->RealeaseDate;
    }

    /**
     * @param mixed $RealeaseDate
     */
    public function setRealeaseDate($RealeaseDate)
    {
        $this->RealeaseDate = $RealeaseDate;
    }

    /**
     * @return mixed
     */
    public function getResume()
    {
        return $this->Resume;
    }

    /**
     * @param mixed $Resume
     */
    public function setResume($Resume)
    {
        $this->Resume = $Resume;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param mixed $Category
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
    }

}