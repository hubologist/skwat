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
            $lifts = [
                "track_bp",
                "track_dl",
                "track_op",
                "track_pu",
                "track_sq"
            ];

            return View::make('profile')
                            ->with('user', $user)
                            ->with('lifts', $lifts);
        }
        return App::abort(404);
    }

}
