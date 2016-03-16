@extends('layout')
@section('content')

<div class="page-header">
	<h3>Faça seu cadastro</h3>
</div>

{{  Form::open(array('url' => 'usuarios/storecadastro', 'method' => 'post')) }}

<div class="col-md-12">
  <div class="row">
  	<div class="col-md-3">
		<div class="form-group">
			<label>Pessoa</label><br/>
			<div class="radio-inline">
				<label>
					<input type="radio" name="pj" id="tipopessoa1" value="fisica" required>
					Física
				</label>
			</div>
			<div class="radio-inline">
				<label>
					<input type="radio" name="pj" id="tipopessoa2" value="juridica" required>
					Jurídica
				</label>
			</div>
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-4 fisica">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" id="txtNomeCompleto" name="nomecompleto" required autofocus>
		</div>
  	</div>
  	<div class="col-md-2 fisica">
		<div class="form-group">
			<label>Sexo</label>
			<select name="sexo" class="form-control" id="comboSexo">
				<option value="#">Selecione</option>
				<option value="M">M</option>
				<option value="F">F</option>

			</select>
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6 juridica">
		<div class="form-group">
			<label>Razão Social</label>
			<input type="text" class="form-control" id="txtRazaoSocial" name="razao_social" required>
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6 juridica">
		<div class="form-group">
			<label>Inscrição estadual</label>
			<input type="text" class="form-control" id="txtInscEst" name="insc_estadual" required>
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-3">
		<div class="form-group">
			<label>Telefone</label>
			<input type="text" class="form-control" id="txtTelefone" name="telefone">
		</div>
  	</div>
  	<div class="col-md-3">
		<div class="form-group">
			<label>Celular</label>
			<input type="text" class="form-control" id="txtCelular" name="celular">
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
		<div class="form-group">
			<label>E-Mail</label>
			<input type="text" class="form-control" id="txtEmail" name="email" required>
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-3">
		<div class="form-group">
			<label>Senha</label>
			<input type="password" class="form-control" id="txtSenha" name="password" required>
		</div>
  	</div>
  	<div class="col-md-3">
		<div class="form-group">
			<label>Data de Nascimento</label>
			<input type="text" class="form-control" id="data_nascimento" name="data_nascimento">
		</div>
  	</div>
  <div class="row">
  	<div class="col-md-2">
		<div class="form-group">
			<label>CEP</label>
			<input type="text" class="form-control" id="txtCep" name="cep">
		</div>
  	</div>
  	<div class="col-md-2">
		<div class="form-group">
			<label>Cidade</label>
			<input type="text" class="form-control" id="txtCidade" name="cidade">
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
		<div class="form-group">
			<label>Bairro</label>
			<input type="text" class="form-control" id="txtBairro" name="bairro">
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-4">
		<div class="form-group">
			<label>Logradouro</label>
			<input type="text" class="form-control" id="txtLogradouro" name="logradouro">
		</div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-3">
		<div class="form-group">
			<label>Número</label>
			<input type="text" class="form-control" id="txtNumero" name="numero">
		</div>
  	</div>
  	<div class="col-md-3">
		<div class="form-group">
			<label>Complemento</label>
			<input type="text" class="form-control" id="txtComplemento" name="complemento">
		</div>
  	</div>
  </div>

  <div class="row">
  	<div class="col-md-6">
  		<button type="submit" class="btn btn-primary" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
  	</div>
  </div>
</div>

{{  Form::close() }}


@stop