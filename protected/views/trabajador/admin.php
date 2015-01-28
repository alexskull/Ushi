<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Trabajador', 'url'=>array('index')),
	array('label'=>'Create Trabajador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#trabajador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Trabajadors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trabajador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idTrabajador',
		'Persona_idPersona',
		'Nacionalidad',
		'Sexo',
		'Mano',
		'Edo_Civil_idEdo_Civil',
		/*
		'Hijos',
		'NivelEducativo_idNivelEducativo',
		'Email',
		'CodigoPostal',
		'IngresoUNET',
		'IngresoIVSS',
		'Ubicacion_idUbicacion',
		'Cargo_idCargo',
		'Dependencia_idDependencia',
		'Sueldo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
