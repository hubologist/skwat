<?php

class Workout extends Eloquent {
    
    protected $fillable = array('user_id', 'exer_id', 'weight', 'password_temp', 'sets', 'reps', 'created_at', 'updated_at');
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'workouts';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
