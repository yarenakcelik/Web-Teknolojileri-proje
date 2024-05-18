error_reporting(E_ALL);
ini_set('display_errors', 1);


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Öğrenci numarası
    $student_number = "b1812100001";
    $correct_username = $student_number . "@sakarya.edu.tr";
    $correct_password = $student_number;

    if (empty($username) || empty($password)) {
        header("Location: login.html");
        exit(); // Burada exit fonksiyonunu ekledik
    }

    if ($username === $correct_username && $password === $correct_password) {
        // Giriş başarılı ise index sayfasına yönlendir
        header("Location: index.html");
        exit(); // Burada exit fonksiyonunu ekledik
    } else {
        header("Location: login.html");
        exit(); // Burada exit fonksiyonunu ekledik
    }
} else {
    header("Location: login.html");
    exit(); // Burada exit fonksiyonunu ekledik
}
?>
