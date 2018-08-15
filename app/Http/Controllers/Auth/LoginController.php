<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Grimthorr\LaravelToast\Toast;
use Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;

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
    protected $redirectTo = '/product';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Override login method to avoid using password
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request)
    {
        $user = User::all()->where('email', '=', $request->get('email'))->first();

        if ($request->input('admin')) {
            if (!Hash::check($request->input('password'), $user->password)) {
            $notification = [
                    'message' => 'Bad, bad, bad admin !',
                    'alert-type' => 'error',
                ];

                return view('auth.login_admin', ['email' => $user->email])->with($notification);
            }
        } else {
            /** @var Role $role */
            foreach ($user->roles as $role) {
                if (in_array('admin', $role->attributesToArray())) {
                    return view('auth.login_admin', ['email' => $user->email]);
                }
            }
        }

        if ($user instanceof User && Auth::loginUsingId($user->id)) {
            Auth::loginUsingId($user->id);
            return redirect('/product');
        }

        $notification = [
            'message' => 'Aucun utilisateur trouvé avec cet email !',
            'alert-type' => 'error',
        ];

        return redirect($this->redirectTo)->with($notification);
    }
}
