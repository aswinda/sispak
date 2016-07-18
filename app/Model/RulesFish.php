<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class RulesFish extends Model {
	
	protected $table = 'rules_fish';

	public static function listRules()
	{
		// group id 5, user customer tidak ditampilkan
		$list = DB::select( DB::raw("SELECT 
							rules_fish.id,
							fish.name AS fish_name,
							rules_fish.umur,
							rules.name AS rules_name
						FROM 
							rules_fish,
							rules,
							fish
						WHERE 
							rules_fish.fish_id = fish.id AND
							rules_fish.rules_id = rules.id")
		);
		

		return $list;
	}

}
