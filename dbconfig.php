<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
/**
 * Change these details according to your server
 */
$server = "localhost";
$username = "ydret2xc8uzx";
$password = "Sachin@101";
$database = "internal_dashboard";
$protocol = "https://";

$port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    //Username, Password and Database
    $con = new mysqli($server, $username, $password, $database, $port);
    $con->set_charset("utf8mb4");
} catch (Exception $e) {
//    error_log($e->getMessage());
    ?>
    <script>
        window.location.href = "/404.html";
    </script>
    <?php
    //Should be a message a typical user could understand
}
