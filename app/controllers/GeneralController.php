<?php
use Projeto\Produto;


class GeneralController extends BaseController{
	
	public function index()
	{
		$produtos = Produto::all();
		return View::make('index', get_defined_vars());
	}

	public function sobre()
	{
		$produtos = Produto::all();
		return View::make('sobre', get_defined_vars());
	}

	public function contato()
	{
		$produtos = Produto::all();
		return View::make('contato', get_defined_vars());
	}

	public function login()
	{
		$produtos = Produto::all();
		return View::make('login', get_defined_vars());
	}

	public function cadastro()
	{
		$produtos = Produto::all();
		return View::make('cadastro', get_defined_vars());
	}

	public function postContato()
	{
		$data = Input::all();
		unset($data['_token']);
		unset($data['btnCadastrar']);
		unset($data['confsenha']);

		DB::table('contato')->insert($data);

		Session::flash('success', "Mensagem Enviada com sucesso");

		return Redirect::to('/');
	}

	public function postBuscaProduto()
	{
		$palavra = Input::get('busca');

		$produtos = Produto::where('nome','LIKE',"%$palavra%")->orWhere('id','=',$palavra)->get();

		return View::make('pesquisa',get_defined_vars());
	}
}
