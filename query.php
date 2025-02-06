<?php
require("./admin/lib/db.php");
class Detailsbus extends DBconn{
     


    public function __construct()
    {
      $this->dbConnect();
    }

    public function dataplace()
    {
      try {
        $stmt = $this->conn->prepare("SELECT * FROM placelist");
  
        $stmt->execute();
        return $stmt->fetchAll();
        header('location:index.php');
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }
 
};

$detailsbus = new Detailsbus();
$detailsbus->dataplace();