@extends('layout')
@section('content')


	<div class="page-header">
		<h3>Resultados da Busca</h3>
	</div>

	<table class="table table-striped">

		<tr><th>Produto</th><th>Saiba mais</th></tr>
		@foreach ($produtos as $produto)
		<tr>
			<td>{{ link_to_action('ProdutoController@getProduto', $produto->nome, $parameters = array($produto->id), $attributes = array()) }} </td>
			<td><?php echo substr($produto->descricao, 0, 50 ) . "...";  ?></td>
		</tr>
		@endforeach

	</table>



@stop
