<?php namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Illuminate\Http\Request;

class addGamesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->middleware('auth');//<-- requires login
        $thisShit = Auth::User()->admin;
        if (Auth::check()&& $thisShit==true) { //<-- checks if logged in and if admin
            return view('games.addGames', compact('addGames')); //<-- returns the add game view
        } else{		return view('home');} //<-- return to home if not logged in or not admin
      //  return view('games.addGames', compact('addGames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param
     * @return Response
     */
    public function show()
    {

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
    public function __construct()
    {
        $this->middleware('auth');//<-- requires login
        $thisShit = Auth::User()->admin;
        if (Auth::check()&& $thisShit==true) { //<-- checks if logged in
            return view('games.addGames', compact('addGames'));
        } else{		return view('home');}
    }
}
