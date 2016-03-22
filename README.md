# yii2-vue-widget
基于VUE.JS应用于YII2的多个小组件

## Install

Via Composer

``` bash
$ composer require colee/yii2-vue-widgets
```

### drag-and-drop
> 拖放组件  
简单用法:
``` js
DragTagsWidget::widget([
    'tags'=>$model->tags, //可以是数组或逗号分隔的字符串
    'url'=>Url::to(['save-tags', 'id'=>$model->id]), //排序修改后将新的数组AJAX提交到目标接口中
    'change'=>'console.log(itemOne, itemTwo)', // 改变时的事件
]);
```
自定义使用  
``` php
DragAsset::register($this);
```
``` html
<ul id="test">
	<li v-for="task in tasks" id="{{ $index }}" v-drag-and-drop drop="handleDrop">{{ task.title }}</li>
</ul>
```
``` js
new Vue({
	el: '#test',
	data: {
		tasks: []
	},
	methods: {
		handleDrop: function(draggedElement, dropppedOnElement){
			var placeholder = this.tasks[draggedElement.id];
			// 插入方式
			this.tasks.splice(draggedElement.id, 1);
			this.tasks.splice(dropppedOnElement.id, 0, placeholder);
			// 或交换位置方式
			this.tasks.$set(draggedElement.id, this.tasks[dropppedOnElement.id]);
			this.tasks.$set(dropppedOnElement.id, placeholder);
		}
	}
});
```
