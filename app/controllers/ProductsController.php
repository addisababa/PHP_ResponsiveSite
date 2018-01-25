<?php
class ProductsController extends Controller{
        public $layout = "layout";
	public function products(){
            $this->loadView("products","index2");
	}
}
