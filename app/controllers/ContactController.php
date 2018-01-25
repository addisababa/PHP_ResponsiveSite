<?php
class ContactController extends Controller{
    public function contact(){
        $this->loadView("contact","index");
    }
}
