<?php namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\Fish as Fish;
use Input;
use Redirect;

class AdminController extends Controller {

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
		return view('backend.index');
	}

	public function create()
	{
		// $districts = District::all();
		// $provinces = Province::all();

		// return view('admin.land.create')
		// 	->with('tab1', 'Lands')
		// 	->with('tab2', 'Create')
		// 	->with('title', 'Lands')
		// 	->with('titleDescription', 'Manage Lands')
		// 	->with('districts', $districts)
		// 	->with('provinces', $provinces);
	}

	public function store()
	{
		// //var_dump(Input::all());
		// $image = new Image;
		// // Store Image
		// if (Input::file('file') != NULL)
		// {
		// 	if(Input::file('file')->getClientMimeType() != 'image/jpeg' &&
		// 	Input::file('file')->getClientMimeType() != 'image/jpg' &&
		// 	Input::file('file')->getClientMimeType() != 'image/png'  &&
		// 	Input::file('file')->getClientMimeType() != 'image/bmp')
		// 	{
		// 		return Redirect::back()
		// 			->with('errors', 'File Harus gambar dan bertipe jpeg, jpg, png');
		// 	}

		// 	$imagePath = new ImagePath;
		// 	$file = Input::file('file');
		// 	$imagePath->name = strtotime("now");
		// 	$extension = str_replace("image/", "", $file->getClientMimeType());
		// 	$imagePath->path = $imagePath->name.'.'.$extension;
		// 	Input::file('file')->move(public_path().'/images/lands',$imagePath->path);

		// 	$imagePath->save();

		// 	$image->image_path_id = $imagePath->id;
		// 	$image->save();
		// }

		// //Store Products
		// $land = new Land;
		// $land->name = Input::get('name');
		// $land->wide = Input::get('wide');
		// $land->price = Input::get('price');
		// $land->district_id = Input::get('district');
		// $land->description = Input::get('description');
		// $land->image_id = $image->id;
		// $land->save();

		// return Redirect::to('admin/land')
		// 	->with('message', 'Land has been added');
	}

	public function edit($id)
	{
		// $land = Land::detailLandsWithImage($id);
		// $provinces = Province::all();
		// $districts = District::all();

		// return view('admin.land.edit')
		// 	->with('tab1', 'lands')
		// 	->with('title', 'lands')
		// 	->with('titleDescription', 'Edit')
		// 	->with('land', $land)
		// 	->with('provinces', $provinces)
		// 	->with('districts', $districts);
	}

	public function update($id)
	{
		// $land = Land::find($id);
		// $image = Image::find($land->image_id);
		// $imagePath = ImagePath::find($image->image_path_id);
		// // Store Image
		// if (Input::file('file') != NULL)
		// {
		// 	if($imagePath->id != 0)
		// 		File::delete(public_path().'/images/lands/'.$imagePath->path);

		// 	if(Input::file('file')->getClientMimeType() != 'image/jpeg' &&
		// 	Input::file('file')->getClientMimeType() != 'image/jpg' &&
		// 	Input::file('file')->getClientMimeType() != 'image/png'  &&
		// 	Input::file('file')->getClientMimeType() != 'image/bmp')
		// 	{
		// 		return Redirect::back()
		// 			->with('errors', 'File Harus gambar dan bertipe jpeg, jpg, png');
		// 	}

			
		// 	$file = Input::file('file');
		// 	$imagePath->name = strtotime("now");
		// 	$extension = str_replace("image/", "", $file->getClientMimeType());
		// 	$imagePath->path = $imagePath->name.'.'.$extension;
		// 	Input::file('file')->move(public_path().'/images/lands',$imagePath->path);

		// 	$imagePath->save();

		// 	$image->image_path_id = $imagePath->id;
		// 	$image->save();
		// }

		// //Store Products
		// $land->name = Input::get('name');
		// $land->wide = Input::get('wide');
		// $land->price = Input::get('price');
		// $land->description = Input::get('description');
		// $land->image_id = $image->id;
		// $land->save();

		// return Redirect::to('admin/land')
		// 	->with('message', 'land has been updated!');
	}

	public function delete($id)
	{
	// 	Land::destroy($id);
	// 	return Redirect::to('admin/land')
	// 		->with('message', 'land has been deleted!');
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
