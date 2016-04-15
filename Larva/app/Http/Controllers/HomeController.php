<?php namespace App\Http\Controllers;

use App\Game;

class HomeController extends Controller {

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
     */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $games = Game::all()->take(20);
        $NewGames =  Game::all()->reverse()->take(5) ;
        $FeatGames =  Game::all()->take(5) ;
		return view('home' , compact('games' , 'NewGames' , 'FeatGames'));
	}


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function user()
	{
		return view('users.Profile');
	}
}
