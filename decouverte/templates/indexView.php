    <ul>
        <?php foreach ($articles as $value): ?>
        <li> <?= $value->getUpperTitle() ?></li>
        <?php endforeach; ?>
    </ul>

    <?php include "addArticle.php"; ?>