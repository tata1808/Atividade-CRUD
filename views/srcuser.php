// src/User.php
class User {
  private $database;

  public function __construct(Database $database) {
    $this->database = $database;
  }

  public function register($username, $password) {
    $conn = $this->database->connect();
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  }

  public function login($username, $password) {
    $conn = $this->database->connect();
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    if ($result->num_rows > 0) {
      return true;
    } else {
      return false;
    }
  }
}
