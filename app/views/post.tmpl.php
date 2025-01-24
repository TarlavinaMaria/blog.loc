<?php require(COMPONENTS . "/header.php"); ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <?php require(COMPONENTS . "components/sidebar.php"); ?>
        </div>
        <div class="col-10">
            <h3><?= $header ?? "" ?></h3>
            <p>Некоторые посты</p>
        </div>
    </div>
</main>
<?php require(COMPONENTS . "/footer.php"); ?>