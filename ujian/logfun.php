<?php
include ("konek.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = " SELECT * FROM userlogin WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($conn, $query);

    if ($verify && mysqli_num_rows($verify) > 0) {
        header("Location: barang.php");
    } else {
        echo "<script>
        alert('Username/Password Invalid');
        window.location.href = 'login.php';
        </script>";
    }
}

?>