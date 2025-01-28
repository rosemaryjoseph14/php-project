<?php
require("../lib/db.php");

class Placelist extends DBconn
{
  public $stmt;
  public $sql;
  public $name;
  public $editbt;
  public $editbtn;
  public $subbt;
  public $deletebtn;



  public function __construct()
  {
    $this->dbConnect();
  }

  public function insertdata()
  {

    if (isset($_POST['addpl'])) {
      $this->name = $_POST["placename"];
      try {
        $sql = "INSERT INTO placelist (placename)
        VALUES ('$this->name')";
        $this->conn->exec($sql);
        header("location:index.php");
      } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }
  }
  public function dataplace()
  {
    try {
      $stmt = $this->conn->prepare("SELECT * FROM placelist");

      $stmt->execute();
      return $stmt->fetchAll();
      header("location:index.php");
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  public function dataedit()
  {
    if (isset($_POST["edit"])) {
      $this->name = $_POST['edit'];
    }
    try {
      $this->editbt = $this->conn->prepare("SELECT * FROM placelist WHERE id='$this->name'");
      $this->editbt->execute();
      return $this->editbt->fetchAll();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

  public function submitdata()
  {

    if (isset($_POST['submit'])) {
      $this->editbtn = $_POST["submit"];
      $this->subbt = $_POST["editinput"];
      try {
        $sql = "UPDATE placelist SET placename='$this->subbt' WHERE id='$this->editbtn'";
        $this->conn->exec($sql);
        header("location:index.php");
      }
     
      catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();}
    }
    if (isset($_POST["cancel"])) {
      header("location:index.php");
    }  
  }

  public function delete()
  {
    if (isset($_POST["delete"])) {
      $this->deletebtn = $_POST['delete'];
      try {
        $sql = "DELETE FROM placelist WHERE id='$this->deletebtn'";
        $this->conn->exec($sql);
        header("location:index.php");
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }
    
  }
};
$placelist = new Placelist();
$placelist->insertdata();
$placelist->dataplace();
$placelist->dataedit();
$placelist->submitdata();
$placelist->delete();





