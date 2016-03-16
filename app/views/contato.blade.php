@extends('layout')
@section('content')
{{  Form::open(array('url' => 'enviamensagem', 'method' => 'post')) }}

<div class="page-header">
	<h3>Entre em contato conosco</h3>
</div>
	

<div class="col-md-12">
  <div class="row">
  	<div class="col-md-4 fisica">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" id="txtNomeCompleto" name="nome" required autofocus>
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
		<div class="form-group">
			<label>E-Mail</label>
			<input type="text" class="form-control" id="txtEmail" name="email">
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
		<div class="form-group">
			<label>Mensagem</label>
			<textarea class="form-control" name="mensagem"></textarea>
		</div>
  	</div>
  </div>


  <div class="row">
  	<div class="col-md-6">
  		<button type="submit" class="btn btn-success" id="btnCadastrar">Enviar</button>
  	</div>
  </div>
</div>


	
{{ Form::close() }}
@stop