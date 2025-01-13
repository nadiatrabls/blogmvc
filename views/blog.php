<div class="row">
    <?php foreach ($articles as $article) : ?>
        <div class="col-lg-6" style="border: 1px solid green">
            <div class="blog-post">
                <div class="blog-thumb">
                    <img src="assets/images/blog-thumb-01.jpg" alt="">
                </div>
                <div class="down-content">
                    <span><?= htmlspecialchars($article['cat']); ?></span>
                    <a href="post-details.html">
                        <h4><?= htmlspecialchars($article['titre']); ?></h4>
                    </a>
                    <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#"><?= htmlspecialchars($article['date']); ?></a></li>
                        <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p><?= htmlspecialchars($article['contenu']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
