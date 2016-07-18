<?php namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\Fish as Fish;
use App\Model\Pakan as Pakan;
use Input;
use Redirect;

class AdminIkanController extends Controller {

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
		$fishs = Fish::all();

		return view('backend.ikan.index')
			->with('fishs', $fishs);
	}

	public function create()
	{

		return view('backend.ikan.create');
	}

	public function store()
	{
		$fish = new Fish;
		$fish->name = Input::get('name');
		$fish->latin_name = Input::get('latin_name');
		$fish->save();

		return Redirect::to('admin/ikan')
	 		->with('message', '<div class="alert alert-success" role="alert">Fish has been added!</div>');
	}

	public function edit($id)
	{
		$fish = Fish::find($id);

		return view('backend.ikan.edit')
			->with('fish', $fish);
	}

	public function update($id)
	{
		$fish = Fish::find($id);
		$fish->name = Input::get('name');
		$fish->latin_name = Input::get('latin_name');
		$fish->save();

		return Redirect::to('admin/ikan')
	 		->with('message', '<div class="alert alert-warning" role="alert">Fish has been updated!</div>');
	}

	public function delete($id)
	{
	 	Fish::destroy($id);
	 	return Redirect::to('admin/ikan')
	 		->with('message', '<div class="alert alert-danger" role="alert">Fish has been deleted!</div>');
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
