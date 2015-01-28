<?php
/*
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class WorkoutController extends BaseController {

    public function getEditWorkout($name)
    {
        $workout = DB::table('workouts')
                        ->where('name', '=', $name)->first();
        $exercises = DB::table('exercises')
                        ->where('wrkt_id', '=', $workout->id)->get();

        if ($workout)
        {
            Return View::make('workout')
                            ->with('workout', $workout)
                            ->with('exercises', $exercises);
        }

        return App::abort(404);
    }

    public function postEditWorkout($name)
    {
        $validator = Validator::make(Input::all(), array(
                    'name' => 'required',
                    'sets' => 'required'
        ));
        if ($validator->fails())
        {
            // Return to form page with proper error messages
            return Redirect::route('account-settings')
                            ->withErrors($validator);
        }
        else
        {
            // Update our workout with the added exercise's information
            $name = Input::get('name');
            $sets = Input::get('sets');

            $exercise->name = $name;
            $exercise->sets = $sets;

            if ($user->save())
            {
                return Redirect::route('home')
                                ->with('success', 'Your settings has been successfully updated!');
            }
            return Redirect::route('home')
                            ->with('danger', 'Your settings could not be changed.');
        }
        return Redirect::route('home')
                        ->with('danger', 'Your settings could not be changed.');
    }
}