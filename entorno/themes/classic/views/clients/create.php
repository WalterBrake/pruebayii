<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Todos los clientes', 'url'=>array('index')),
	array('label'=>'administrar clientes', 'url'=>array('admin')),
);
?>

<h1>Create Clients</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>