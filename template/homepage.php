<?php include "template/header.php" ?>

    <div class="blog-main">

        <?php foreach ($results['articles'] as $article) { ?>

            <div class="blog-post">
                <span class="pubDate"><?php echo date('j F', $article->publishDate) ?></span>
                <h2 class="blog-post-title">
                    <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
                </h2>
                <p class="summary"><?php echo mb_strimwidth($article->intro,0, 300, '...'); ?></p>
                <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>">Czytaj więcej -></a>
            </div>
            <hr>

        <?php } ?>

    </div>
<?php include "template/footer.php" ?>