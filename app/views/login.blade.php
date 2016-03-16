@extends('layout')
@section('content')

	<div class="page-header">
		<h3>Faça seu login</h3>
	</div>
	
   <p><span>Ou faça seu {{ link_to_action('GeneralController@cadastro', 'cadastro', $parameters = array(), $attributes = array()) }}</span></p>

	{{ Form::open(array('url' => 'login')) }}	

	<div class="col-md-12">
	  <div class="row">
	  	<div class="col-md-6">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" id="email" name="email" required autofocus>
			</div>
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="col-md-6">
			<div class="form-group">
				<label>Senha</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
	  	</div>
	  </div>


	  <div class="row">
	  	<div class="col-md-6">
	  		<button type="submit" class="btn btn-success" id="btnLogar">Logar</button>
	  	</div>
	  </div>
	</div>



      {{ Form::close() }}

   




@endsection