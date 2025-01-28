<?php
require("lib/db.php");

class Login extends DBconn
{

  public $sql;
  public $stmt;
  public $email;
  public $password;
  public function __construct()
  {
    $this->dbConnect();
  }
  public function adminlogin()
  {
    if (isset($_POST['loginbutton'])) {
      $this->email = $_POST["email"];
      $this->password = $_POST["password"];

      try {
        $this->stmt = $this->conn->prepare("SELECT * FROM adminlogin WHERE email='$this->email' AND password='$this->password'");
        $this->stmt->execute();
        $this->stmt = $this->conn->prepare("SELECT FOUND_ROWS()");
        $this->stmt->execute();
        if ($this->stmt->fetchColumn()) {
          $_SESSION['login']="login successed";
          header("location:dashbord/index.php");
        } else {
          echo "error";
        }
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    }
  }
};
$login = new Login();
$login->adminlogin();
