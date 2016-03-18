<?php
/**
 * ==============================================
 * Copy right 2015-2016
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @param unknowtype
 * @return return_type
 * @author: CoLee
 */
namespace colee\vue;

use yii\base\Widget;
class DragTagsWidget extends Widget
{
    public $tags;
    /**
     * 当改变时事件处理
     */
    public $change;
    /**
     * 当排序改变时提交保存的URL
     */
    public $url;
    public function init(){
        if (is_string($this->tags)){
            $this->tags = explode(',', $this->tags);
        }
    }
    public function run()
    {
        
        return $this->render('drag-drop',[
            'tags'=>$this->tags,
            'url'=>$this->url,
            'change'=>$this->change,
        ]);
    }
}