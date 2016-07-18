<?php namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Model\RulesFish as RulesFish;
use App\Model\Fish as Fish;
use App\Model\Rules as Rules;
use Input;
use Redirect;

class AdminRulesFishController extends Controller {

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
		$rulesFish = RulesFish::listRules();

		return view('backend.rulesfish.index')
			->with('rulesFish', $rulesFish);
	}

	public function create()
	{
		$fish = Fish::all();
		$rules = Rules::all();

		return view('backend.rulesfish.create')
			->with('fish', $fish)
			->with('rules', $rules);
	}

	public function store()
	{
		$rulesFish = new RulesFish;
		$rulesFish->fish_id = Input::get('fish_id');
		$rulesFish->umur = Input::get('umur');
		$rulesFish->rules_id = Input::get('rules_id');
		$rulesFish->save();


		return Redirect::to('admin/rulesfish')
	 		->with('message', '<div class="alert alert-success" role="alert">Rules Fish has been added!</div>');
	}

	public function edit($id)
	{
		$rulesFish = RulesFish::find($id);
		$fish = Fish::all();
		$rules = Rules::all();

		return view('backend.rulesFish.edit')
			->with('rulesFish', $rulesFish)
			->with('fish', $fish)
			->with('rules', $rules);
	}

	public function update($id)
	{
		$rulesFish = RulesFish::find($id);
		$rulesFish->fish_id = Input::get('fish_id');
		$rulesFish->umur = Input::get('umur');
		$rulesFish->rules_id = Input::get('rules_id');
		$rulesFish->save();


		return Redirect::to('admin/rulesfish')
	 		->with('message', '<div class="alert alert-warning" role="alert">Rules Fish has been updated!</div>');
	}

	public function delete($id)
	{
	 	RulesFish::destroy($id);
	 	return Redirect::to('admin/rulesfish')
	 		->with('message', '<div class="alert alert-danger" role="alert">Rules Fish has been deleted!</div>');
	}

}
