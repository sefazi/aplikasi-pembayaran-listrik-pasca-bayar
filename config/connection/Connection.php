<?php

namespace Connection;

use PDO;
use Symfony\Component\Yaml\Yaml;

class Connection
{
    private $host;
    private $username;
    private $password;
    private $db_name;

    private $dbh;
    private $stmt;

    public function connect()
    {
        // Fill the private variable
        $this->GetYaml();
        // Initiate
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        try {
            /**
             * Connection to Database
             * 
             */
            $this->dbh = new PDO($dsn, $this->username, $this->password);

            // Set atribute
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return null;
        } catch (\PDOException $e) {
            $data = [
                'title' => 'Error Ocurred',
                'headline' => '500',
                'header' => 'Oops! You hit snag',
                'message' => $e->getMessage()
            ];
            error_redirect($data);
        }
    }

    function GetYaml()
    {
        // Parse the YAML file and get the values as an array
        $config = Yaml::parseFile(__DIR__ . '/config.yaml');

        // Access the values from the array
        $this->host = $config['database']['host'];
        $this->db_name = $config['database']['db_name'];
        $this->username = $config['database']['username'];
        $this->password = $config['database']['password'];
    }

    /**
     * ----------------------------------------
     * Query SQL with Raw statement
     * ----------------------------------------
     * this function receive query and parameter,
     * for example 'SELECT * FROM users'
     *
     * @param string|array 
     */
    public function Raw($query, $param = [])
    {
        // Clear space from query
        $query = rtrim($query);

        // Preparing statement
        $this->stmt = $this->dbh->prepare($query);

        // Bind Param 
        $index = 1;
        foreach ($param as $value) {
            $this->bind($index, $value);
            $index++;
        }
        return $this;
    }

    private function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function Exec()
    {
        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            $data = [
                'title' => 'Error Ocurred',
                'headline' => '500',
                'header' => 'Oops! You hit snag',
                'message' => $e->getMessage()
            ];
            error_redirect($data);
        }
    }

    public function getRessult()
    {
        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            $data = [
                'title' => 'Error Ocurred',
                'headline' => '500',
                'header' => 'Oops! You hit snag',
                'message' => $e->getMessage()
            ];
            error_redirect($data);
        }
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getRessultArray()
    {
        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            $data = [
                'title' => 'Error Ocurred',
                'headline' => '500',
                'header' => 'Oops! You hit snag',
                'message' => $e->getMessage()
            ];
            error_redirect($data);
        }
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function First()
    {
        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            $data = [
                'title' => 'Error Ocurred',
                'headline' => '500',
                'header' => 'Oops! You hit snag',
                'message' => $e->getMessage()
            ];
            error_redirect($data);
        }
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
