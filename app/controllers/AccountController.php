<?php
/*
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class AccountController extends BaseController {

    public function getChangePassword()
    {
        return View::make('account.change-password');
    }
    
    public function getLogin()
    {
        return View::make('account.login');
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('home')
                        ->with('success', 'You\'re now logged out. See you!');
    }

    public function postLogin()
    {
        $validator = Validator::make(Input::all(), array('email' => 'required|max:64|min:3|email', 'password' => 'required|max:64|min:6'
        ));
        if ($validator->fails())
        {
            // Return to form page with proper error messages
            return Redirect::route('account-login')
                            ->withErrors($validator)
                            ->withInput();
        }
        else
        {
            // Login user
            $remember = (Input::has('remember')) ? true : false;

            $auth = Auth::attempt(array(
                        'email' => Input::get('email'),
                        'password' => Input::get('password'),
                        'active' => 1
                            ), $remember);

            if ($auth)
            {
                // Redirect to intended page
                return Redirect::intended('/')->with('success', 'You are now logged in!');
            }
            else
            {
                return Redirect::route('account-login')->with('danger', 'Wrong email/password combination or account not activated.');
            }
        }
        return Redirect::route('account-login')
                        ->with('danger', 'There was a problem logging you in. Please contact support.');
    }

    public function getCreate()
    {
        return View::make('account.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), array(
                    'email' => 'required|max:64|min:3|email|unique:users',
                    'name' => 'required|max:64|min:3',
                    'password' => 'required|max:64|min:6'
        ));

        if ($validator->fails())
        {
            // Return to form page with proper error messages
            return Redirect::route('account-create')
                            ->withErrors($validator)
                            ->withInput();
        }
        else
        {
            // Create an acount
            $email = Input::get('email');
            $name = Input::get('name');
            $password = Input::get('password');

            // Activation code
            $code = str_random(64);
            $user = User::create(array(
                        'active' => 0,
                        'email' => $email,
                        'username' => $name,
                        'password' => Hash::make($password),
                        'code' => $code
            ));

            if ($user)
            {
                // Send the activation link
                Mail::send('emails.auth.activate', array(
                    'link' => URL::route('account-activate', $code),
                    'name' => $name
                        ), function($message) use($user) {
                    $message
                            ->to($user->email, $user->username)
                            ->subject('Skwat | Activate your new account');
                });

                return Redirect::route('home')
                                ->with('success', 'One more step! You\'ll get an email from us soon. Please follow the activation link to activate your account.');
            }
        }
    }

    public function getActivate($code)
    {
        // Find user whose code corresponds to the one we've previously sent through email
        $user = User::where('code', '=', $code)->where('active', '=', 0);

        if ($user->count())
        {
            $user = $user->first();

            $user->active = 1;
            $user->code = '';

            if ($user->save())
            {
                return Redirect::route('home')
                                ->with('success', 'Your account has been successfully activated! Please login to start using Skwat.');
            }
        }
        return Redirect::route('home')
                        ->with('danger', 'There was a problem activating your account. Please try again later.');
    }

}
