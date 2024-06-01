<?php
$host = 'db';
$user = 'root';
$password = 'helloworld';
$database = 'web';
$port = 3306;

//подключение к базе данных
$mysqli = new mysqli($host, $user, $password, $database, $port);
if ($mysqli->connect_error) {
    die("Ошибка при подключении: " . $mysqli->connect_error);
}

//получение данных
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

//SQL-запрос на сохранение данных
$sql = "INSERT INTO web.ad (email, category, title, description) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $email, $category, $title, $description);

//выполнение SQL-запроса
if ($stmt->execute()) {
    echo "Данные сохранены";
} else {
    echo "Ошибка при сохранении данных: " . $stmt->error;
}

//закрытие соединения с базой данных
$stmt->close();
$mysqli->close();

header("Location: index.php");
exit();
