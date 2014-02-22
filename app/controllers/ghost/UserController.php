<?php

namespace Ghost;

class UserController extends \BaseController {
    public function index()
    {
        return \View::make('ghost.index');
    }
}