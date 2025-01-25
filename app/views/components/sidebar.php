<div class="col-2">
    <h3>Темы: </h3>
    <div class="list-group list-group-flush">
        <?php foreach ($most_popular_posts as $ling): ?>
            <a href="post?id=<?= $ling['post_id'] ?>" class="list-group-item list-group-item-action">
                <?= $ling['title'] ?>
            </a>
        <?php endforeach; ?>
    </div>