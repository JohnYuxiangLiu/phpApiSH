<?php


class Repository
{


    private $db = null;

    // constructor: dependency injection
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
        $statement = "SELECT id, first_name, last_name, arrival, hobby, tech FROM persons";

        try {
            $query = $this->db->query($statement);
            // RETURN an array 
            $result = $query->fetch_all(MYSQLI_ASSOC);
            return $result;
        } catch (Exception $e) {
            echo 'Caught exception ', $e->getMessage(), '\n';
        }
    }
}
