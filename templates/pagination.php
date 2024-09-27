<?php
// Проверяем, что все необходимые переменные переданы
if (!isset($product_on_page, $pages_total, $filrs_item, $link_color, $product_count, $posts)) {
    exit('Необходимые данные для шаблона отсутствуют.');
}
?>
<div class="row mt-3">
    <?php require_once('templates/sideBar.php'); ?>
    <?php foreach ($product_on_page as $i => $key) : ?>
        <div class="col-md-3" style="width: 16rem; margin-right:1rem;">
            <a class="<?= $link_color ?>" href="single.php?page=<?= $i + 1 ?>"><?= $i + 1 . " " . $key['name'] ?></a>
            <div class="card" style="width: 16rem;">
                <img class="img-fluid" src="<?= htmlspecialchars($key['photo'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?= "Цвет: " . $key['color'] ?></p>
                </div>
                <style>
                    .img-fluid {
                        max-width: 100%;
                        height: 350px !important;
                    }
                </style>
            </div>
        </div>
    <?php endforeach; ?>
    <div aria-label="Page navigation example" class="mt-4">
        <ul class="pagination justify-content-center">
            <?php for ($i = $filrs_item; $i <= $pages_total; $i++) : ?>
                <li class="page-item">
                    <a class="page-link link-success" href="index.php?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>