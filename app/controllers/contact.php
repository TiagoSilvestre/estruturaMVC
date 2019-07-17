<?php

require '../app/core/Controller.php';

class Contact extends Controller {
    
    public function index($name = '') {
        echo 'chuuara'. $name;
    }

    public function putsFunction (){
        echo 'puts funciii';
    }
}