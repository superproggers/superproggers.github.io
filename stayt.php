<?php 
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');

$servername = "localhost"; // Доступ к хосту, обычно - localhost
$database = ""; // Имя базы данных
$username = ""; // Логин от базы данных
$password = ""; // Пароль от базы данных

$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
mysqli_set_charset($mysqli, "utf8");
?>

<?php if (Auth\User::isAuthorized()): ?>
<?php 
    $select = "SELECT * FROM `users` WHERE id = '".$_SESSION['user_id']."'";
    $q_s = $mysqli->query($select);
    $arr = $q_s->fetch_array();
?>
<?php else: ?>
<?php endif;?>