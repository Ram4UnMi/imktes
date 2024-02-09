<?php
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli->real_connect("aws.connect.psdb.cloud", "qha48odwqfwrnatdroy0", "pscale_pw_mlqv9TNQyIQK1IESIph9ISDPyr7WSPehz5pdEhy0uzC", "mahasiswa");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

if(isset($_POST['admin_register']) || isset($_POST['owner_register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = isset($_POST['admin_register']) ? 'admin' : 'owner';

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    if($mysqli->query($query)) {
        echo "<script>alert('Registration successful');</script>";
        // Redirect to appropriate page after registration
        if($role == 'admin') {
            header("Location: ../admin/berandaA.php");
            exit;
        } else {
            header("Location: ../owner/berandaO.php");
            exit;
        }
    } else {
        echo "<script>alert('Registration failed');</script>";
    }
}

$mysqli->close();
?>