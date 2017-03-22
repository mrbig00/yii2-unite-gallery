<?php
/**
 * @package yii2-unite-gallery
 * @author  Zoltan Szanto <mrbig00@gmail.com>
 * @since   2017/03/22
 *
 * @var $galleryId      string Id of the gallery
 * @var $options        string[]
 */

\mrbig00\unitegallery\UniteGalleryAsset::$theme = $theme;
\mrbig00\unitegallery\UniteGalleryAsset::register($this);
$jsonOptions = \yii\helpers\Json::encode($options);
$script = <<< JS
    $("#$galleryId").unitegallery($jsonOptions);
JS;
$this->registerJs($script, \yii\web\View::POS_READY);
?>

<div id="<?= $galleryId ?>" class="panel">
    <?php foreach ($items as $item): ?>
        <?= \yii\bootstrap\Html::img($item['src'], $item); ?>
    <?php endforeach; ?>
</div>
