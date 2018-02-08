<div class="title">
    Категория
</div>

<div class="category">
    <ul>
        <li class="active">
            <a href="/podcasts">
                <i class="far fa-circle"></i>
                Полностью
            </a>
        </li>
    <?php foreach($terms as $term): ?>
        <li>
            <a href="/<?php print $term->tid;?>">
                <i class="far fa-circle"></i>
                <?php print $term->name;?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>