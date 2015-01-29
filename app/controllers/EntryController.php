<?php
/*
 * created by: Tiago @ http://lightradius.com
 * contact: hi@lightradius.com
 */

class EntryController extends BaseController {

    public function getEntry()
    {
        return View::make('new-entry');
    }

}
