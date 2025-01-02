<?php 
class UserModel {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function save(User $user) {
        $stmt = $this->db->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user->getEmail(), $user->getPassword());
        return $stmt->execute();
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            $user = new User($row['email'], $row['password']);
            $user->setId($row['id']);
            return $user;
        }

        return null;
    }
}
?>