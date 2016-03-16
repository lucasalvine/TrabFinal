<?php
use Projeto\Produto;

class ProdutoController extends BaseController{
	
	public function getProduto($id)
	{
		$produtos = Produto::all();

		if (Auth::check()){		
			$produto = Produto::find($id);
			return View::make('produto', get_defined_vars());
		}else
			return View::make('login', get_defined_vars());

		
	}


	public function getOrcamento()
	{
		$produtos = Produto::all();

		if (Auth::check()){		
			return View::make('orcamento', get_defined_vars());
		}else
			return View::make('login', get_defined_vars());

		
	}

	public function getCompra()
	{
		$produtos = Produto::all();

		if (Auth::check()){		
			return View::make('compra', get_defined_vars());
		}else
			return View::make('login', get_defined_vars());

		
	}

	public function postAddCarrinho()
	{
		$data = Input::all();
		unset($data['_token']);

		$data['usuario_id'] = Auth::user()->id;

		DB::table('carrinho')->insert($data);

		Session::flash('success', "Orçamento feito com sucesso. Consulte seu carrinho.");

		return Redirect::to('/');
	}


	public function postRealizaCompra()
	{
		$data = Input::all();
		unset($data['_token']);

		$data['usuario_id'] = Auth::user()->id;

		DB::table('compra')->insert($data);

		Session::flash('success', "Compra efetuada com sucesso.");

		return Redirect::to('/');
	}


	public function getCarrinho()
	{
		$produtos = Produto::all();
		if (Auth::check()){			
			$itens = DB::table('carrinho')->where('usuario_id','=', Auth::user()->id)->get();
			return View::make('carrinho', get_defined_vars());
		}else
			return View::make('login', get_defined_vars());

	}

	public function getPedidos()
	{
		$produtos = Produto::all();

		if (Auth::check()){		
			$itens = DB::table('compra')->where('usuario_id','=', Auth::user()->id)->get();
			return View::make('pedido', get_defined_vars());
		}else
			return View::make('login', get_defined_vars());

	}
	
}
