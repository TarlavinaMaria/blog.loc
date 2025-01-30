<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы и удаляем лишние пробелы
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Валидация ввода
    if (empty($email) || empty($password)) {
        die("Пожалуйста, заполните все поля.");
    }

    // Проверка существования пользователя
    $result = $db->query("SELECT * FROM users WHERE email = ?", [$email]);

    if ($result === false) {
        die("Ошибка выполнения запроса.");
    }

    $user = $result->find();

    if (!$user) {
        die("Пользователь не найден.");
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