<?php
/* 
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class WorkoutController extends BaseController {

    public function workout($name)
    {
        $workout = DB::table('workouts')->where('name', '=', $name)->first();

        if ($workout)
        {
            Return View::make('workout')
                    ->with('workout', $workout);
        }
        
        return App::abort(404);
    }

}