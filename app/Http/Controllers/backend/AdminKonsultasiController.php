<?php namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\Fish as Fish;
use App\Model\Pakan as Pakan;
use App\Model\PakanUntuk as PakanUntuk;
use App\Model\PakanKomersil as PakanKomersil;
use App\Model\Rules as Rules;
use Input;
use Redirect;

class AdminKonsultasiController extends Controller {

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
		$fish = Fish::all();

		return view('backend.konsultasi.index')
			->with('fish', $fish);
	}

	public function submit()
	{
		$fish_id = Input::get('fish');
		$fish = Fish::find($fish_id)->name;
		//var_dump($fish);
		$umur = Input::get('umur');
		if($umur <= 2)
			$umur = "Larva";
		else if($umur > 1 && $umur <= 12)
			$umur = "Juvenil";
		else
			$umur = "Induk";

		$gizi = Rules::getGizi($fish_id, $umur);

		$pakan = Pakan::all();

		return view('backend.konsultasi.hasil')
			->with('fish', $fish)
			->with('fish_id', $fish_id)
			->with('umur', $umur)
			->with('gizi', $gizi)
			->with('pakan', $pakan);
	}

	public function kesimpulan()
	{
		$fish = Input::get('fish');
		$fish_id = Input::get('fish_id');
		$umur = Input::get('umur');
		$gizi = Input::get('gizi');
		$jumlah = Input::get('jumlah');

		$gizi = Rules::find($gizi);

		$ids = Input::get('pakan_id');
		$names = Input::get('pakan');

		// satu bahan pakan
		if(count($ids) <= 1)
		{
			return Redirect::to('admin/konsultasi')
				->with('message', '<div class="alert alert-danger" role="alert">Pilihan pakan minimal 2!</div>');
		}

		// dua bahan pakan
		else if(count($ids) == 2)
		{
			$total = 0;

			foreach($ids as $id)
			{
				$nutrisi = Pakan::find($id);
				$hasil[$id] = abs($gizi->protein - $nutrisi->protein*100);

				$total += $hasil[$id];
			}

			foreach($ids as $id)
			{
				$hasil[$id] = number_format(($hasil[$id]/$total * $jumlah), 2, '.', '');;
			}
		}
		// lebih dari 2
		else if(count($ids) > 2)
		{
			// cari rata-rata
			$protein_utama = 0;
			$jumlah_protein_utama = 0;
			$protein_penunjang = 0;
			$jumlah_protein_penunjang = 0;
			foreach($ids as $id)
			{
				$nutrisi = Pakan::find($id);

				if($nutrisi->protein >= 0.2)
				{
					$protein_utama += $nutrisi->protein * 100;
					$jumlah_protein_utama++;
				}
				else
				{
					$protein_penunjang += $nutrisi->protein * 100;
					$jumlah_protein_penunjang++;
				}
			}

			$protein_utama /= $jumlah_protein_utama;
			$protein_penunjang /= $jumlah_protein_penunjang;

			$dua = abs($gizi->protein - $protein_utama);
			$satu = abs($gizi->protein - $protein_penunjang);

			$total = $satu + $dua;

			$protein_utama = ($satu/$total * $jumlah)/$jumlah_protein_utama;
			$protein_penunjang = ($dua/$total * $jumlah)/$jumlah_protein_penunjang;


			foreach($ids as $id)
			{
				$nutrisi = Pakan::find($id);
				if($nutrisi->protein >= 0.2)
					$hasil[$id] = number_format($protein_utama, 2, '.', '');
				else
					$hasil[$id] = number_format($protein_penunjang, 2, '.', '');
			}
		}

		//var_dump($hasil);
		//var_dump($gizi->protein);
		
		$pakans = Pakan::all();

		$komersil = PakanKomersil::cariPakanIkan($fish_id);

		return view('backend.konsultasi.kesimpulan')
			->with('fish', $fish)
			->with('umur', $umur)
			->with('gizi', $gizi)
			->with('ids', $ids)
			->with('hasil', $hasil)
			->with('names', $names)
			->with('pakans', $pakans)
			->with('jumlah', $jumlah)
			->with('komersil', $komersil);
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
		PakanKomersil::destroy($id);
		return Redirect::to('admin/pakankomersil')
			->with('message', 'Pakan has been deleted!');
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
