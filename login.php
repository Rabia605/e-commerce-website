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

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from the database
    $sql = "SELECT * FROM user_table WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            session_start(); // Start session
            $_SESSION['user_name'] = $user['fullname']; // Store user name in session
            echo "<script>
                alert('Login successful!');
                window.location.href = './index.php'; // Redirect to index
            </script>";
        } else {
            echo "<script>alert('Invalid credentials.');</script>";
        }
        
    } else {
        echo "<script>alert('No account found with that email.');</script>";
    }
    $stmt->close();
}
$conn->close();
?>
