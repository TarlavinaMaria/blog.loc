<?php require(COMPONENTS . "/header.php"); ?>


<main class="main py-3">
    <div class="container">
        <div class="row">
            <?php require(COMPONENTS . "/sidebar.php"); ?>
        </div>
        <div class="col-10">
            <h3><?= $header ?? "" ?></h3>
            <form action="" method="post">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="title">Post title:</label>
                        <input name="title" class="form-control" id="title" placeholder="Enter post title"
                            value="<?= old('title') ?>">
                        <?= isset($validator) ? $validator->listErrors('title') : "" ?>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>
                        <textarea name="excerpt" type="excerpt" class="form-control" id="excerpt"
                            placeholder="Enter excerpt" rows="3" value="<?= old('excerpt') ?>"></textarea>
                        <?= isset($validator) ? $validator->listErrors('excerpt') : "" ?>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" type="content" class="form-control" id="content"
                            placeholder="Enter content" rows="10" value="<?= old('content') ?>"></textarea>
                        <?= isset($validator) ? $validator->listErrors('content') : "" ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create post</button>
            </form>
        </div>
    </div>
</main>
<?php require(COMPONENTS . "/footer.php"); ?>