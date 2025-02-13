<?php
require("./admin/lib/db.php");
class Detailsbus extends DBconn{
     
public $stmt;
public $stm;



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
   
    public function datacategory()
    {
      try {
        $stmt = $this->conn->prepare("SELECT * FROM category");
  
        $stmt->execute();
        return $stmt->fetchAll();
        header("location:index.php");
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }
    public function busfuntion()
    {
      try {
        $stm = $this->conn->prepare("SELECT * FROM busdetails WHERE category LIKE ? OR placelist LIKE ? ");
        $stm->execute();
        $stm->fetchAll();
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }}
};

$detailsbus = new Detailsbus();
$detailsbus->dataplace();
$detailsbus->datacategory();
$detailsbus->busfuntion();

