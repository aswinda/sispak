<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class PakanUntuk extends Model {
	
	protected $table = 'pakan_komersil_untuk';

	public static function cariPakanKomersil($id)
	{
		// group id 5, user customer tidak ditampilkan
		$list = DB::select( DB::raw("SELECT 
							fish.name
						FROM 
							pakan_komersil_untuk, fish
						WHERE 
							pakan_komersil_untuk.pakan_komersil_id = :id AND
							pakan_komersil_untuk.fish_id = fish.id"),
		array(
				"id"	=> $id
			)
		);
		

		return $list;
	}
}
