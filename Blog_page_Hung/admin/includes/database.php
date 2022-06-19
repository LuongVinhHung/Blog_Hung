<?php
class database
{

    private $dns = "mysql:host=b6uwtwasnlgiearhpn21-mysql.services.clever-cloud.com;dbname=b6uwtwasnlgiearhpn21";
    private $user = "u6udlpcx13c1akxn";
    private $pass = "CXSx8mJRjRzqvplBlIUl";
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO($this->dns, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Connect failed" . $e->getMessage();
        }
        return $this->conn;
    }
}


?>