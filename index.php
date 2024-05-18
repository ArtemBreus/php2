<?php
// Параметри підключення
$host = "monorail.proxy.rlwy.net";
$port = "51824";
$dbname = "your_database_name";
$user = "your_username";
$password = "your_password";

// Створення з'єднання
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Перевірка з'єднання
if (!$conn) {
    die("З'єднання не вдалося: " . pg_last_error());
} else {
    echo "З'єднання встановлено успішно";
}

// Використовуйте підключення до бази даних для ваших запитів

// Закриття з'єднання
pg_close($conn);
?>
