<!DOCTYPE html>
<html>
<head>
<title>Tendas do Brasil - @yield('title')</title>
{{ HTML::style('css/menu.css') }}
{{ HTML::style('css/bootstrap.min.css') }}
</head>

<body>

@if (Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger">
{{ Session::get('error') }}
</div>
@endif

	<ul id="menu-bar">
		<li class="active">{{ link_to_action('GeneralController@index', 'Início', $parameters = array(), $attributes = array()) }} </li>
		
		
		<li><a href="#">Produtos</a>
			<ul>
				@foreach ($produtos as $produto)
					<li> {{ link_to_action('ProdutoController@getProduto', $produto->nome, $parameters = array($produto->id), $attributes = array()) }} </a></li>
				@endforeach
			</ul>
		</li>
		
		<li><a href="#">Serviços</a>
		<ul>
			<li>{{ link_to_action('ProdutoController@getPedidos', 'Acompanhar Pedido', $parameters = array(), $attributes = array()) }} </li>
			<li>{{ link_to_action('ProdutoController@getOrcamento', 'Solicitar Orçamento (colocar no carrinho)', $parameters = array(), $attributes = array()) }} </li>
			<li>{{ link_to_action('ProdutoController@getCompra', 'Realizar Compra', $parameters = array(), $attributes = array()) }} </li>
		</ul>
		</li>
		<li><a href="#">Acesso ao Sistema</a>
		<ul>
			
			@if (Auth::check())
				<li>{{ link_to_action('UsuarioController@doLogout', 'Logout' . ' (' . Auth::user()->nomecompleto . ')', $parameters = array(), $attributes = array()) }} </li>
			@else
				<li>{{ link_to_action('GeneralController@login', 'Login', $parameters = array(), $attributes = array()) }} </li>
			@endif
			
			<li>{{ link_to_action('GeneralController@cadastro', 'Cadastre-se', $parameters = array(), $attributes = array()) }} </li>
		</ul>
		</li>
		<li>{{ link_to_action('ProdutoController@getCarrinho', 'Carrinho', $parameters = array(), $attributes = array()) }}</li>
		<li>{{ link_to_action('GeneralController@sobre', 'Sobre', $parameters = array(), $attributes = array()) }}</li>
		<li>{{ link_to_action('GeneralController@contato', 'Contate-nos', $parameters = array(), $attributes = array()) }}</li>
	</ul>
	<center>{{HTML::image('images/header.jpg') }} </center>

	<div class="container">
		@yield('content')
	</div>

</body>

</html> 