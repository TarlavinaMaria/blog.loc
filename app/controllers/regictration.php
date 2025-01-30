<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($password)) {
        die("Пожалуйста, заполните все поля.");
    }

    // Проверка существования пользователя
    $result = $db->query("SELECT id FROM users WHERE email = ?", [$email]);
    if ($result === false) {
        die("Ошибка выполнения запроса.");
    }

    if ($result->find()) {
        die("Email уже зарегистрирован.");
    }

    // Хеширование пароля
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Вставка пользователя в базу данных
    if ($db->query("INSERT INTO users (name, email, password) VALUES (?, ?, ?)", [$name, $email, $hashedPassword])) {
        header("Location: login");
        exit();
    } else {
        die("Ошибка при регистрации.");
    }
}

require_once(VIEWS . '/regictration.tmpl.php');
?>