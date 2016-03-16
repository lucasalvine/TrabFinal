@extends('layout')
@section('content')
{{  Form::open(array('url' => 'produtos/orcamento', 'method' => 'post')) }}

<div class="page-header">
    <h3>Faça seu orçamento</h3>
  </div>


<div class="col-md-12">
  <div class="row">
    <div class="col-md-4 fisica">
    <div class="form-group">
      <label>Modelo Tenda</label>
      <select class="form-control" name="modelo_tenda">
      @foreach ($produtos as $produto)
      <option value="{{$produto->nome}}">{{ $produto->nome }} </option>
      @endforeach
      </select>
    </div>
    </div>
  </div>
  <div class="row">
  	<div class="col-md-4 fisica">
		<div class="form-group">
			<label>Tamanho Espaço</label>
			<input type="text" class="form-control" id="txtNomeCompleto" name="tamanho_espaco" required autofocus>
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
		<div class="form-group">
			<label>Tipo Evento</label>
			<input type="text" class="form-control" id="txtEmail" name="tipo_evento">
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
		<div class="form-group">
			<label>Descrição Evento</label>
			<textarea class="form-control" name="desc_evento"></textarea>
		</div>
  	</div>
  </div>
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label>Endereço Evento</label>
      <input type="text" class="form-control" id="txtEmail" name="endereco_evento">
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label>Dias Locação</label>
      <input type="text" class="form-control" id="txtEmail" name="dias_locacao">
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label>Forma Pagamento</label>
      <select class="form-control" name="forma_pagamento">
    
      <option value="Cartão de Crédito">Cartão de Crédito </option>
      <option value="Cartão de Débito">Cartão de Débito </option>
      <option value="Boleto">Boleto </option>
      <option value="Dinheiro">Dinheiro </option>

      </select>
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