<?php

class PagesController extends BaseController {

    public function home() {
        return View::make('home');
    }
    
    public function login() {
        return View::make('login');
    }
}
