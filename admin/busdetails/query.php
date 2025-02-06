<?php
require("../lib/db.php");

class Detailsbus extends DBconn
{
  public $stmt;
  public $sql;
  public $name;
  public $type;
  public $placeto;
  public $placefrom;
  public $date;
  public $deletebtn;
  public $editbt;
  public $ebusname;
  public $editbtn;
  public $edate;
  public $efrom;
  public $eto;
  public $etype;
  public $file;

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
  public function submitdata()
  {
    if (isset($_POST["submitbtns"])) {
      $this->name = $_POST['buss'];
      $this->type = $_POST['bustype'];
      $this->placefrom = $_POST['placefrom'];
      $this->placeto = $_POST['placeto'];
      $this->file = $_FILES['imguplod'];
      $this->date = $_POST['dateinput'];

      $upl = "../../uploads/";
      $pathname = $upl . basename($this->file['name']);
      $allowedExts = array("jpeg", "jpg", "png");
      $extension = strtolower(pathinfo($pathname, PATHINFO_EXTENSION));
      
      if ($this->file["size"] < 90000000 && in_array($extension, $allowedExts)) {
        if (move_uploaded_file($this->file['tmp_name'], $pathname)) {
          try {
            $sql = "INSERT INTO detailsbus (bus, types, froms, tos, images, dates)
          VALUES('$this->name', '$this->type', '$this->placefrom', '$this->placeto', '$pathname', '$this->date')";
            $this->conn->exec($sql);
            header("location:index.php");
          } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          };
        } 
      } else {
        echo 'Error: Invalid file size or file extension.';
      }
    }
  }
  public function bustable()
  {
    try {
      $stmt = $this->conn->prepare("SELECT * FROM detailsbus");
      $stmt->execute();
      return $stmt->fetchAll();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
  public function delete()
  {
    if (isset($_POST["delete"])) {
      $this->deletebtn = $_POST['delete'];
      try {
        $sql = "DELETE FROM detailsbus WHERE id='$this->deletebtn'";
        $this->conn->exec($sql);
        header("location:index.php");
      } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }
  }
  public function dataedit()
  {
    if (isset($_POST["edeit"])) {
      $this->name = $_POST['edeit'];


      try {
        $this->editbt = $this->conn->prepare("SELECT * FROM detailsbus WHERE id='$this->name'");
        $this->editbt->execute();
        return $this->editbt->fetchAll();
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
  public function updatdata()
  {

    if (isset($_POST['updatebtn'])) {
      $this->editbtn = $_POST["updatebtn"];
      $this->ebusname = $_POST["buss"];
      $this->etype = $_POST["bustype"];
      $this->efrom = $_POST["placefrom"];
      $this->eto = $_POST["placeto"];
      $this->edate = $_POST["dateinput"];

      try {
        $sql =  "UPDATE detailsbus SET bus='$this->ebusname', types='$this->etype', froms='$this->efrom', tos='$this->eto', dates='$this->edate' WHERE id='$this->editbtn'";
        $this->conn->exec($sql);
        header("location:index.php");
      } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    }
    if (isset($_POST["cancel"])) {
      header("location:index.php");
    }
  }

};

$detailsbus = new Detailsbus();
$detailsbus->dataplace();
$detailsbus->datacategory();
$detailsbus->submitdata();
$detailsbus->bustable();
$detailsbus->delete();
$detailsbus->dataedit();
$detailsbus->updatdata();

