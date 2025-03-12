<?php
require("../lib/db.php");
class Dashboard extends DBconn
{
  public function __construct()
  {
    $this->dbConnect();
  }
  public function busnames()
  {
    try {
      $stmt = $this->conn->prepare("SELECT COUNT(*)AS 'count' FROM detailsbus");
      $stmt->execute();
      return $stmt->fetchAll();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
  public function placename()
  {
    try {
      $stmt = $this->conn->prepare("SELECT COUNT(*)AS 'count' FROM placelist");
      $stmt->execute();
      return $stmt->fetchAll();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
  public function categoryname()
  {
    try {
      $stmt = $this->conn->prepare("SELECT COUNT(*)AS 'count' FROM category");
      $stmt->execute();
      return $stmt->fetchAll();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }}


    public function graphfuntion(){
      try {
        $sql = $this->conn->prepare("SELECT DATE_FORMAT(reg_date, '%Y-%m-%d') AS Date, COUNT(bus) AS no_of_rows FROM detailsbus GROUP BY Date ORDER BY Date");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        $no_of_rows=[];
        if (count($result) > 0) {
            foreach ($result as $row) {
               $no_of_rows[]= $row['no_of_rows'];
            }
        } 
        return $no_of_rows;
      } catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
      }
    }
};
$detailsbus = new Dashboard();


$detailsbus->busnames();
$detailsbus->placename();
$detailsbus->categoryname();
$detailsbus->graphfuntion();
