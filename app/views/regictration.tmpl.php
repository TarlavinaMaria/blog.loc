<?php require(COMPONENTS . "/header.php"); ?>

<main class="main py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <h3><?= $header ?? "" ?></h3>
                <form action="regictration" method="POST">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label">Ваше имя</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg" required />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label">Ваш Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" required />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label">Пароль</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg"
                            required />
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Зарегистрироваться</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>


<?php require(COMPONENTS . "/footer.php"); ?>