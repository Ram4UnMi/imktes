<?php
// Menghubungkan ke database menggunakan PDO
try {
    $pdo = new PDO("mysql:host=aws.connect.psdb.cloud;dbname=mahasiswa", "qha48odwqfwrnatdroy0", "pscale_pw_mlqv9TNQyIQK1IESIph9ISDPyr7WSPehz5pdEhy0uzC");
    // Set mode error PDO menjadi exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Jika tombol login as admin atau login as owner ditekan
if(isset($_POST['admin_login']) || isset($_POST['owner_login'])) {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Buat query berdasarkan tipe login
    $loginType = isset($_POST['admin_login']) ? 'admin' : 'owner';
    $query = "SELECT * FROM users WHERE username = :username AND password = :password AND role = :role";

    // Persiapkan statement
    $statement = $pdo->prepare($query);

    // Bind parameter
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $password);
    $statement->bindParam(':role', $loginType);

    // Eksekusi statement
    $statement->execute();

    // Ambil hasil
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Jika user ditemukan
    if($user) {
        echo "Login berhasil sebagai $loginType";
        // Lakukan tindakan setelah login sukses, seperti redirect ke halaman beranda
    } else {
        echo "Username atau password salah";
    }
}
?>
