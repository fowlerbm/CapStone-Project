<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instan/home/inet2005/PhpstormProjects/CapStone-Project/Larvace.
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
        $users = User::all()->take(5);
        $posts = DB::table('posts')->where('thread_id', 1)->get();
        return view('users.UserHome' , compact('users' , 'posts'));
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

    /**
     *Display the specified response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.Profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }


    public function update($id)
    {
        $user = User::findOrFail($id);
        $user->update();

        return redirect( url("/user", $user->user_id) );
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect( url("/user"));
    }

}