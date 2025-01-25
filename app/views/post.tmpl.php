<?php require(COMPONENTS . "/header.php"); ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <?php require(COMPONENTS . "/sidebar.php"); ?>
        </div>
        <div class="col-10">
            <h3><?= $header ?? "" ?></h3>
            <p>Some post .....</p>
        </div>
    </div>
</main>
<?php require(COMPONENTS . "/footer.php"); ?>