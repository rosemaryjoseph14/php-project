<?php
require("../lib/db.php");
class Dashboard extends DBconn{
    
public function __construct()
    {
      $this->dbConnect();
    }
public function busnames(){
    try {
        $stmt = $this->conn->prepare("SELECT COUNT(*)AS 'count' FROM detailsbus");  
        $stmt->execute();
        return $stmt->fetchAll();
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
}
public function placename(){
  try {
    $stmt = $this->conn->prepare("SELECT COUNT(*)AS 'count' FROM placelist");  
    $stmt->execute();
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
public function categoryname(){
  try {
    $stmt = $this->conn->prepare("SELECT COUNT(*)AS 'count' FROM category");  
    $stmt->execute();
    return $stmt->fetchAll();
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
};
$detailsbus = new Dashboard();
$placelist=new Dashboard();
$category=new Dashboard();

$detailsbus->busnames();
$placelist->placename();
$category->categoryname();

?>