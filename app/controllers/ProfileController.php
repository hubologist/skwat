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
                "Bench Press",
                "Deadlift",
                "Overhead Press",
                "Pull-up",
                "Squat"
            ];
            $tracked = [
                "tracked_bp",
                "tracked_dl",
                "tracked_op",
                "tracked_pu",
                "tracked_sq"
            ];

            return View::make('profile')
                            ->with('user', $user)
                            ->with('tracked', $tracked)
                            ->with('lifts', $lifts);
        }
        return App::abort(404);
    }

}
