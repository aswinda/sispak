<?php 
namespace App\Http\Controllers;
use Validator;
use Redirect;
use Illuminate\Http\Request;
use App\Model\Profile as Profile;
use App\Model\User as User;
use Illuminate\Support\Facades;
use Input;
use Hash;
use Auth;

class UsersController extends Controller 
{

	public function index()
	{
		return view('auth.login');
	}

	public function register()
	{
		return view('auth.register');
	}

	public function postRegister(Request $request)
	{
		//var_dump(Input::all());
		$rules = array(
			'email' => 'required|unique:users|email',
			'password' => 'required',
			'name' => 'required'
		);
		//return Hash::make(Input::get('password'));
		$validator = Validator::make($request->input(), $rules);

		if($validator->fails()){
			var_dump($validator->messages());
		}

		$profile = new Profile();
		$profile->name = $request->input('name');
		$profile->save();

		$user = new User();
		$user->profile_id = $profile->id;
		$user->email = $request->input('email');
		$user->password = Hash::make($request->input('password'));
		$user->save();

		return Redirect::to('login')
			->with('message', 'User has been added');

	}

	public function postLogin()
	{
		$remember = (Input::has('remember')) ? true : false;

		if(Auth::attempt(array(
			'email' 		=> Input::get('email'),
			'password' 		=> Input::get('password')
			), $remember))
		{
			return Redirect::to('admin/konsultasi');
		} 
		else 
		{
			return redirect::back()->with('errors', "Wrong Email/Password!");
		}

	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}
