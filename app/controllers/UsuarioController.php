<?php

use Projeto\Produto;

class UsuarioController extends BaseController{


	public function postCadastro()
	{
		$data = Input::all();
		unset($data['_token']);
		unset($data['btnCadastrar']);
		unset($data['confsenha']);

		$data['password'] = Hash::make($data['password']);

		DB::table('usuario')->insert($data);

		Session::flash('success', "Cadastro feito com sucesso");

		return Redirect::to('login');
	}

	public function showLogin()
	{
		$produtos = Produto::all();
	    return View::make('login', get_defined_vars());
	}

	public function doLogin()
	{

		$rules = array(
		    'email'    => 'required|email',
		    'password' => 'required|alphaNum|min:3' 
		);

		$validator = Validator::make(Input::all(), $rules);


		if ($validator->fails()) {
			Session::flash('error','Verifique os dados informados. A senha deve ter pelo o menos 3 caracteres.');
		    return Redirect::to('login')
		        ->withErrors($validator) 
		        ->withInput(Input::except('password'));
		} else {

		   
		    $userdata = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password')
		    );

		  
		    if (Auth::attempt($userdata)) {

		        Session::flash('success','Você está logado!');
		        return Redirect::to('/');

		    } else {       

		    	Session::flash('error','Falha ao Fazer Login');
		        return Redirect::to('login');

		    }

		}

	}

	public function doLogout()
	{
	    Auth::logout(); 
	    return Redirect::to('login');
	}

}
