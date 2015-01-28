<?php
/* @var $this TiporutaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tiporutas',
);

$this->menu=array(
	array('label'=>'Create Tiporuta', 'url'=>array('create')),
	array('label'=>'Manage Tiporuta', 'url'=>array('admin')),
);
?>

<h1>Tiporutas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
