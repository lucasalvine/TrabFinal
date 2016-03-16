@extends('layout')
@section('content')


	<div class="page-header">
		<h3>Meus Pedidos</h3>
	</div>

	<table class="table table-striped">

		<tr><th>Status</th><th>Produto</th><th>Tamanho Espaço</th><th>Tipo Evento</th><th>Descriçao Evento</th><th>Endereço Evento</th><th>Dias  Locação</th><th>Formas Pagamento</th></tr>
		@foreach ($itens as $item)
		<tr>
			<td>{{ $item->status_pedido }}</td>
			<td>{{ $item->modelo_tenda }}</td>
			<td>{{ $item->tamanho_espaco }}</td>
			<td>{{ $item->tipo_evento }}</td>
			<td>{{ $item->desc_evento }}</td>
			<td>{{ $item->endereco_evento }}</td>
			<td>{{ $item->dias_locacao }}</td>
			<td>{{ $item->forma_pagamento }}</td>
		</tr>
		@endforeach

	</table>
	<p><center>{{ link_to_action('GeneralController@index', 'Voltar', $parameters = array(), $attributes = array('class'=>'btn btn-info')) }}</center></p>


@stop
