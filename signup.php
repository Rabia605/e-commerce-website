<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ecommerce_1';

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $phone = $_POST['phone'];

    // Validate password match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // Check if email already exists
        $check_email_query = "SELECT * FROM user_table WHERE email = ?";
        $stmt = $conn->prepare($check_email_query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Email already exists! Please try a different one.');</script>";
        } else {
            // Hash the password for secure storage
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert user into the database
            $sql = "INSERT INTO user_table (fullname, email, password, phone) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $fullname, $email, $hashed_password, $phone);

            if ($stmt->execute()) {
                // Success message and redirection
                echo "<script>
                    alert('Account created successfully!');
                    window.location.href = 'pages/login.html';
                </script>";
                exit; // Ensure no further code executes
            } else {
                echo "<script>alert('Error: Could not create account. Please try again.');</script>";
            }
            $stmt->close();
        }
    }
}
$conn->close();
?>
