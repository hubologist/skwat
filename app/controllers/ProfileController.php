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
            $workouts = DB::table('workouts')->where('user_id', '=', $user->id)->get();

            return View::make('profile')
                            ->with('user', $user)
                            ->with('workouts', $workouts);
        }
        return App::abort(404);
    }

}
