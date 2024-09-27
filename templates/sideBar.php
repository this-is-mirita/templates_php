<div class="col-2" style="border-right: 1px solid black;">
    <h3>Список котиков</h3>
    <p>Всего их: <?= htmlspecialchars($product_count, ENT_QUOTES, 'UTF-8') ?></p>
    <!-- скролл бар -->
    <div class="scrollable" style="scrollbar-gutter: stable;">
        <ol>
            <?php if (!empty($posts)) : ?>
                <?php foreach ($posts as $i => $post) : ?>
                    <li>
                        <a class="<?=$link_color?>" href="single.php?page=<?= $i + 1 ?>"><?= htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?></a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Нет доступных котиков.</li>
            <?php endif; ?>
        </ol>
    </div>
</div>
<style>
    .scrollable {
        max-height: 300px;
        /* Задайте необходимую высоту для области прокрутки */
        overflow-y: auto;
        /* Включаем вертикальную прокрутку */
        scrollbar-width: thin;
        /* Для Firefox */
        scrollbar-color: #888 #f1f1f1;
        /* Цвет ползунка и фона */
    }

    /* Для Webkit (Chrome, Safari) */
    .scrollable::-webkit-scrollbar {
        width: 8px;
        /* Ширина скроллбара */
    }

    .scrollable::-webkit-scrollbar-track {
        background: #f1f1f1;
        /* Цвет фона скроллбара */
    }

    .scrollable::-webkit-scrollbar-thumb {
        background: #888;
        /* Цвет ползунка скроллбара */
        border-radius: 4px;
        /* Радиус скругления ползунка */
    }

    .scrollable::-webkit-scrollbar-thumb:hover {
        background: #555;
        /* Цвет ползунка при наведении */
    }

    .hover_item:hover {
        background-color: wheat;
    }
</style>