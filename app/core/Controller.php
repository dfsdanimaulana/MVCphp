<?php

class Controller
{
    public function view($view, $data = [])
    {
        //panggil view yg ada di folder views
        require_once('../app/views/' . $view . '.php');
    }
}
