# yii2-vue-widget
基于VUE.JS应用于YII2的多个小组件

## Install

Via Composer

``` bash
$ composer require colee/yii2-vue-widgets
```

### drag-and-drop
> 拖放组件  
Usage  
``` php
DragAsset::register($this);
```
``` html
<li v-for="task in tasks" id="{{ $index }}" v-drag-and-drop drop="handleDrop">{{ task.title }}</li>
```
``` js
new Vue({
	el: '#test',
	data: {
		tasks: []
	},
	methods: function(draggedElement, dropppedOnElement){
		var placeholder = this.tasks[draggedElement.id];
		// 插入方式
		this.tasks.splice(draggedElement.id, 1);
		this.tasks.splice(dropppedOnElement.id, 0, placeholder);
		// 或交换位置方式
		this.tasks.$set(draggedElement.id, this.tasks[dropppedOnElement.id]);
		this.tasks.$set(dropppedOnElement.id, placeholder);
	}
});
```
