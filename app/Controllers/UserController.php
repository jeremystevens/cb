<?php
require_once '../core/Controller.php';
require_once '../app/Models/UserModel.php';

class UserController extends Controller {

    public function register() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $userModel = new UserModel();
        $result = $userModel->registerUser($username, $email, $password);

        if ($result) {
            // Store a success message in the session
            session_start();
            $_SESSION['success_message'] = 'Registration successful! Please log in.';
            // Redirect back to the login page
            header('Location: /cb/public/');
            exit;
        } else {
            echo "Error: Could not register.";
        }
    }

    public function showLoginPage() {
        // Start session to check for messages
        session_start();
        $successMessage = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : null;
        unset($_SESSION['success_message']); // Clear the message after displaying
        $this->render('login_register', ['success_message' => $successMessage]);
    }
    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            echo "Login successful!";
            // Start session, redirect to dashboard, etc.
        } else {
            echo "Invalid username or password.";
        }
    }
}
