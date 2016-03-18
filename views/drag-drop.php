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
use colee\vue\DragAsset;

DragAsset::register($this);

$tags = json_encode($tags);
$id = 'drag'.microtime().rand(10, 99);
$change .= ';';
if (!empty($url)){
    $change .= "
    $.ajax({
       url: '$url',
       method: 'get',
       data: {tags: this.tags}
   });";
}
$js = "
new Vue({
    el: '#$id',
    data:{
    	tags: $tags
    },
    methods: {
    	handleDrop: function(draggedElement, dropppedOnElement){
	        var placeholder = this.tags[draggedElement.id];
	        this.tags.splice(draggedElement.id, 1);
	        this.tags.splice(dropppedOnElement.id, 0, placeholder);
	    },
	    handleDragEnd: function(itemOne, itemTwo){
	       $change
	    }
    }
});
";
$this->registerJs($js); 
?>
<div id="<?=$id?>">
    <span style="padding:5px 10px; margin:2px" class="badge bg-light-blue" 
    v-for="tag in tags" id="{{ $index }}" 
    v-drag-and-drop drop="handleDrop"
    drag-end="handleDragEnd"
    v-text="tag"></span>
</div>