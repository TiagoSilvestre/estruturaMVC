<?php

require '../app/core/Controller.php';

class Home extends Controller {

    public function index($name = '') {
        $user = $this->model('User'); // instancia o model User
        $user->name = $name;

        $this->view('home/index', ['name' => $user->name]);
    }

    public function test() {
        echo 'esse é o testeee ';
    }
}
