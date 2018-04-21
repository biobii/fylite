<?php

namespace FYLite;

use Slim\PDO\Database;

class Model
{

    protected $db = null;
    protected $table;

    private $driver;
    private $host;
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $dsn;

    public function __construct()
    {
        $this->connect();
    }

    private function setup()
    {
        require __DIR__ . '/../config/app.php';

        if ($config['database']['connection']) {
            $this->driver = $config['database']['driver'];
            $this->host = $config['database']['host'];
            $this->dbname = $config['database']['dbname'];
            $this->dbuser = $config['database']['username'];
            $this->dbpass = $config['database']['password'];

            $this->dsn = "$this->driver:host=$this->host;dbname=$this->dbname;charset=utf8";
            return true;
        }
        return false;
    }

    private function connect()
    {
        if ($this->setup()) {
            $this->db = new Database($this->dsn, $this->dbuser, $this->dbpass);
        }
    }

}