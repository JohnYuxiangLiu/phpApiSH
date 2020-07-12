

<?php

class DatabaseConnector
{
    private $dbConnection = null;

    public function __construct()
    {
        $host = "localhost";
        $port = 3306;
        $db = "interview";
        $username = "root";
        $password = "";



        try {
            $this->dbConnection = new mysqli($host, $username, $password, $db);

        } catch (Exception $e) {
            echo($e->getMessage());
            // exit();
        }
    }

    public function getConnection(){
        return $this->dbConnection;
    }
}


?>

