<?php
session_start();

// Use absolute path for user.json
$dataJson = __DIR__ . "/../database/user.json";

// Initialize data array
$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];
if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON decode error: " . json_last_error_msg());
}

if (isset($_POST['registerUser'])) {
    $i = 0;
    if (!empty($data)) {
        $lastItem = end($data);
        $i = $lastItem['id'];
    }

    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $passwrd = $_POST['password'] ?? '';
    $photo = $_FILES['photo'] ?? null;

    // Validate inputs
    if (empty($username) || empty($email) || empty($passwrd)) {
        $_SESSION['alert'] = "All fields are required.";
        header("Location: http://localhost:8080/register");
        exit;
    }

    // Validate file upload
    $foto = "";
    if (!empty($photo['name'])) {
        if ($photo['error'] !== UPLOAD_ERR_OK) {
            $_SESSION['alert'] = "File upload error: " . $photo['error'];
            header("Location: http://localhost:8080/register");
            exit;
        }

        $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array(strtolower($ext), $allowedExt)) {
            $_SESSION['alert'] = "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
            header("Location: http://localhost:8080/register");
            exit;
        }

        $uploadDir = __DIR__ . "/../../file-upload/";
        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
            $_SESSION['alert'] = "Failed to create upload directory.";
            header("Location: http://localhost:8080/register");
            exit;
        }

        $foto = ($i + 1) . "." . $ext;
        if (!move_uploaded_file($photo['tmp_name'], $uploadDir . $foto)) {
            $_SESSION['alert'] = "Failed to move uploaded file.";
            header("Location: http://localhost:8080/register");
            exit;
        }
    }

    // Check for duplicate email
    $alert = "";
    $showAlert = false;
    foreach ($data as $item) {
        if ($email === $item['email']) {
            $alert = "Email sudah terdaftar";
            $_SESSION['alertEmail'] = $alert;
            $showAlert = true;
            break;
        }
    }

    if (!$showAlert) {
        $data[] = [
            'id' => $i + 1,
            'photo' => $foto ? "file-upload/" . $foto : "",
            'username' => $username,
            'email' => $email,
            'password' => password_hash($passwrd,PASSWORD_BCRYPT), // Secure password
        ];

        // Write to JSON file
        if (!file_put_contents($dataJson, json_encode($data, JSON_PRETTY_PRINT))) {
            $_SESSION['alert'] = "Failed to write to JSON file.";
            header("Location: http://localhost:8080/register");
            exit;
        }

        $_SESSION['alert'] = "Registration successful!";
        header("Location: http://localhost:8080/login");
        exit;
    } else {
        header("Location: http://localhost:8080/register");
        exit;
    }
}
?>