@extends('layout')
@section('content')

<div class="page-header">
    <h3>{{ $produto->nome }}</h3>
  </div>


		<p><center>{{HTML::image('images/' . $produto->foto) }} </center></p>


	<p>
		{{ $produto->descricao }}
	</p>


	<p><center>{{ link_to_action('ProdutoController@getCompra', 'Alugar', $parameters = array(), $attributes = array('class'=>'btn btn-info')) }}</center></p>

@endsection