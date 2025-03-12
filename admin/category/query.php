<?php
require("../lib/db.php");

class Category extends DBconn
{
  public $stmt;
  public $sql;
  public $name;
  public $editbt;
  public $subbt;
  public $editbtn;
  public $deletebtn;
  public function __construct()
  {
    $this->dbConnect();
  }

  public function insertdata()
  {

    if (isset($_POST['addct'])) {
      $this->name = $_POST["categoryname"];
      try {
        $sql = "INSERT INTO category (categoryname)
        VALUES ('$this->name')";
        $this->conn->exec($sql);
        header("location:index.php");
      } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
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
  public function dataedit()
  {
    if (isset($_POST["edit"])) {
      $this->name = $_POST['edit'];
    }
    try {
      $this->editbt = $this->conn->prepare("SELECT * FROM category WHERE id='$this->name'");
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
        $sql = "UPDATE category SET categoryname='$this->subbt' WHERE id='$this->editbtn'";
        $this->conn->exec($sql);
        header("location:index.php");
      }   
      catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
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
        $sql = "DELETE FROM category WHERE id='$this->deletebtn'";
        $this->conn->exec($sql);
        header("location:index.php");
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }    
  }
};
$category = new Category();
$category->insertdata();
$category->datacategory();
$category->dataedit();
$category->submitdata();
$category->delete();
