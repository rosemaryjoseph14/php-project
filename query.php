<?php
require("./admin/lib/db.php");
class Detailsbus extends DBconn
{

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
    $searchFrom = isset($_GET["placefrom"]) ? $_GET["placefrom"] : "";
    $searchTo = isset($_GET["placeto"]) ? $_GET["placeto"] : "";
    $searchBus = isset($_GET["bustype"])? $_GET["bustype"] :"";
    $searchDate = isset($_GET["date"]) ? $_GET["date"] : "";
    try {
      $stm = $this->conn->prepare("SELECT * FROM detailsbus WHERE types LIKE  ? AND froms LIKE ? AND tos LIKE ? ");
      $stm->execute(["$searchBus", "%$searchFrom%", "%$searchTo%"]);
      return $stm->fetchAll();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
};
$detailsbus = new Detailsbus();
$detailsbus->dataplace();
$detailsbus->datacategory();
$detailsbus->busfuntion();
