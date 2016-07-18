<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class PakanKomersil extends Model {
	
	protected $table = 'pakan_komersil';

	public static function cariPakanIkan($fish_id)
	{
		// group id 5, user customer tidak ditampilkan
		$list = DB::select( DB::raw("SELECT 
							pakan_komersil.name,
							pakan_komersil.berat,
							pakan_komersil.harga
						FROM 
							pakan_komersil, 
							pakan_komersil_untuk, 
							fish
						WHERE
							pakan_komersil_untuk.fish_id = :id AND 
							pakan_komersil_untuk.pakan_komersil_id = pakan_komersil.id AND
							pakan_komersil_untuk.fish_id = fish.id"),
		array(
				"id"	=> $fish_id
			)
		);
		

		return $list;
	}

}
