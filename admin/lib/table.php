<?php
require("db.php");

class Table extends DBconn
{
    public $sql;
    public $login;
    public $place;
    public $details;

    public function __construct()
    {
        $this->dbConnect();
    }
    public function tablecreate()
    {
        $this->sql = "CREATE TABLE IF NOT EXISTS category (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            categoryname VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        $this->login = "CREATE TABLE IF NOT EXISTS adminlogin (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        $this->place = "CREATE TABLE IF NOT EXISTS placelist (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            placename VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        $this->details = "CREATE TABLE IF NOT EXISTS detailsbus (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            bus VARCHAR(30) NOT NULL,
            types VARCHAR(30) NOT NULL,  
            froms VARCHAR(30) NOT NULL,
            tos VARCHAR(30) NOT NULL,
            dates VARCHAR(30) NOT NULL,
            images VARCHAR(500) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        try {
            $this->conn->exec($this->sql);
            echo "Table category created successfully";

            $this->conn->exec($this->login);
            echo "Table adminlogin created successfully";

            $this->conn->exec($this->place);
            echo "Table place created successfully";

            $this->conn->exec($this->details);
            echo "Table details created successfully";
        } catch (PDOException $e) {
            echo
            $this->sql . "<br>" . $e->getMessage();
        }
    }
}
$table = new Table();
$table->tablecreate();
