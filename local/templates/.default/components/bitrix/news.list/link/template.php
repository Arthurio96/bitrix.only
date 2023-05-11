<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<div id="barba-wrapper">
    <div class="article-list">
        <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
            <a class="article-item article-list__item" href="<?= $arItem['DISPLAY_PROPERTIES']['PROS_HREF']['VALUE'] ?>" data-anim="anim-3">
                <div class="article-item__background"><img src="<?= $arItem['DISPLAY_PROPERTIES']['PROS_IMG']['VALUE'] ?>" data-src="<?= $arItem['DISPLAY_PROPERTIES']['PROS_IMG_DATA']['VALUE'] ?>" alt="" /></div>
                <div class="article-item__wrapper">
                    <div class="article-item__title"><?= $arItem['DISPLAY_PROPERTIES']['PROS_TITLE']['VALUE'] ?></div>
                    <div class="article-item__content"><?= $arItem['DISPLAY_PROPERTIES']['PROS_DESC']['VALUE'] ?></div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>