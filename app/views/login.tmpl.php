<?php require(COMPONENTS . "/header.php"); ?>

<?php
session_start(); // Начинаем сессию

// Проверяем, вошел ли пользователь
$isLoggedIn = isset($_SESSION['user_id']);
?>

<main class="main py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <h3><?= $header ?? "" ?></h3>
                <div class="container mt-5">
                    <?php if ($isLoggedIn): ?>
                        <h2 class="text-center">Вы вошли как <?php echo htmlspecialchars($_SESSION['user_name']); ?></h2>
                        <form action="logout" method="POST" class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-danger">Выйти</button>
                        </form>
                    <?php else: ?>
                        <form action="login" method="POST">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label for="login-email" class="form-label">Ваш Email</label>
                                <input type="email" name="email" id="login-email" class="form-control form-control-lg"
                                    required>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label for="login-password" class="form-label">Пароль</label>
                                <input type="password" name="password" id="login-password"
                                    class="form-control form-control-lg" required>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit"
                                    class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Войти</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</main>

<?php require(COMPONENTS . "/footer.php"); ?>