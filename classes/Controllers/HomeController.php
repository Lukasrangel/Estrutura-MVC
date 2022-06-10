<?php

namespace Controllers;

class HomeController extends Controller {


    public function index(){
        $this->View = new \Views\MainView('home.php');
        $this->View->render();
    }

}

?>