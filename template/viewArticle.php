<?php include "template/header.php" ?>

    <p class="pubDate">Data publikacji <?php echo date('j F Y', $results['article']->publishDate) ?></p>
    <h1 class="pb-4"><?php echo htmlspecialchars($results['article']->title) ?></h1>
    <div><?php echo $results['article']->intro ?></div>
    <div><?php echo $results['article']->content ?></div>
    <p><a href="./">Powrót</a></p>

<?php include "template/footer.php" ?>