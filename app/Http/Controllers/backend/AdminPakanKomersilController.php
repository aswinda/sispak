<?php namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\PakanKomersil as PakanKomersil;
use App\Model\PakanUntuk as PakanUntuk;
use App\Model\Fish as Fish;
use Input;
use Redirect;

class AdminPakanKomersilController extends Controller {

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
		$pakans = PakanKomersil::all();

		foreach ($pakans as $key => $pakan) 
		{
			$pakans[$key]->fish = PakanUntuk::cariPakanKomersil($pakan->id);
		}

		return view('backend.pakankomersil.index')
			->with('pakans', $pakans);
	}

	public function create()
	{
		$fish = Fish::all();
		return view('backend.pakankomersil.create')
			->with('fish', $fish);
	}

	public function store()
	{
		$pakan = new PakanKomersil;
		$pakan->name = Input::get('name');
		$pakan->harga = Input::get('harga');
		$pakan->berat = Input::get('berat');
		$pakan->save();

		$fishs = Input::get('fish');

		foreach ($fishs as $key => $fish) 
		{	
			$pakanUntuk = new PakanUntuk;
			$pakanUntuk->pakan_komersil_id = $pakan->id;
			$pakanUntuk->fish_id = $fish;
			$pakanUntuk->save();
		}
		

		return Redirect::to('admin/pakankomersil')
	 		->with('message', '<div class="alert alert-success" role="alert">Pakan has been added!</div>');
	}

	public function edit($id)
	{
		$pakan = PakanKomersil::find($id);

		return view('backend.pakankomersil.edit')
			->with('pakan', $pakan);
	}

	public function update($id)
	{
		$pakan = PakanKomersil::find($id);
		$pakan->name = Input::get('name');
		$pakan->harga = Input::get('harga');
		$pakan->save();


		return Redirect::to('admin/pakankomersil')
	 		->with('message', '<div class="alert alert-warning" role="alert">Pakan has been updated!</div>');
	}

	public function delete($id)
	{
	 	PakanKomersil::destroy($id);
	 	return Redirect::to('admin/pakankomersil')
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
