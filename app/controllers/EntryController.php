<?php
/*
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class EntryController extends BaseController {

    public function postEntry()
    {
        $validator = Validator::make(Input::all(), array(
                    'exercise' => 'required',
                    'reps' => 'required',
                    'weight' => 'required'
        ));

        if ($validator->fails())
        {
            return Redirect::route('new-entry')
                            ->withErrors($validator)
                            ->withInput();
        }
        else
        {
            // Log the workout
            if ($user->count())
            {
                $user = $user->first();

                // Generate new code and password for the user
                $code = str_random(64);
                $password = str_random(8);

                $user->code = $code;
                $user->password_temp = Hash::make($password);

                if ($user->save())
                {
                    // This means the user code has been successfully updated
                    Mail::send('emails.auth.recover', array(
                        'link' => URL::route('account-reactivate', $code),
                        'name' => $user->name,
                        'password' => $password
                            ), function($message) use($user) {
                        $message
                                ->to($user->email, $user->name)
                                ->subject('Skwat | Your new password');
                    });

                    return Redirect::route('home')
                                    ->with('warning', 'We have sent you a new password by email.');
                }
            }
        }
        return Redirect::route('account-recovery')
                        ->with('danger', 'Something went wrong, please try again later.');
    }

    public function getEntry()
    {
        $exercises = DB::table('exercises')->get();

        return View::make('new-entry')
                        ->with('exercises', $exercises);
    }

}
