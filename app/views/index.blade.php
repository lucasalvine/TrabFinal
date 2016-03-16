@extends('layout')
@section('content')

	


<table class="table table-striped">

	<div class="page-header">
		<h3>Tenda Fáceis</h3>
	</div>

	<div class="row">
		  	<div class="col-md-6 juridica">
				<div class="form-group">
					{{HTML::image('images/tenda.jpg') }}
				</div>
		  	</div>
		  	<div class="col-md-6 juridica">
				<div class="form-group">				
					<p><strong>A Tendas Fáceis</strong> Criada em 2006, a empresa surgiu para facilitar sua vida. Com a rapidez de apenas um clique, você aluga sua tenda e faz sua festa. Aproveite! </p>
				</div>
		  	</div>
		  </div>


	

	<div class="page-header">
	<h3>Clique para saber mais sobre nossos produtos...</h3>
</div>

	<tr><th>Produto</th><th>Saiba mais</th></tr>
	@foreach ($produtos as $produto)
	<tr>
		<td>{{ link_to_action('ProdutoController@getProduto', $produto->nome, $parameters = array($produto->id), $attributes = array()) }} </td>
		<td><?php echo substr($produto->descricao, 0, 50 ) . "...";  ?></td>
	</tr>
	@endforeach

</table>


	<div class="page-header">
		<h3>Faça sua busca pelo nome ou id do produto: </h3>
	</div>

	{{  Form::open(array('url' => 'busca', 'method' => 'post')) }}

		  <div class="row">
		  	<div class="col-md-6 juridica">
				<div class="form-group">
					<input placeholder="Procurar"  type="text" class="form-control" id="txtBusca" name="busca" required>
				</div>
		  	</div>
		  	<div class="col-md-6 juridica">
				<div class="form-group">				
					<button type="submit" class="btn btn-primary" id="btnCadastrar">Procurar</button>
				</div>
		  	</div>
		  </div>

	{{ Form::close() }}




<h6>
<strong>{{ link_to_action('GeneralController@cadastro', 'Cadastre-se', $parameters = array(), $attributes = array()) }}</strong>
 ou faça 
<strong>{{ link_to_action('GeneralController@login', 'login', $parameters = array(), $attributes = array()) }}</strong>
 para ter acesso sobre mais detalhes</h6>

<div class="page-header">
	<h3>Onde estamos...</h3>
</div>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.0981247703403!2d-43.17069888494652!3d-19.835800640509625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa507513d245fe3%3A0x86586b79387537f9!2sUFOP+-+ICEA!5e0!3m2!1spt-BR!2sbr!4v1458010077393" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></center>


@stop
