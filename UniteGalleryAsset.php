<?php
/**
 * UniteGallery assets
 *
 * @package yii2-unite-gallery
 * @author  Zoltan Szanto <mrbig00@gmail.com>
 * @since   2017/03/22
 */

namespace mrbig00\unitegallery;

use yii\web\AssetBundle;
use yii\web\View;

class UniteGalleryAsset extends AssetBundle
{
    public static $theme;

    public $js = [
        'js/unitegallery.js',
    ];
    public $jsOptions = [
        'position' => View::POS_END,
    ];
    public $css = [
        'css/unite-gallery.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = '@bower/unitegallery/dist/';
        parent::init();
        if (self::$theme == 'default') {
            $this->css[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.css';
        }

        switch (self::$theme) {
            case 'carousel':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                break;
            case 'compact':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                break;
            case 'default':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                $this->css[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.css';
                break;
            case 'grid':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                break;
            case 'slider':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                break;
            case 'tiles':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                break;
            case 'tilesgrid':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                break;
            case 'video':
                $this->js[] = 'themes/' . self::$theme . '/ug-theme-' . self::$theme . '.js';
                break;
        }
    }
}