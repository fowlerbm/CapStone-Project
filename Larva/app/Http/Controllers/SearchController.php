<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Game;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$result = DB::table('game')->where('title',  $search)->get();
        $TagResults = DB::table('tags')->where('name',  $search)->get();
        $UserResults = DB::table('users')->where('username',  $search)->get();

        return view('search.results', compact('result' , 'TagResults' , 'UserResults'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response		return view('search.results', compact('result' , 'TagResults'));
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
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

}
