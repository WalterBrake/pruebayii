<?php
/* @var $this ClientsController */
/* @var $data Clients */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclients')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idclients), array('view', 'id'=>$data->idclients)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paternal_surname')); ?>:</b>
	<?php echo CHtml::encode($data->paternal_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maternal_surname')); ?>:</b>
	<?php echo CHtml::encode($data->maternal_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfc')); ?>:</b>
	<?php echo CHtml::encode($data->rfc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />


</div>