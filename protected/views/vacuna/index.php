<?php
/* @var $this VacunaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vacunas',
);

$this->menu=array(
	array('label'=>'Crear Vacuna', 'url'=>array('create')),
	array('label'=>'Administrar Vacuna', 'url'=>array('admin')),
);
?>

<h1>Vacunas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
