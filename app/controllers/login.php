<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Валидация ввода
    if (empty($email) || empty($password)) {
        die("Пожалуйста, заполните все поля.");
    }

    // Проверка существования пользователя
    $result = $db->query("SELECT * FROM users WHERE email = ?", [$email]);

    if ($result === false) {
        abort(500);
    }

    $user = $result->find();

    if (!$user) {
        echo ("Пользователь не найден.");
        header("Location: regictration");
    }

    // Проверка пароля
    if (!password_verify($password, $user['password'])) {
        die("Неверный пароль.");
    }

    // Успешный вход (например, установка сессии)
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];

    echo "Вы успешно вошли!";

    // Перенаправление на главную страницу или другую страницу
    header("Location: login");
    exit();
}
require_once(VIEWS . '/login.tmpl.php');
?>