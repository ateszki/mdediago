<?php 
namespace App\Http\Controllers\Auth;

use Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Auth;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

	/**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        if($provider == 'twitter'){
        	$med_user = User::firstOrNew(["provider"=>"twitter","provider_id"=>$user->getId()]);

        	if($med_user->id == ''){
        		return view('auth.logintwitter',["u"=>$user]);
        	} else {
        		Auth::loginUsingId($med_user->id);
				return new RedirectResponse(url('/home'));
        	}

        }

        $med_user = User::firstOrNew(['email'=>$user->getEmail()]);

        $med_user->provider = $provider;
        $med_user->provider_id = $user->getId();
		$med_user->name = $user->getName();
		$med_user->email = $user->getEmail();
		$med_user->avatar = $user->getAvatar();

		$med_user->save();

		Auth::loginUsingId($med_user->id);

		return redirect()->intended('dashboard');
		//return new RedirectResponse(url('/home'));
        //var_dump($user);
        // $user->token;
    }

   public function twitterCallback()
    {
        
    	$data = Input::all();

    	$u = [
    		"provider"=>"twitter",
    		"provider_id"=>$data["provider_id"],
    		"name" => $data["name"],
    		"email" => $data["email"],
    		"avatar" => $data["avatar"],
    	];

        $med_user = User::firstOrNew(['email'=>$u["email"]]);

        $med_user->fill($u);
        
		$med_user->save();

		Auth::loginUsingId($med_user->id);

		//return new RedirectResponse(url('/home'));
		return redirect()->intended('home');
        //var_dump($user);
        // $user->token;
    }

}
