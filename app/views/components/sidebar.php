<div class="col-2">
    <h3>Topics</h3>
    <div class="list-group list-group-flush">
        <?php foreach ($most_popular_posts as $ling): ?>
            <a href="<?= $ling['slug'] ?>" class="list-group-item list-group-item-action">
                <?= $ling['title'] ?>
            </a>
        <?php endforeach; ?>
    </div>