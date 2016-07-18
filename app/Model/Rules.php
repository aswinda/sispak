<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Rules extends Model {
	
	protected $table = 'rules';

	public static function getGizi($fish, $umur)
	{
		$list = DB::select( DB::raw(
				"SELECT 
					rules.*
				FROM 
					rules,
					rules_fish
				WHERE 
					rules_fish.fish_id = :fish AND
					rules_fish.umur = :umur AND
					rules_fish.rules_id = rules.id
					"), 

			array(
				"fish"	=> $fish,
				"umur"	=> $umur
			));
		return $list[0];                                       
	}
}
