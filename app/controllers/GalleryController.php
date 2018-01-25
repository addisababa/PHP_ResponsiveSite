<?php
class GalleryController extends Controller{
    public function gallery(){
        $this->loadView('gallery','index');
    }
}
