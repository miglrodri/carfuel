<!-- Quando tem carros! mostra lista de carros e ultimas 3 entradas para cada 1 -->
<h1>Os seus carros:</h1>

<div class="row car-entry">
	<div class="col-sm-12 car-title uppercase">
		<p><i class="fa fa-car"></i> VW Golf 2 GTI 1.8 <a class="edit-car" href="/car/edit/123"> <i class="fa fa-pencil"></i></a> <a class="delete-car" href="/car/delete/123"><i class="fa fa-trash-o"></i></a></p>
	</div>
</div>

<div class="row car-entry">
	<div class="col-sm-12 car-info">
		<p><i class="fa fa-calculator"></i> Consumo médio: 7.6 l/100km</p>
	</div>
</div>

<table class="table table-bordered cars-table">
	<tr>
		<td class="col-md-3">Data de abastecimento</td>
		<td class="col-md-3">Kilometragem (km)</td>
		<td class="col-md-3">Nr de litros (l)</td>
		<td class="col-md-3">Valor pago (€)</td>
	</tr>
	<tr>
		<td class="col-md-3">21-01-2015</td>
		<td class="col-md-3">120321 km</td>
		<td class="col-md-3">14 l</td>
		<td class="col-md-3">20 €</td>
	</tr>
	<tr>
		<td class="col-md-3">23-02-2015</td>
		<td class="col-md-3">120721 km</td>
		<td class="col-md-3">42 l</td>
		<td class="col-md-3">54 €</td>
	</tr>
	<tr>
		<td class="col-md-3">Totais</td>
		<td class="col-md-3">120721 km</td>
		<td class="col-md-3">84 l</td>
		<td class="col-md-3">450 €</td>
	</tr>
</table>

<div class="row">
	<div class="col-sm-3">
		<?php echo anchor('/item/add', '<i class="fa fa-plus"></i> Adicionar abastecimento a este carro', array('class' => 'btn btn-lg button add-item')); ?>
	</div>
</div>

<hr>


<div class="row car-entry">
	<div class="col-sm-12 car-title uppercase">
		<p><i class="fa fa-car"></i> BMW 330 Coupé <a class="edit-car" href="/car/edit/123"> <i class="fa fa-pencil"></i></a> <a class="delete-car" href="/car/delete/123"><i class="fa fa-trash-o"></i></a></p>
	</div>
</div>

<div class="row car-entry">
	<div class="col-sm-12 car-info">
		<p><i class="fa fa-calculator"></i> Consumo médio: 7.6 l/100km</p>
	</div>
</div>

<table class="table table-bordered cars-table">
	<tr>
		<td class="col-md-3">Data de abastecimento</td>
		<td class="col-md-3">Kilometragem (km)</td>
		<td class="col-md-3">Nr de litros (l)</td>
		<td class="col-md-3">Valor pago (€)</td>
	</tr>
	<tr>
		<td class="col-md-3">21-01-2015</td>
		<td class="col-md-3">120321 km</td>
		<td class="col-md-3">14 l</td>
		<td class="col-md-3">20 €</td>
	</tr>
	<tr>
		<td class="col-md-3">23-02-2015</td>
		<td class="col-md-3">120721 km</td>
		<td class="col-md-3">42 l</td>
		<td class="col-md-3">54 €</td>
	</tr>
	<tr>
		<td class="col-md-3">Totais</td>
		<td class="col-md-3">120721 km</td>
		<td class="col-md-3">84 l</td>
		<td class="col-md-3">450 €</td>
	</tr>
</table>

<div class="row">
	<div class="col-sm-3">
		<?php echo anchor('/item/add', '<i class="fa fa-plus"></i> Adicionar abastecimento a este carro', array('class' => 'btn btn-lg button add-item')); ?>
	</div>
</div>

<hr>


<div class="row car-entry">
	<div class="col-sm-12 car-title uppercase">
		<p><i class="fa fa-car"></i> Mercedez-Benz CDI 270 2003 <a class="edit-car" href="/car/edit/123"> <i class="fa fa-pencil"></i></a> <a class="delete-car" href="/car/delete/123"><i class="fa fa-trash-o"></i></a></p>
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		<?php echo anchor('/item/add', '<i class="fa fa-plus"></i> Adicionar abastecimento a este carro', array('class' => 'btn btn-lg button add-item')); ?>
	</div>
</div>

<hr>


<div class="row">
	<div class="col-sm-3">
		<?php echo anchor('/car/add', '<i class="fa fa-plus"></i> Adicionar novo carro', array('class' => 'btn btn-lg button add-car')); ?>
	</div>
</div>


