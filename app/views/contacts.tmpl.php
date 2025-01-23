<?php require(COMPONENTS . "/header.php"); ?>
<main class="main py-3">
    <div class="container">
        <div class="row">


            <div class="col-12">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $header ?? "" ?></h5>
                                <p class="card-text"> <?= $contacts ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require(COMPONENTS . "/footer.php"); ?>