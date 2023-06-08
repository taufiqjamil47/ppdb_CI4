<?php $pager->setSurroundCount(0); ?>
<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <div class="container">
        <ul class="pagination">
            <?php if ($pager->hasPrevious()) : ?>
                <li class="page-item">
                    <a href="<?= $pager->getFirst() ?>" aria-label="First" class="page-link">
                        <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                    </a>
                </li>
                <li class="page-item">
                    <a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="Previous">
                        <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                    </a>
                </li>
            <?php endif ?>

            <?php
            foreach ($pager->links() as $link) :
                $activeclass = $link['active'] ? 'active' : '';
            ?>
                <li class="page-item <?= $activeclass ?>">
                    <a href="<?= $link['uri'] ?>" class="page-link">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>

            <?php if ($pager->hasNext()) : ?>
                <li class="page-item">
                    <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="page-link">
                        <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                    </a>
                </li>
                <li class="page-item">
                    <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="page-link">
                        <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>