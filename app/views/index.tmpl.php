<?php require("components/header.php"); ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <?php require("components/sidebar.php"); ?>
        </div>


        <div class="col-10">
            <h3><?= $header ?? "" ?></h3>
            <?php foreach ($posts as $post): ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <a href="<?= $post['slug'] ?>">
                                    <h5 class="card-title"> <?= $post['title'] ?>
                                    </h5>
                                </a>
                                <p class="card-text"> <?= $post['desc'] ?></p>
                                <p class="card-text"><small class="text-body">Last updated 3 ago</small></p>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php require("components/footer.php"); ?>