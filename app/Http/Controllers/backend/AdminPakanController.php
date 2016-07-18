<?php namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\Pakan as Pakan;
use Input;
use Redirect;

class AdminPakanController extends Controller {

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
		$pakans = Pakan::all();

		return view('backend.pakan.index')
			->with('pakans', $pakans);
	}

	public function create()
	{

		return view('backend.pakan.create');
	}

	public function store()
	{
		$pakan = new Pakan;
		$pakan->name = Input::get('name');
		$pakan->karbohidrat = Input::get('karbohidrat');
		$pakan->protein = Input::get('protein');
		$pakan->lemak = Input::get('lemak');
		$pakan->air_zat_adiktif = Input::get('air_zat_adiktif');
		$pakan->harga = Input::get('harga');
		$pakan->save();

		return Redirect::to('admin/pakan')
	 		->with('message', '<div class="alert alert-success" role="alert">Pakan has been added!</div>');
	}

	public function edit($id)
	{
		$pakan = Pakan::find($id);

		return view('backend.pakan.edit')
			->with('pakan', $pakan);
	}

	public function update($id)
	{
		$pakan = Pakan::find($id);
		$pakan->name = Input::get('name');
		$pakan->karbohidrat = Input::get('karbohidrat');
		$pakan->protein = Input::get('protein');
		$pakan->lemak = Input::get('lemak');
		$pakan->air_zat_adiktif = Input::get('air_zat_adiktif');
		$pakan->harga = Input::get('harga');
		$pakan->save();


		return Redirect::to('admin/pakan')
	 		->with('message', '<div class="alert alert-warning" role="alert">Pakan has been updated!</div>');
	}

	public function delete($id)
	{
	 	Pakan::destroy($id);
	 	return Redirect::to('admin/pakan')
	 		->with('message', '<div class="alert alert-danger" role="alert">Pakan has been deleted!</div>');
	}

	public function show($id)
	{
		// $land = land::detailLandsWithImage($id);

		// return view('admin.land.show')
		// 	->with('tab1', 'lands')
		// 	->with('title', 'lands')
		// 	->with('titleDescription', 'show')
		// 	->with('land', $land);
	}

}
