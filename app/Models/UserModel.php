<?php
require_once '../core/Model.php'; // Include the Model class

class UserModel extends Model {
    public function registerUser($username, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        return $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>