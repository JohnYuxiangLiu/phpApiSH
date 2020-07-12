<?php

// import repository class

require("repository.php");


class Controller
{
    private $db;
    private $requestMethod;

    public function __construct($db)
    {
        $this->db = $db;
        // $this->requestMethod = $requestMethod;

        $this->repository = new Repository($db);
    }

    private function getUsers()
    {
        $result = $this->repository->findAll();
        $result['status_code'] = 200;
        $result['body'] = json_encode($result, JSON_PRETTY_PRINT);
        return $result;
    }

    public function processRequest()
    {
        // switch ($this->requestMethod) {
        //     case 'GET':
        //         // if ($this->userId) {
        //         //     // $response = $this->getUser($this->userId);
        //         // } else {

        //         // };

        //         $response = $this->getUsers();
        //         break;
        //     case 'POST':
        //         // $response = $this->createUserFromRequest();
        //         break;
        //     case 'PUT':
        //         // $response = $this->updateUserFromRequest($this->userId);
        //         break;
        //     default:
        //         // $response = $this->notFoundResponse();
        //         break;
        // }
        $response = $this->getUsers();
        header($response['status_code']);
        if ($response['body']) {
            // header('Content-Type: application/json');
            echo $response['body'];
        }
    }
}
