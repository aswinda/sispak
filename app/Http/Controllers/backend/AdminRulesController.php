<?php namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\Rules as Rules;
use Input;
use Redirect;

class AdminRulesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $lands = Land::listLands();
		$rules = Rules::all();

		return view('backend.rules.index')
			->with('rules', $rules);
	}

	public function create()
	{
		return view('backend.rules.create');
	}

	public function store()
	{
		$rules = new Rules;
		$rules->name = Input::get('name');
		$rules->karbohidrat = Input::get('karbohidrat');
		$rules->protein = Input::get('protein');
		$rules->lemak = Input::get('lemak');
		$rules->air_zat_adiktif = Input::get('air_zat_adiktif');		
		$rules->save();


		return Redirect::to('admin/rules')
	 		->with('message', '<div class="alert alert-success" role="alert">Rules has been added!</div>');
	}

	public function edit($id)
	{
		$rules = Rules::find($id);

		return view('backend.rules.edit')
			->with('rules', $rules);
	}

	public function update($id)
	{
		$rules = Rules::find($id);
		$rules->name = Input::get('name');
		$rules->karbohidrat = Input::get('karbohidrat');
		$rules->protein = Input::get('protein');
		$rules->lemak = Input::get('lemak');
		$rules->air_zat_adiktif = Input::get('air_zat_adiktif');		
		$rules->save();

		return Redirect::to('admin/rules')
	 		->with('message', '<div class="alert alert-warning" role="alert">Rules has been updated!</div>');
	}

	public function delete($id)
	{
	 	Rules::destroy($id);
	 	return Redirect::to('admin/rules')
	 		->with('message', '<div class="alert alert-danger" role="alert">Rules has been deleted!</div>');
	}

}
