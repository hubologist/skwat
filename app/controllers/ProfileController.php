<?php
/*
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class ProfileController extends BaseController {

    public function user($name)
    {
        $user = User::where('name', '=', $name);

        if ($user->count())
        {
            $user = $user->first();
            $lifts = [];
            

            return View::make('profile')
                            ->with('user', $user)
                            ->with('tracked', $tracked)
                            ->with('lifts', $lifts);
        }
        return App::abort(404);
    }

}
