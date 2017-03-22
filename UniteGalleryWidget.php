<?php
/**
 * Unite gallery Yii2 Wrapper
 *
 * @package yii2-unite-gallery
 * @author  Zoltan Szanto <mrbig00@gmail.com>
 * @since   2017/03/22
 */

namespace mrbig00\unitegallery;

use yii\base\Widget;

class UniteGalleryWidget extends Widget
{
    /**
     * Items displayed in the gallery
     *
     * $items = [
     *      ['src'=>'...', 'alt' => '', 'description' => '..']
     * ]
     *
     * @var array
     */
    public $items;

    /**
     * The UniteGallery theme
     *
     * @var string
     */
    public $theme = 'grid';

    /**
     * Gallery id
     *
     * @var string
     */
    public $galleryId = 'unite-gallery';

    /**
     * Client options
     *
     * @var array
     */
    public $options = [];

    public function run()
    {
        if (is_array($this->items) && count($this->items) > 0) {
            return $this->render(
                'gallery',
                [
                    'galleryId' => $this->galleryId,
                    'theme'     => $this->theme,
                    'items'     => $this->items,
                    'options'   => array_merge(
                        [
                            'tiles_col_width'            => 120,
                            'tiles_enable_transition'    => false,
                            'gallery_theme'              => $this->theme,
                            'tiles_justified_row_height' => 120,
                            'theme_preloading_height'    => 120,
                            'gallery_min_width'          => 120,
                        ],
                        $this->options
                    ),
                ]
            );
        } else {
            return '';
        }
    }
}