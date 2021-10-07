<?php
$pager->setSurroundCount(1);
?>
<nav aria-label="<?= lang('Pager.pageNavigation') ?>" style="position:absolute;right:16rem;font-size:1.2rem;box-shadow:2px 2px 2px black;border-radius:5px;">
    <ul class="pagination">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item">
                <a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="<?= lang('Pager.previous') ?>">
                    <span><strong>« Previous</strong></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
                <a href="<?= $link['uri'] ?>" class="page-link">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item">
                <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link">
                    <span aria-hidden="true"><strong>Next »</strong></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>
