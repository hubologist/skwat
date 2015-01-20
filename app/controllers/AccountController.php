<?php
/*
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class AccountController extends BaseController {

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

            echo '<pre>', print_r($user), '<pre>';
            if ($user->save())
            {
                echo '-----------------------';
                echo '<pre>', print_r($user), '<pre>';
            }
        }
    }
}