// src/Database.php
class Database {
  private $host;
  private $database;
  private $username;
  private $password;

  public function __construct($host, $database, $username, $password) {
    $this->host = $host;
    $this->database = $database;
    $this->username = $username;
    $this->password = $password;
  }

  public function connect() {
    $conn = new mysqli($this->host, $this->username, $this->password, $this->database);
    if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
    }
    return $conn;
  }
}