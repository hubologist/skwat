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
            
            if ($user->track_bp == 1) {
                $lifts[] = "Bench Press";
            }
            if ($user->track_dl == 1) {
                $lifts[] = "Bench Press";
            }
            if ($user->track_op == 1) {
                $lifts[] = "Bench Press";
            }
            if ($user->track_pu == 1) {
                $lifts[] = "Bench Press";
            }
            if ($user->track_sq == 1) {
                $lifts[] = "Bench Press";
            }

            return View::make('profile')
                            ->with('user', $user)
                            ->with('lifts', $lifts);
        }
        return App::abort(404);
    }

}
