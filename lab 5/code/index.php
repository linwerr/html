<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="hm.php" method="post">
    <label>
        <br> Введите Ваш email:
        <input name="email" required type="email"">
    </label>
    <label>
        <br> Выберете категорию:
        <select name="category" required>
            <option value="clothes">Одежда</option>
            <option value="games">Игры</option>
            <option value="cars">Машины</option>
        </select>
    </label>
    <label>
        <br> Заголовок:
        <input name="title" required type="title">
    </label>
    <label>
        <br>Описание:
        <textarea name="description"></textarea>
    </label>
    <label>
        <br> <input type="submit">
    </label>
</form>

<?php
$host = 'db';
$user = 'root';
$password = 'helloworld';
$database = 'web';
$port = 3306;

//подключение к базе данных
$base = new mysqli($host, $user, $password, $database, $port);

//проверка подключения
if ($base->connect_error) {
    die("Ошибка подключения: " . $base->connect_error);
}

//выполнение запроса на выборку данных
$result = $base->query("SELECT * FROM web.ad");

//вывод данных
while ($row = $result->fetch_assoc()) {
    $email = $row['email'];
    $category = $row['category'];
    $title = $row['title'];
    $description = $row['description'];

    echo "<p> $email -> $title -> $description -> $category </p>";;
}

$base->close();
?>
</body>
</html>
