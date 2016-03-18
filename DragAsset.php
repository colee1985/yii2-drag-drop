<?php
/**
 * @link 
 * @copyright Copyright (c) 2008 CoLee Software LLC
 * @license MIT
 */

namespace colee\vue;

use yii\web\AssetBundle;

/**
 * @author CoLee
 */
class DragAsset extends AssetBundle
{
    public $css = [
        
    ];
    public $js = [
        
    ];
    public $depends = [
        
    ];
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/vue-drag-and-drop/';
        $this->js[] = 'vue.drag-and-drop.js';
    }
}