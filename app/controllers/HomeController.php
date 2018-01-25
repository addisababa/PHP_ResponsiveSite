<?php
class HomeController extends Controller{
    
    public function home(){
        $this->loadView('home','index');
    }
}
