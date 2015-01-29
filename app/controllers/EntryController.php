<?php
/*
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class EntryController extends BaseController {

    public function postEntry()
    {
        $validator = Validator::make(Input::all(), array(
                    'sets' => 'required',
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
            $workout = new Workout();
            $user = User::find(Auth::user()->id);

            // Getting our Input variables
            $weight = Input::get('weight');
            $sets = Input::get('sets');
            $reps = Input::get('reps');

            $workout->user_id = $user->id;
            $workout->weight = $weight;
            $workout->sets = $sets;
            $workout->reps = $reps;

            if ($workout->save())
            {
                return Redirect::route('new-entry')
                                ->with('success', 'Your workout has been logged.');
            }
        }
        return Redirect::route('new-entry')
                        ->with('danger', 'Something went wrong, please try again later.');
    }

    public function getEntry()
    {
        return View::make('new-entry');
    }

}
