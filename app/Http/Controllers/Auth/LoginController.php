<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            // jika user login adalah admin (kolom is_admin nilai-nya adalah 1)
            if (auth()->user()->is_admin == 1) {
                // ini akan di redirect ke halaman admin
                return redirect()->route('admin.dashboard');
            } else if (auth()->user()->is_admin == 0){
                // ini akan di redirect ke halaman contributor user sebagai penulis
                return redirect($this->redirectTo);
            } else if (auth()->user()->is_admin == 2){
                // ini akan di redirect ke halaman utama website
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }
    }

    public function logout()
    {
        if (Auth::id() ) {
        $users = User::find(Auth::id());
        $users->last_logged_in = Carbon::now()->toDateTimeString();
        $users->save();

        Auth::logout();

        }
        
        return redirect()->route('home');
    }
    
}